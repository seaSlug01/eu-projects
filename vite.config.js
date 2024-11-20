import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/landingPage.css', 'resources/js/app.js', 'resources/css/filament-custom.css', 'resources/js/landingPage.js'],
            refresh: true,
        }),
    ],
});
