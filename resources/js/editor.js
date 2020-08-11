import FroalaEditor from 'froala-editor'
import "froala-editor/js/plugins/image.min.js"
import "froala-editor/js/plugins/fullscreen.min.js"
import "froala-editor/js/plugins/link.min.js"
import "froala-editor/js/plugins/font_size.min.js"
import "froala-editor/js/plugins/draggable.min.js"
import "froala-editor/js/plugins/colors.min.js"
import "froala-editor/js/plugins/lists.min.js"
import "froala-editor/js/plugins/quote.min.js"
document.addEventListener('DOMContentLoaded', function (event) {
    // let editor = new FroalaEditor('#post-editor')
    const csrf = document.querySelector('input').getAttribute('value')
    let editor = new FroalaEditor('.post-content', {
        imageUploadURL: '/upload_image',
        // Set max image size to 5MB.
        imageMaxSize: 5 * 1024 * 1024,
        // Allow to upload PNG and JPG.
        imageAllowedTypes: ['jpeg', 'jpg', 'png'],
        imageUploadParams: {
            _token: csrf
        }

    })
    console.log('Hello from editor')
})
