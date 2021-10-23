$(document).ready(function(){
    console.log('admin loaded');
    var toolbarOptions = {
        'syntax': true,
        'toolbar': [
            [{ 'font': [] }, { 'size': [] }],
            [ 'bold', 'italic', 'underline', 'strike' ],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'script': 'super' }, { 'script': 'sub' }],
            [{ 'header': '1' }, { 'header': '2' }, 'blockquote', 'code-block' ],
            [{ 'list': 'ordered' }, { 'list': 'bullet'}, { 'indent': '-1' }, { 'indent': '+1' }],
            [ 'direction', { 'align': [] }],
            [ 'link', 'image', 'video', 'formula' ],
            [ 'clean' ]
        ]
    }
    var quill = new Quill('#editor', {
        modules: toolbarOptions,
        theme: 'snow'
    });
})