import '../assets/css/satoshi.css';
import '../assets/css/style.css';
// import 'jsvectormap/dist/css/jsvectormap.min.css'
// import 'flatpickr/dist/flatpickr.min.css'
import './bootstrap';
import './index';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { createPinia } from 'pinia';  // Tambahkan ini
import VueApexCharts from 'vue3-apexcharts'
import index from '@/index';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });
        const pinia = createPinia();  // Inisialisasi Pinia

        return app
            .use(plugin)
            .use(ZiggyVue)
            .use(pinia)  // Gunakan Pinia di aplikasi
            .use(index)
            .use(VueApexCharts)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
