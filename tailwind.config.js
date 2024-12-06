/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.html",  // Path ke file HTML
    "./src/**/*.js",  // Path ke file JS jika ada
    "./src/styles/**/*.css"  // Path ke file CSS di src/styles
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
