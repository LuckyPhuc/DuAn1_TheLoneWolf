import "./bootstrap";

import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();


// Import Swiper
import { register } from "swiper/element/bundle";

// Register Swiper custom elements
register();
const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);
