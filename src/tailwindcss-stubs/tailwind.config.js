const defaultTheme = require('tailwindcss/defaultTheme')
let postcss = require('postcss')
module.exports = {
  purge: {
    content: [
      './resources/views/**/*.blade.php',
      './resources/css/**/*.css',
    ]
  },
  theme: {
    extend: {
      screens: {
        'dark': {'raw': '(prefers-color-scheme: dark)'}
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
    customForms: theme => ({
      default: {
        input: {
          backgroundColor: theme('colors.cool-gray.50'),
          borderWidth: theme('borderWidth.2'),
          borderColor: theme('colors.cool-gray.300'),
          paddingTop: theme('spacing.2'),
          paddingBottom: theme('spacing.2'),
          lineHeight: 0,
          width: theme('width.full'),
          display: 'block',
          height: theme('height.10'),
          '&:focus': {
            backgroundColor: theme('colors.white'),
            borderColor: theme('colors.cool-gray.400'),
          },
        },
        select: {
          backgroundColor: theme('colors.cool-gray.50'),
          borderWidth: theme('borderWidth.2'),
          borderColor: theme('colors.cool-gray.300'),
          paddingTop: theme('spacing.2'),
          backgroundPosition: "right 0.25rem center",
          paddingBottom: theme('spacing.2'),
          lineHeight: 1.2,
          width: theme('width.full'),
          display: 'block',
          height: theme('height.10'),
          '&:focus': {
            backgroundColor: theme('colors.white'),
            borderColor: theme('colors.cool-gray.400'),
          },
        },
        checkbox: {
          width: theme('width.5'),
          height: theme('width.5'),
          backgroundColor: theme('colors.cool-gray.50'),
          borderWidth: theme('borderWidth.2'),
          borderColor: theme('colors.cool-gray.300'),
        },
        radio: {
          width: theme('width.5'),
          height: theme('width.5'),
          backgroundColor: theme('colors.cool-gray.50'),
          borderWidth: theme('borderWidth.2'),
          borderColor: theme('colors.cool-gray.300'),
        },
      },
    })
  },
  variants: {
      backgroundColor: ['responsive', 'hover', 'focus', 'group-hover', 'group-focus'],
      borderColor: ['responsive', 'hover', 'focus', 'group-hover', 'group-focus'],
      textColor: ['responsive', 'hover', 'focus', 'group-hover', 'group-focus'],
  },
  plugins: [
      require('@tailwindcss/ui'),
  ]
}
