import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path'

export default defineConfig({
    server: {
        host: 'localhost',
        port: 5173,
    },
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
          '@': '/resources/js',
          '@assets': path.resolve(__dirname, 'resources/assets'),
          '@css': path.resolve(__dirname, 'resources/css'),
          '@stores': path.resolve(__dirname, 'resources/stores'),
        },
      },
});
