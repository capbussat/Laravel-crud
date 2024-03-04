# Laravel CRUD amb posts i comments / Laravel CRUD with posts

# Bootstrap
Bootstrap 5.3.2 inclòs el CSS i JS de Bootstrap.

# TINYMCE
Instal·lació de TinyMCE
composer require tinymce/tinymce

# Fitxer vite.config.js
Cal editar el fitxer vite.config.js. Afegeix un alias per trobar el directori de TinyMCE

'~tinymce': path.resolve(__dirname, 'node_modules/tinymce/'),
  
# Fitxer /resources/js/app.js
Cal editar el fitxer /resources/js/app.js
import tinymce form 'tinymce';

# Fitxer /resources/js/tinymce.js
Afegeixo un fitxer /resources/js/tinymce.js

import 'tinymce/tinymce';
import 'tinymce/skins/ui/oxide/skin.min.css';
import 'tinymce/skins/content/default/content.min.css';
import 'tinymce/skins/content/default/content.css';
import 'tinymce/icons/default/icons';
import 'tinymce/themes/silver/theme';
import 'tinymce/models/dom/model';

window.addEventListener('DOMContentLoaded', () => {
    tinymce.init({
        selector: '#tinyTextArea', /* Aques és el selector per aplicar l'editor */

        /* TinyMCE configuration options */
        skin: false,
        content_css: false
    });
});




