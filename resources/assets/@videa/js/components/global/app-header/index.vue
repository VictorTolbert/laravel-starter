<template lang="pug">
  header.vui-site-header.vui-site-header--app(role='banner')
    .vui-site-header--app__container.vui-grid.vui-grid--align-spread
      a.vui-align-middle(@click.prevent='goHome')
        img.vui-site-header__logo(
          alt = 'Videa'
          src = '/@videa/vectors/videa-logo--white.svg'
          style = 'height: 2rem'
        )
</template>

<script>
export default {
    methods: {
        goHome () {
            this.$store.state.activeApp = 'login'
            localStorage.removeItem('userName')

            this.$router.push({
                name: 'index'
            })
            this.$emit('goHome')
        }
    }
}
</script>

<style lang="stylus">
  .app-logo
    height 2rem
</style>
