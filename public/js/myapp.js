$(document).ready(function() {
	tinymce.init({
        selector: 'textarea.tinymce',
        font_formats: 'Arial=arial,helvetica,sans-serif;',
        height:600,
        theme: 'modern',
        fontsize_formats: "8px 9px 10px 11px 12px 13px 14px 15px 16px 18px 20px 22px",
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'paste textcolor colorpicker textpattern imagetools toc responsivefilemanager'
        ],
        toolbar1: 'undo redo insert styleselect bold italic alignleft aligncenter alignright alignjustify bullist numlist outdent indent',
        toolbar2: 'print preview media forecolor backcolor fontsizeselect link image code responsivefilemanager fullscreen',
        image_advtab: true,
        inline_styles: true,
    });	
    autosize($("textarea.autosize"));
    var clipboard = new Clipboard('[data-clipboard]')
});
