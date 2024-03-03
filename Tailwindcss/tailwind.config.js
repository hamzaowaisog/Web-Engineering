/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}"],
  theme: {
    extend: {
      screens: {
        'xs': '332px',
        'sm': '632px',
        'md' : '832px',
        'lg': '1032px',
        'xl': '1232px',
        '2xl':'1432px'

      },
    
    },
  },
  plugins: [ 
    require('@tailwindcss/forms'),
],
}

