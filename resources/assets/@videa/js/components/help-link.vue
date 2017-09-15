<template lang="pug">
  button.vui-button.vui-button--neutral(@click='showHelp(helpId)')
    slot ?
</template>

<script>
  export default {
    props: ['helpId'],
    methods: {
      showHelp (helpId) {
        MadCap.OpenHelp(helpId, null, null, false)
      }
    }
  }
</script>
