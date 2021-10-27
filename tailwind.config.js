module.exports = {
  purge: [ 
    './**/*.php',
    './public/**/*.php',
    './admin/public/**/*.php',
  ],
  mode: 'jit',
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'Work': ['Work Sans', 'sans-serif'],
        'Zen': ['Zen Kurenaido', 'sans-serif'],
        'Ubuntu': ['Ubuntu', 'sans-serif'],
       },
       boxShadow: {
        'shadow-black': '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
      },
      transitionProperty: {
        'width': 'width'
    },
    width: {
      '100': '100px',
      '150': '150px',
      '200': '200px',
      '250': '250px',
      '300': '300px',
      '350': '350px',
    }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
