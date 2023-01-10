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
        primary: '#78ed75',
        sec: '#08221B',
        thir: '#aa86ff',
      },
      lineHeight: {
        'extra-loose': '3.5',
        '12': '4rem',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}