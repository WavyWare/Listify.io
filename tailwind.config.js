/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './*.{html,js}',
      './dist/**/*.{html,js,php}',
      './src/**/*.{html,js,php}',
      './login/*.{html,js,php}',
      './register/*.{html,js,php}',
      './panel/*.{html,js,php}',
      './panel/**/.{html,js,php}',
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('daisyui'),
  ],
    daisyui: {
        themes: ["emerald"],
    },
}

