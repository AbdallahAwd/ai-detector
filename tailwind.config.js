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
                "dark-blue": "#1c1d24",
            },
            fontFamily: {
                "nova-flat": ['"Nova Flat"', "sans-serif"],
            },
        },
    },
    plugins: [],
};
