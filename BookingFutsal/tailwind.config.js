/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors:{
        primary: '#14b8a6',
        latarbelakang: '#e5e7eb',
        footerhalaman: '#64748b'
      }
    },
    fontFamily: {
      Inter : ['Inter'],
    },
  },
  plugins: [],
}
