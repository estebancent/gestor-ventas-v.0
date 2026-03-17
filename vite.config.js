import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'; // Si usas Tailwind 4
import path from 'path'; // Agrega esto al principio

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // Esto le dice a Vite que '../../vendor' es la raíz del proyecto
            '../../vendor': path.resolve(__dirname, './vendor'),
            'vendor': path.resolve(__dirname, './vendor'),
        },
    },
});