/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            font: {
                sans: ["Segoe UI", "Roboto", "sans-serif"],
            },
        },
    },
    plugins: [require("@tailwindcss/line-clamp")],
};
