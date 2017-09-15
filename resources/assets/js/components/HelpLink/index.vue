<template>
    <a class="button is-primary is-outlined is-small" @click="showHelp(helpId)">
        <slot></slot>
    </a>
</template>

<script>
    export default {
        props: ['helpId'],
        methods: {
            showHelp (helpId) {
                /* eslint-disable no-undef */
                MadCap.OpenHelp(helpId, null, null, false)
            }
        }
    }
</script>
