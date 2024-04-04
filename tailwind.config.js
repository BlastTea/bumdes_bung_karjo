/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [require('daisyui')],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
