<template>
    <div class="componentWrapper">
        <component :is="componentLoader" :options="options">
            {{ this.$props.slot }}
        </component>
    </div>
</template>
<script>
export default {
    name: 'component-wrapper',
    props: {
        componentFile: {
            type: String,
            default: () => null
        },
        options: {
            type: Array,
            default: () => []
        },
        slot: {
            type: String,
            default: () => null
        }
    },
    mounted () {
        if (this.$props.componentFile) {
            loadComponent()
        }
    },
    computed: {
        componentLoader () {
            return () => import(`./${this.componentFile}`)
        }
    },
    methods: {
        loadComponent () {
            this.componentLoader().then(comp => {
                console.log(comp.data)
            })
        }
    }
}
</script>
