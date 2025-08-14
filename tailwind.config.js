import defaultTheme from 'tailwindcss/defaultTheme'

export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.ts",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Sora"', ...defaultTheme.fontFamily.sans], // si quieres que sea la fuente por defecto
        sora: ['"Sora"', ...defaultTheme.fontFamily.sans], // clase específica font-sora
        manrope: ['"Manrope"', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [],
}
