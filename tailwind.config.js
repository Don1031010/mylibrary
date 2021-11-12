const colors = require('tailwindcss/colors')

module.exports = {
  // mode: 'jit',
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      spacing: {
        '150': '37.5rem',
      },

      colors: {
        sky: colors.sky,
        cyan: colors.cyan,
      },

      backgroundSize: {
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
