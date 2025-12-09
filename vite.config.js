import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
<<<<<<< HEAD
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
=======
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
});
