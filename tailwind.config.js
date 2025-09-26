module.exports = {
  darkMode: 'class', // o 'media' si prefieres que se active automáticamente
  content: [
    './views/**/*.php',
    './public/**/*.php',
    './app/**/*.php',
    './*.php'
  ],
  theme: {
    extend: {
      transitionProperty: {
        'margin': 'margin',
        'transform': 'transform',
      },
      fontFamily: {
        // Agrega una nueva tipografía personalizada
        roboto: ['Roboto', 'sans-serif'],
        // Puedes sobrescribir una de las tipografías por defecto
        sans: ['ui-sans-serif', 'system-ui', 'Roboto', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
