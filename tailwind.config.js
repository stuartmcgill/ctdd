import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  safelist: [
    'grid-cols-1',
    'md:grid-cols-2',
    'md:flex',
    'sm:grid-cols-2',
    'sm:flex',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        red: {
          50: '#FCE3E5',
          100: '#F9CCCF',
          200: '#F49A9E',
          300: '#EE636A',
          400: '#E83039',
          500: '#CA161F',
          600: '#981117',
          700: '#640B0F',
          800: '#45080B',
          900: '#200405',
          950: '#120203',
        },
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
}
