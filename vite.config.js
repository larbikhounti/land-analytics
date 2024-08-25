import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue()],
    resolve: {
            alias: {
              '@images': path.resolve(__dirname, 'resources/images'),
              '@dashboard': path.resolve(__dirname, 'resources/js/Pages/Dashboard/'),
            },
          },    
    // resolve: name => {
    //     const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    //     return pages[`./Pages/${name}.vue`]
    //     },
});
