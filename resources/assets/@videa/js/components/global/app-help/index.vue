<template lang="pug">
  .site-help.slideright-transition(:class="open ? 'open-drawer' : 'close-drawer'")
    .wrapper(:class="open ? 'open-drawer' : 'close-drawer'")
      .site-help__toggle(@click='toggle') Need Help?
      .site-help__content(style="font-size: 80%")
        .vui-grid.vui-wrap.vui-grid--pull-padded-medium
          .vui-size--1-of-2.vui-p-horizontal--medium.vui-m-bottom--large
            article.vui-media
              figure.vui-media__figure
                vui-icon.vui-align-middle(name='question-circle', style='width: 2rem; height: 2rem; color: #52545D')
              .vui-media__body
                .content
                  h3.vui-text-heading--medium.vui-m-bottom--medium Online Help
                  p.vui-m-bottom--medium Find page specific help or access the general help documentation.

                  help-link.vui-align-middle.vui-m-right--medium(:help-id='$route.meta.helpId') Page Help
                  a.vui-align-middle.vui-button.vui-button--primary(@click='showHelp(null)') General Help
          .vui-size--1-of-2.vui-p-horizontal--medium
            article.vui-media
              figure.vui-media__figure
                vui-icon.vui-align-middle(name='phone', style='width: 2rem; height: 2rem; color: #52545D')
              .vui-media__body
                .content
                  h3.vui-text-heading--medium.vui-m-bottom--medium Call Us
                  p We are available from 8:00am-11:00pm EST/EDT Mon - Fri.
                  p Customer Service: 1(844)48VIDEA
        hr
        .vui-grid.vui-wrap.vui-grid--pull-padded-medium
          .vui-size--1-of-2.vui-p-horizontal--medium
            article.vui-media
              figure.vui-media__figure
                vui-icon.vui-align-middle(name='comment', style='width: 2rem; height: 2rem; color: #52545D')
              .vui-media__body
                .content
                  h3.vui-text-heading--medium.vui-m-bottom--medium Live Chat
                  p Need fast help? From 8:00am-11:00pm EST/EDT Mon - Fri we are online and ready to help.

          .vui-size--1-of-2.vui-p-horizontal--medium
            article.vui-media
              figure.vui-media__figure
                vui-icon.vui-align-middle(name='envelope', style='width: 2rem; height: 2rem; color: #52545D')
              .vui-media__body
                .content
                  h3.vui-text-heading--medium.vui-m-bottom--medium Contact Us
                  p Technical Support: support@videa.tv
                  p.vui-m-bottom--medium
                    | Or, use our email form and we will get back to you within our support hours of 8:00am-11:00pm EST/EDT - Mon-Fri
                  .vui-col--bump-top
                    input.vui-button.vui-button--brand(type='button', value='Contact Us', @click='')
</template>



<script>
  import HelpLink from '@/components/help-link'

  export default {
    components: { HelpLink },
    data () {
      return {
        open: false,
        showContactUs: true,
        showEmailSent: false,
        showEmailUs: false,
      }
    },
    methods: {
      toggle () {
        this.open = !this.open
      },
      showHelp (helpId) {
        MadCap.OpenHelp(helpId, null, null, false)
      }
    }
  }
</script>

<style lang="stylus">
  .site-help
    width: 640px
    position: fixed
    top: 14rem
    right: 0
    background: #fff
    border: 4px solid #6a2565
    border-right: none
    z-index: 8000
  .site-help__toggle
    position: absolute
    display: inline-block
    margin-top: 7.89999rem
    margin-left: -3rem
    -webkit-transform: rotate(-90deg)
    transform: rotate(-90deg)
    -webkit-transform-origin: 0 0
    transform-origin: 0 0
    background-color: #6a2565
    color: #fff
    padding: .75rem 1.5rem
    cursor: pointer
  .site-help__content
    padding: 1.5rem
  .site-help__content .icon
    color: #5f9ea0
    margin-left: 10px
  .site-help.open-drawer
    -webkit-transform: translateX(0)
    transform: translateX(0)
    -webkit-animation: slide-in .3s
    animation: slide-in 0.3s
  .site-help.close-drawer
    -webkit-transform: translateX(100%)
    transform: translateX(100%)
  .site-help .load-spinner
    position: absolute
    top: 45%
    z-index: 9999
    left: 50%
  .site-help .chatOffline
    cursor: not-allowed
    // filter: alpha(opacity = 65)
    box-shadow: none
    opacity: 0.65

  @keyframes slide-in
    0%
      -webkit-transform: translateX(100%)
      transform: translateX(100%)
      opacity: 0
    to
      -webkit-transform: translateX(0)
      transform: translateX(0)
      opacity: 1

  @keyframes slide-out
    0%
      -webkit-transform: translateX(0)
      transform: translateX(0)
      opacity: 1
    to
      -webkit-transform: translateX(100%)
      transform: translateX(100%)
      opacity: 0
</style>
