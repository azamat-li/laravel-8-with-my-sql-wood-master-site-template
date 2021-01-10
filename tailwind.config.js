const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    // extend: {},

      backgroundColor: theme => ({


          'primary': '#3490dc',

          'secondary': '#ffed4a',

          'danger': '#e3342f',
      }),

      colors: {
          gray: colors.coolGray,
          blue: colors.lightBlue,
          red: colors.rose,
          pink: colors.fuchsia,
      },

  },
  variants: {
    extend: {},
  },
  plugins: [],
}
