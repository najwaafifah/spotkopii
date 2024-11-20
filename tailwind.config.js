import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
      ],
      theme: {
        extend: {
          fontFamily: {
            // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            sans: ['Poppins', ...defaultTheme.fontFamily.sans],
          },
          colors: {
            hijau: {
              50 : '#EBF2F0',
              100: '#2C705F',
              200 : '#C5D8D3', // Add your custom color here
              300 : '#2C705F'
            },
            coklat: {
                100 : '#CBBCAB'
            }
          },
        },
      },
    plugins: [],
};
