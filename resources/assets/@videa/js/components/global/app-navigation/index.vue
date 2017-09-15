<template lang="pug">
  nav.vui-site-navigation
    app-login(v-if='$store.state.activeApp == "login"')
    app-buyers-nav(v-else-if='$store.state.activeApp == "buyers"')
    app-sellers-nav(v-else-if='$store.state.activeApp == "sellers"')
    app-notification
</template>

<script>
  import AppNotification from '@/components/global/app-notification'
  import AppSellersNav from '@/components/global/app-sellers-nav'
  import AppBuyersNav from '@/components/global/app-buyers-nav'
  import AppLogin from '@/components/global/app-login'

  export default {
    components: {
      AppNotification,
      AppSellersNav,
      AppBuyersNav,
      AppLogin
    }
  }
</script>
