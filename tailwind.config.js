const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    presets: [require("daisyui")],
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
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
