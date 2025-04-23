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
       Host: ["Host Grotesk", "sans-serif"],

      },
        dropShadow: {
          "text": ["6px 2px 31px rgba(0, 0, 0, 0.40)"],
          "button": ["6px 2px 31px rgba(0, 0, 0, 0.20)"],
        },
    },
  },
  plugins: [],
}

