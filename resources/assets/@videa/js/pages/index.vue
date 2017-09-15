<template lang="pug">
  .page
</template>

<script>
  export default {
    name: 'login',
    metaInfo: {
      title: 'Login'
    },
    beforeCreate () {
      this.$store.state.activeApp = 'login'
    }
  }
</script>
