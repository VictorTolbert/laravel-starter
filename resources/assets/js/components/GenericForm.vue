<template>
    <div>

      <!-- https://sebastiandedeyne.com/posts/2017/using-registered-event-listeners-as-conditionals-in-vue -->

        <!-- ... -->
        <button v-if="showBackButton" @click="$emit('back')">
            Back
        </button>
    </div>
</template>

<script>
export default {
    computed: {
        showBackButton () {
            return !!this.$listeners.back
        }
    }
}
</script>
