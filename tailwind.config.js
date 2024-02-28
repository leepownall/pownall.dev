/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['-apple-system', 'system-ui', 'BlinkMacSystemFont', "Segoe UI", 'Roboto', "Helvetica Neue", 'Arial', 'sans-serif'],
        },
    },
  },
  plugins: [
      require('@tailwindcss/typography'),
  ],
}
