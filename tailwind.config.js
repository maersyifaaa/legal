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
  colors: {
      amber: {
        600 : "D7802E"
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

