<template>
    <browser-window :url="formattedUrl">
        <slot></slot>
    </browser-window>
</template>

<script>
    import { BrowserWindow } from 'vue-windows'

    export default {
        name: 'windows-example',
        metaInfo: {
            title: 'Example / Windows',
        },
        props: ['url'],
        components: { BrowserWindow },
        computed: {
            formattedUrl () {
                return `${this.url || 'http://localhost/data-table'}`
            }
        }
    }
</script>

<style src="vue-windows/dist/vue-windows.css"></style>
