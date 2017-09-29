<template>
    <browser-window :url="formattedUrl">
        <slot>
            <pre><code v-html="code"></code></pre>
        </slot>
    </browser-window>
</template>

<script>
    import hljs from 'highlight.js/lib/highlight'
    hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'))
    hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'))

    import { BrowserWindow } from 'vue-windows'

    export default {
        name: 'windows-example',
        metaInfo: {
            title: 'Example / Windows',
        },
        props: ['url'],
        components: { BrowserWindow },
        data() {
            return {
                width: 530,
                height: 290,
                code: hljs.highlight('javascript', `import { EditorWindow } from 'vue-windows'
new Vue({
    el: '#app',
    render (h) {
        return h(EditorWindow, {props: {title: 'hola!'}})
    }
})

// set how to use in single file component
// https://github.com/egoist/vue-windows#usage
`).value
            }
        },
        computed: {
            formattedUrl () {
                return `${this.url || 'http://localhost/data-table'}`
            }
        }
    }
</script>

<!-- <style src="vue-windows/dist/vue-windows.css"></style> -->
<!-- <style src="highlight.js/styles/androidstudio"></style> -->

