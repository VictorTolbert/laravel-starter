<template lang="pug">
  div
    div(v-click-outside='hide' @click='toggle') Toggle
    div(v-show='opened') Popup item
</template>

<script>
  import ClickOutside from 'vue-click-outside'

  export default {
    data () {
      return {
        opened: false
      }
    },

    methods: {
      toggle () {
        this.opened = true
      },

      hide () {
        this.opened = false
      }
    },

    mounted () {
      // prevent click outside event with popupItem.
      this.popupItem = this.$el
    },

    // do not forget this section
    directives: {
      ClickOutside
    }
  }
</script>
