const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                gray: {
                  50: '#FAFAFA',
                  100: '#F4F4F5',
                  200: '#E4E4E7',
                  300: '#D4D4D8',
                  400: '#A2A2A8',
                  500: '#6E6E76',
                  600: '#52525A',
                  700: '#3F3F45',
                  800: '#2E2E33',
                  900: '#1D1D20',
                },
                teal: {
                  50: '#F4FFFD',
                  100: '#E6FFFA',
                  200: '#B2F5EA',
                  300: '#81E6D9',
                  400: '#4FD1C5',
                  500: '#3ABAB4',
                  600: '#319795',
                  700: '#2C7A7B',
                  800: '#285E61',
                  900: '#234E52',
                },
                indigo: {
                  50: '#F8FBFF',
                  100: '#EBF4FF',
                  200: '#C3DAFE',
                  300: '#A3BFFA',
                  400: '#7F9CF5',
                  500: '#667EEA',
                  600: '#5A67D8',
                  700: '#4C51BF',
                  800: '#34399B',
                  900: '#1E2156',
                },
                purple: {
                  50: '#FAF5FF',
                  100: '#F3E8FF',
                  200: '#E9D8FD',
                  300: '#D6BCFA',
                  400: '#B794F4',
                  500: '#9F7AEA',
                  600: '#805AD5',
                  700: '#6B46C1',
                  800: '#553C9A',
                  900: '#44337A',
                },
                pink: {
                  50: '#FFF5F7',
                  100: '#FFEBEF',
                  200: '#FED7E2',
                  300: '#FBB6CE',
                  400: '#F687B3',
                  500: '#ED64A6',
                  600: '#D53F8C',
                  700: '#B83280',
                  800: '#97266D',
                  900: '#702459',
                },
              },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
