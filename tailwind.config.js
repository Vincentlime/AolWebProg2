/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'c-pink': '#E3888A',
        'c-black': '#272B2E',
        'c-gray': '#8E9192',
      },
    },
  },
  plugins: [],
}