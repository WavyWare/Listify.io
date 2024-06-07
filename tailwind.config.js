/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './*.{html,js}',
      './dist/**/*.{html,js}',
      './src/**/*.{html,js}',
      './login/*.{html,js}',
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

