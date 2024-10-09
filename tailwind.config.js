/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      font: {
        sans: ['Segoe UI', 'sans-serif'],
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

