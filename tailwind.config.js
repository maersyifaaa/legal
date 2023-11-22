// /** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      backgroundImage: {
        hero: "url('../public/images/bgimgjpg.jpg')",
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

