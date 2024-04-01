/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}"
  ],
  theme: {
    extend: {
      colors: {
        'header': "#222831",
        'main': "#f1f5f9", // Color background
        'circle': "#eff2f7",
        'icons': "#6979e6",
        'title': "#24303f",
        'buttons': "#EEEEEE"
      },
      fontFamily: {
        'popins': 'Poppins, sans-serif'
      }
    }
  },
  plugins: [],
}
