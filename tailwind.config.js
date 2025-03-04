/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
       Montserrat: ["Montserrat", "sans-serif"],
       Nunito: ["Nunito", "sans-serif"]

      }
    },
  },
  plugins: [],
}

