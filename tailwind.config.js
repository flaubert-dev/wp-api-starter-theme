/* 
  > tailwindcss v3.3.3
  > download: https://github.com/tailwindlabs/tailwindcss/releases/tag/v3.3.3
*/

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./resources/styles/input.css'],
  theme: {
    screens: {
      'sm': {'max': '752px'},
      // => @media (max-width: 752px) { ... }

      'md': '753px',
      // => @media (min-width: 753px) { ... }

      'lg': '1025px',
      // => @media (min-width: 1025px) { ... }

      'xl': '1366px',
      // => @media (min-width: 1366px) { ... }
    },

    container: {
      center: true,
    },

    fontSize: {
      '12': ['0.75rem', '1rem'], 
      // => 12px (font-size), 16px (line-height)

      '14': ['0.875rem', '1.375rem'], 
      // => 14px (font-size), 22px (line-height)

      '16': ['1rem', '1.5rem'],     
      // => 16px (font-size), 24px (line-height)

      '18': ['1.125rem', '1.625rem'],
      // => 18px (font-size), 26px (line-height)

      '20': ['1.25rem', '1.75rem'],   
      // => 20px (font-size), 28px (line-height)

      '22': ['1.375rem', '1.875rem'], 
      // => 22px (font-size), 30px (line-height)

      '24': ['1.5rem', '2rem'], 
      // => 24px (font-size), 32px (line-height)

      '26': ['1.625rem', '2.125rem'], 
      // => 26px (font-size), 34px (line-height)

      '28': ['1.75rem', '2.25rem'], 
      // => 28px (font-size), 36px (line-height)

      '30': ['1.875rem', '2.375rem'], 
      // => 30px (font-size), 38px (line-height)

      '32': ['2rem', '2.5rem'],    
      // => 32px (font-size), 40px (line-height)

      '40': ['2.5rem', '3rem'],    
      // => 40px (font-size), 48px (line-height)

      '48': ['3rem', '3.5rem'],    
      // => 48px (font-size), 56px (line-height)
    },

    extend: {},
  },
  plugins: [],
}
