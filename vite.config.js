import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/css/pages/home.scss',
                'resources/css/components/tabs.scss',
                'resources/js/app.js',
                'resources/assets/js/home.js'
            ],
            refresh: true,
        }),
    ],
});
