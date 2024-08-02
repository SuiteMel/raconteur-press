/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./templates/index.html",
    './inc/**/*.php',
    './blocks/**/*.php',
    './parts/**/*.php',
    "./assets/*",
    // "./main.js",
    // "./src/**/*.{js,ts,jsx,tsx}",
  ],
  safelist: [
    'text-xl'
  ],
  theme: {
    fontFamily: {
      sans: 'Inter',
      serif: 'Fox Veteran',
    },
    fontSize: {
      // 13px
      sm: '0.875rem', // 14px
      base: '1rem',
      lg: '1.25rem', // 20px
      xl: '2rem', // 24px/32px
      '2xl': '2.5rem', // 40px
      '3xl': '4rem', // 64px
      '4xl': '6rem' // 96px
    },
    container: {
      center: true,
      padding: '2rem',
    },
    extend: {
      colors: {
        brand: {
          'black': '#252525',
          'orange': '#F37A1F',
          'dark-orange': '#A25218',
          'light-gray': '#E7E7E7',
          'white': '#F1F1F1',
          'tan': '#F6F3E9'
        },
      },
    },
  },
  plugins: [],
}

