/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./dashboard/**/*.{html,js,php}",
    "./template/**/*.{html,js,php}"
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1F2937',
        second: '#1977cc'
      }
    },
  },
  plugins: [],
}
