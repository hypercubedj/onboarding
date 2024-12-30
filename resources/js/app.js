import "../css/app.css";
import "./bootstrap";

import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createApp, h } from "vue";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";

import 'bootstrap/dist/css/bootstrap.min.css';
import { createI18n } from "vue-i18n";
import './bootstrap'; // Si vous avez un fichier bootstrap.js pour initialiser vos scripts
import en from "./Locales/en.json";
import fr from "./Locales/fr.json";

const i18n = createI18n({
    legacy: false,
    locale: "fr",
    messages: {
        en,
        fr,
    },
});

createInertiaApp({
    title: (title) => {
        const appName = i18n.global.t('app_name');  // Dynamically get the translated app name
        return `${title} - ${appName}`;
      },
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(i18n)
            .mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});
