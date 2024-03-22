import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/core.css',
                'resources/css/wins.css',

                'resources/js/app.js',
                'resources/js/base64.js',
                'resources/js/bootstrap.js',
                'resources/js/popper.js',
                'resources/js/utils.js',
                'resources/js/wins.js',
            ],
            refresh: true,
        }),
    ],
});


