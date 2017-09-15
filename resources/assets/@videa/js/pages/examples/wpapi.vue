<template lang="pug">
  .example
    slot ⇧  ⌥ ⌫ ⌦ ⌘

</template>

<script>
  import axios from '@/plugins/axios'
  import moment from 'moment'

  var WPAPI = require('wpapi')
  var wp = new WPAPI({ endpoint: 'http://wp.videa.design/wp-json' })

  export default {
    name: 'componentName',

    metaInfo: { title: 'componentName' },

    data: () => ({ foo: 'bar' }),

    computed: { },

    watch: {
      status(newVal, oldVal) { }
    },

    methods: { },

    beforeCreate () { },

    created () {
      process.env.NODE_TLS_REJECT_UNAUTHORIZED = '0'
      wp.posts()
        .then(data => {})
        .catch(err => {})
    },

    beforeMount () { },

    mounted () { },

    updated () { },

    beforeDestroy () { },

    destroyed () { },

    components: {  }
  }
</script>

<style lang="stylus">
  @import '~assets/variables'

  .componentName

</style>
