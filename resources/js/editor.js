import FroalaEditor from 'froala-editor'
import "froala-editor/js/plugins/image.min.js"
import "froala-editor/js/plugins/fullscreen.min.js"
import "froala-editor/js/plugins/link.min.js"
import "froala-editor/js/plugins/font_size.min.js"
import "froala-editor/js/plugins/draggable.min.js"
import "froala-editor/js/plugins/colors.min.js"
import "froala-editor/js/plugins/lists.min.js"
import "froala-editor/js/plugins/quote.min.js"
console.log(process.env)
document.addEventListener('DOMContentLoaded', function (event) {
    // let editor = new FroalaEditor('#post-editor')
    let editor = new FroalaEditor('.post-content', {
        imageUploadURL: '/api/upload_image'
    })
    console.log(process.env.MIX_AWS_DEFAULT_REGION)
    console.log('Hello from editor')
})
