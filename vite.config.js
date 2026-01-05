import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        strictPort: true,

        // Para que las URLs “generadas” apunten al backend (8585) :contentReference[oaicite:1]{index=1}
        origin: 'http://localhost:8585',

        // HMR por el puerto de Nginx y con ruta dedicada :contentReference[oaicite:2]{index=2}
        hmr: {
            host: 'localhost',
            clientPort: 8585,
            path: 'hmr',
            protocol: 'ws',
        },
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
