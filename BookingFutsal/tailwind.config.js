/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php", './src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js',
  ],
  theme: {
    extend: {
      colors:{
        primary: '#14b8a6',
        latarbelakang: '#e5e7eb',
        footerhalaman: '#64748b',
      }
    },
    fontFamily: {
      Inter : ['Inter'],
    },
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
}
