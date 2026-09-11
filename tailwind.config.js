/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'pc-green': '#166534',
        'pc-green-light': '#16a34a',
        'pc-yellow': '#FBBF24',
        'pc-yellow-light': '#FDE68A',
        'pc-red': '#DC2626',
        'pc-cream': '#FFFBEB',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

