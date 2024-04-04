/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [require("daisyui")],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    // daisyUI config (optional - here are the default values)
    daisyui: {
        themes: ["light", "dark"],
        // darkTheme: "", // Kosongkan atau hapus untuk menggunakan tema terang default
        base: true,
        styled: true,
        utils: true,
        prefix: "",
        logs: true,
        themeRoot: ":root",
    },  
};
