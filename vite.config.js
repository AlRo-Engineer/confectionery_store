import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import * as path from "path";

export default defineConfig({
    plugins: [
        laravel({
            root: path.resolve(__dirname, 'resources'),
            input: [
                'resources/css/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
