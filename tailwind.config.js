/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      "primary": "#2D5EBB",
      "semiblack": "#050C19"
    },
  },
  plugins: [
    require("daisyui")
  ],
  daisyui: {
    themes: ["night"]
  }
}