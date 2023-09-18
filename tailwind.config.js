/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        fontFamily: {
            serif: ["Lato"],
        },
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                primary: "#0f4c82",
                secondary: "#F1F2F6",
                detail: "#DA4167",
                hitam: "#292929",
                buttonh: "#26A96C",
                button: "#0f4c82",
            },
            screens: {
                sm: "640px",

                md: "768px",

                lg: "1024px",

                xl: "1280px",

                "2xl": "1320px",
            },
        },
    },
    plugins: [
        require("tw-elements/dist/plugin.cjs"),
        require("flowbite/plugin"),
    ],
};
