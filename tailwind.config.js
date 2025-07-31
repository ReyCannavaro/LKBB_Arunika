/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        'arunika-red': '#B91C1C',
        'arunika-yellow': '#F59E0B',
        'arunika-red-secondary': '#F87171',
        'arunika-yellow-secondary': '#FACC15',
      }
    },
  },
  plugins: [],
}