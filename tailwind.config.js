import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                mint: {
                    100: '#dde9e3',
                    200: '#cadad0',
                    300: '#a9b1ad',
                    400: '#919996',
                    500: '#787f7c',
                    600: '#626866',
                    700: '#4a504f',
                    800: '#333737',
                    900: '#212525',
                }
            }
        },
    },

    plugins: [forms],
};
