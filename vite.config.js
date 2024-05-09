import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// Définissez la variable refreshPaths avec les chemins de rafraîchissement appropriés
const refreshPaths = [
    'resources/views/**/*.blade.php',
    'resources/js/**/*.js',
    'resources/css/**/*.css',
];

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
});
