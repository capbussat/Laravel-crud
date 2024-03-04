import 'tinymce/tinymce';
import 'tinymce/skins/ui/oxide/skin.min.css';
import 'tinymce/skins/content/default/content.min.css';
import 'tinymce/skins/content/default/content.css';
import 'tinymce/icons/default/icons';
import 'tinymce/themes/silver/theme';
import 'tinymce/models/dom/model';

/* No és la millor manera de carregar tots els plugins, però si no l'adreça és incorrecta */
import 'tinymce/plugins/anchor';
import 'tinymce/plugins/charmap';
import 'tinymce/plugins/code';
import 'tinymce/plugins/codesample';
import 'tinymce/plugins/fullscreen';
import 'tinymce/plugins/image';
import 'tinymce/plugins/link';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/media';
import 'tinymce/plugins/preview';
import 'tinymce/plugins/table';

window.addEventListener('DOMContentLoaded', () => {
    tinymce.init({
        selector: '#tinyTextArea', /* Aques és el selector per aplicar l'editor */

        /* TinyMCE configuration options */
        skin: false,
        content_css: false,
        width: '90%', // Amplada de l'editor
        height: 400, // Alçada de l'editor
        
        // Estils
        
        // Plugins
        plugins: ["anchor", "charmap", "code", "codesample", "fullscreen", "link", "lists", "media",  "image", "preview", "table",  ],
       
        image_caption: true,
       
        toolbar: "undo redo | fullscreen | anchor link image charmap  | blocks fontfamily fontsize | bold italic underline strikethrough | align | numlist bullist  | lineheight outdent indent| pagebreak ",
 
        style_formats: [
            { title: 'Encapçalament 1', format: 'h1' },
            { title: 'Encapçalament 2', format: 'h2' },
            { title: 'Encapçalament 3', format: 'h3' },
            { title: 'Paràgraf', format: 'p' }
        ],

        // Menú contextual
        contextmenu: 'link image table',
 
    }); /* tinymce.init */  
});
