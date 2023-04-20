const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'montserrat' : 'Montserrat',
                'montserratAlter' : 'Montserrat Alternates',
                'pacifico' : 'Pacifico',
            },
            colors: {
                'main' : '#7B276F',
                'background' : '#EEE6E3',
                'selectedHeaderText' : '#A1C3D1',
                'target' : '#D91D75',
                'lightPurple' : '#C67B99',
                'lightText' : '#F0EBF4',
                'gradStart' : 'rgba(159,5,255,0.7)',
                'gradFinish' : 'rgba(253,94,8,0.7)',
                'deliveryCards' : '#BCAFB7',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
