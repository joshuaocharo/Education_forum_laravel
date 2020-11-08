var chatter_tinymce_toolbar = $('#chatter_tinymce_toolbar').val();
var chatter_tinymce_plugins = $('#chatter_tinymce_plugins').val();

// Initiate the tinymce editor on any textarea with a class of richText
tinymce.init({
    selector:'textarea.richText',
    skin: 'chatter',
    plugins: chatter_tinymce_plugins,
    toolbar: chatter_tinymce_toolbar,
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = '/laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Files";
          } else {
            cmsURL = cmsURL + "&type=Images";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        },
    menubar: false,
    statusbar: false,
    height : '220',
    content_css : '/vendor/devdojo/chatter/assets/css/chatter.css',
    template_popup_height: 380,
    setup: function (editor) {
        editor.on('init', function(args) {
            // The tinymce editor is ready
            document.getElementById('new_discussion_loader').style.display = "none";
            if(!editor.getContent()){
                document.getElementById('tinymce_placeholder').style.display = "block";
            }
            document.getElementById('chatter_form_editor').style.display = "block";

            // check if user is in discussion view
            if ($('#new_discussion_loader_in_discussion_view').length > 0) {
                document.getElementById('new_discussion_loader_in_discussion_view').style.display = "none";
                document.getElementById('chatter_form_editor_in_discussion_view').style.display = "block";
            }
        });
        editor.on('keyup', function(e) {
            content = editor.getContent();
            if(content){
                //$('#tinymce_placeholder').fadeOut();
                document.getElementById('tinymce_placeholder').style.display = "none";
            } else {
                //$('#tinymce_placeholder').fadeIn();
                document.getElementById('tinymce_placeholder').style.display = "block";
            }
        });
    }
});

function initializeNewTinyMCE(id){
    tinymce.init({
        selector:'#'+id,
        skin: 'chatter',
        plugins: chatter_tinymce_plugins,
        toolbar: chatter_tinymce_toolbar,
        menubar: false,
        statusbar: false,
        height : '300',
        content_css : '/vendor/devdojo/chatter/assets/css/chatter.css',
        template_popup_height: 380
    });
}
// $('document').ready(function(){
//           var editor_config = {
            
//             selector: "#tinymce_placeholder",
            
            
//           };

//           tinymce.init(editor_config);
//           });
