<template>
    <div class="stepWrapper">
        <!-- https://twitter.com/DamianDulisz/status/903569400095285248/ -->
        <component :is="wizardStep"></component>
    </div>
</template>
<script>
export default {
    props: ['currentStep'],
    computed: {
        wizardStep () {
            return () => import(`./components/Wizard/${this.currentStep}.vue`)
        }
    },
    methods: {
        logStepComponentData () {
            this.wizardStep().then(comp => {
                console.log(comp.data)
            })
        }
    }
}
</script>
