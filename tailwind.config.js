const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            boxShadow: {
                DEFAULT: '0 0 5px 0 rgba(0, 0, 0, 0.08)'
            },
            colors: {
                gray: {
                    100: '#f5f6f9'
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
