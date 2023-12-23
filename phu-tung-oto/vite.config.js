import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    base: "http://phutungoto.io.vn/",
    server: {
        host: "phutungoto.io.vn",
    },
});
