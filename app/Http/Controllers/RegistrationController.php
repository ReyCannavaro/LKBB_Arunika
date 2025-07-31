<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Tim;
use App\Models\Personil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    /**
     *
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function create(Event $event)
    {
        if (now()->lt($event->tanggal_mulai_pendaftaran) || now()->gt($event->tanggal_selesai_pendaftaran)) {
            return redirect('/')->with('error', 'Pendaftaran untuk event ini sudah ditutup atau belum dibuka.');
        }

        return view('registration.form', compact('event'));
    }

    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Event $event)
    {
        if (now()->lt($event->tanggal_mulai_pendaftaran) || now()->gt($event->tanggal_selesai_pendaftaran)) {
            return redirect()->back()->with('error', 'Pendaftaran untuk event ini sudah ditutup atau belum dibuka.');
        }

        $request->validate([
            'asal_sekolah' => 'required|string|max:255',
            'nama_satuan' => 'required|string|max:255',
            'nama_pasukan' => 'required|string|max:255',
            'jumlah_pasukan' => 'required|in:12,15',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Max 2MB

            'pelatih_nama_lengkap' => 'required|string|max:255',
            'pelatih_nomor_telepon' => 'required|string|max:20',
            'pelatih_foto_formal' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

            'official_nama_lengkap' => 'required|string|max:255',
            'official_nomor_telepon' => 'required|string|max:20',
            'official_foto_formal' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'official_kartu_pelajar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

            'danton_nama_lengkap' => 'required|string|max:255',
            'danton_nomor_telepon' => 'required|string|max:20',
            'danton_foto_formal' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'danton_kartu_pelajar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

            'pasukan_nama_lengkap.*' => 'required|string|max:255',
            'pasukan_kartu_pelajar.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'pasukan_nama_lengkap' => 'array|size:' . $request->input('jumlah_pasukan'),
            'pasukan_kartu_pelajar' => 'array|size:' . $request->input('jumlah_pasukan'),
        ]);

        DB::transaction(function () use ($request, $event) {
            $buktiPembayaranPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');

            $tim = Tim::create([
                'event_id' => $event->id,
                'asal_sekolah' => $request->asal_sekolah,
                'nama_satuan' => $request->nama_satuan,
                'nama_pasukan' => $request->nama_pasukan,
                'jumlah_pasukan' => $request->jumlah_pasukan,
                'bukti_pembayaran_path' => $buktiPembayaranPath,
                'status_pembayaran' => 'pending',
            ]);

            $pelatihFotoPath = $request->file('pelatih_foto_formal')->store('personil_fotos', 'public');
            Personil::create([
                'tim_id' => $tim->id,
                'jenis_personil' => 'pelatih',
                'nama_lengkap' => $request->pelatih_nama_lengkap,
                'nomor_telepon' => $request->pelatih_nomor_telepon,
                'foto_formal_path' => $pelatihFotoPath,
            ]);

            $officialFotoPath = $request->file('official_foto_formal')->store('personil_fotos', 'public');
            $officialKartuPath = $request->file('official_kartu_pelajar')->store('kartu_pelajar', 'public');
            Personil::create([
                'tim_id' => $tim->id,
                'jenis_personil' => 'official',
                'nama_lengkap' => $request->official_nama_lengkap,
                'nomor_telepon' => $request->official_nomor_telepon,
                'foto_formal_path' => $officialFotoPath,
                'kartu_pelajar_path' => $officialKartuPath,
            ]);

            $dantonFotoPath = $request->file('danton_foto_formal')->store('personil_fotos', 'public');
            $dantonKartuPath = $request->file('danton_kartu_pelajar')->store('kartu_pelajar', 'public');
            Personil::create([
                'tim_id' => $tim->id,
                'jenis_personil' => 'danton',
                'nama_lengkap' => $request->danton_nama_lengkap,
                'nomor_telepon' => $request->danton_nomor_telepon,
                'foto_formal_path' => $dantonFotoPath,
                'kartu_pelajar_path' => $dantonKartuPath,
            ]);

            $pasukanNames = $request->pasukan_nama_lengkap;
            $pasukanKartuFiles = $request->file('pasukan_kartu_pelajar');

            foreach ($pasukanNames as $index => $namaPasukan) {
                $kartuPelajarPath = null;
                if (isset($pasukanKartuFiles[$index]) && $pasukanKartuFiles[$index]->isValid()) {
                    $kartuPelajarPath = $pasukanKartuFiles[$index]->store('kartu_pelajar', 'public');
                }

                Personil::create([
                    'tim_id' => $tim->id,
                    'jenis_personil' => 'pasukan',
                    'nama_lengkap' => $namaPasukan,
                    'kartu_pelajar_path' => $kartuPelajarPath,
                ]);
            }
        });

        return redirect()->back()->with('success', 'Pendaftaran tim Anda berhasil!');
    }
}
