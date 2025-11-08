import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import inject from '@rollup/plugin-inject'; // <-- প্লাগইনটি ইম্পোর্ট করুন

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/frontend.css',
                'resources/js/frontend.js',
                'resources/css/backend.css',
                'resources/js/backend.js',
            ],
            refresh: true,
        }),
        // jQuery এবং $ ভ্যারিয়েবল ইনজেক্ট করার জন্য প্লাগইনটি কনফিগার করুন
        inject({
            $: 'jquery',
            jQuery: 'jquery',
        }),
    ],
});
