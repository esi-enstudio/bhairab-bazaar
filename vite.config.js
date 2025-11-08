import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/frontend.css',
                'resources/js/frontend.js',
                // নতুন ব্যাকএন্ড ফাইল
                'resources/css/backend.css',
                'resources/js/backend.js',
            ],
            refresh: true,
        }),
    ],
});
