/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}", "./**/*.{html,js,php}", "*/*.{html,js,php}"],
  mode: 'jit',
  theme: {
    extend: {
      fontFamily: {
        "roboto" : [" 'Roboto', sans-serif; "],
        "oneSans" : [" 'AR One Sans', sans-serif "],
        "dosis" : [" 'Dosis', sans-serif "],
        "gabarito" : [" 'Gabarito', cursive "],
        "lato" : [" 'Lato', sans-serif "],
        "openSans" : [" 'Open Sans', sans-serif "],
        "poppins" : [" 'Poppins', sans-serif "],
        "robotoMono" : [" 'Roboto Mono', monospace "],
        "robotoSlab" : [" 'Roboto Slab', serif "],

      },
      colors: {
        'top-color': '#419197',
        'heading': '#fcfbfc',
      },
    },
  },
  plugins:[
    require('tailwindcss'),
    require('autoprefixer'),
  ],

}

