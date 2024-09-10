import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.tsx',  // Your React/JS entry point
                'resources/css/app.css',  // Add the CSS file here
            ],
            refresh: true,
        }),
        react(),
    ],
});
