import { defineConfig } from 'vite';

import laravel from 'laravel-vite-plugin';

export default defineConfig({


    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/style_Preguntas.css',
                'resources/css/style.css',
                 'resources/css/style_reporteE.css',
                'resources/css/style_expositorV.css',
                'resources/css/style_index1.css',
                'resources/css/style_controlador.css',
                'resources/css/style_certificado.css',
                'resources/css/style_controladorEventos.css',
                'resources/css/style_texto.css',
                'resources/css/style_ListaEstado.css',
                'resources/css/style_inscritos.css',
                'resources/css/style_Inputs.css',
                'resources/css/style_cards.css',
                'resources/css/style_calendar.css',
                'resources/css/style_cardsMaterial.css',
                'resources/css/style_login.css',
                'resources/css/style_register.css',
                'resources/css/style_expositor.css',
                'resources/css/style_usuario.css',
                'resources/css/style_contac.css',
                'resources/css/style_verCerti.css',
                'resources/js/calendar.js',
                'resources/js/preguntas.js',
            ],
            refresh: true,
        }),
    ],
});
