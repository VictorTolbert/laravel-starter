<template>
    <div id="app">
        <vue-progress-bar></vue-progress-bar>
        <debug-info></debug-info>
        <router-view name="nav"></router-view>
        <router-view name="hero"></router-view>
        <router-view></router-view>
        <router-view name="footer"></router-view>
        <router-view name="help"></router-view>
    </div>
</template>

<script>
    import Clipboard from 'clipboard'
    import $ from 'jquery'

    import DebugInfo from '@/components/DebugInfo'

    export default {
        name: 'app',
        components: { DebugInfo },
        data () {
            return {
                modalOpen: false
            }
        },
        watch: {
            modalOpen (newVal) {
                let className = 'modal-open'
                if (newVal) {
                    document.body.classList.add(className)
                } else {
                    document.body.classList.remove(className)
                }
            }
        },
        methods: {
            escapeKeyListener (e) {
                if (e.keyCode === 27 && this.modalOpen) {
                    this.modalOpen = false
                }
            }
        },
        mounted () {
            this.$Progress.finish()

            var $highlightButtons = $('.highlight .copy, .highlight .expand')

            $highlightButtons.hover(function () {
                $(this).parent().css('box-shadow', '0 0 0 1px #ed6c63')
            }, function () {
                $(this).parent().css('box-shadow', 'none')
            })

            $('.highlight .expand').click(function () {
                $(this).parent().children('pre').css('max-height', 'none')
            })

            /* eslint-disable no-new */
            new Clipboard('.copy', {
                target: function (trigger) {
                    return trigger.previousSibling
                }
            })
        },
        created () {
            document.addEventListener('keyup', this.escapeKeyListener)

            this.$Progress.start()
            this.$router.beforeEach((to, from, next) => {
                this.$Progress.start()
                next()
            })
            this.$router.afterEach((to, from) => {
                this.$Progress.finish()
            })
        },
        destroyed () {
            document.removeEventListener('keyup', this.escapeKeyListener)
        }
    }
</script>

<style lang="less">
    @import "./assets/less/app.less";
</style>

<style lang="scss">
    @import "./assets/main.scss";

    body.modal-open {
        overflow: hidden;
    }

    .color {
      border-radius: 2px;
      box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.1), inset 0 0 0 1px rgba(0, 0, 0, 0.1);
      display: inline-block;
      float: left;
      height: 24px;
      margin-right: 8px;
      width: 24px;
    }

    .example,
    .structure {
      border: 1px solid #ffdd57;
      border-top-right-radius: 3px;
      color: rgba(0, 0, 0, 0.7);
      padding: 1.5rem;
      position: relative;
    }

    .example:not(:first-child),
    .structure:not(:first-child) {
      margin-top: 2rem;
    }

    .example:not(:last-child),
    .structure:not(:last-child) {
      margin-bottom: 1.5rem;
    }

    .example:before,
    .structure:before {
      background: #ffdd57;
      border-radius: 3px 3px 0 0;
      bottom: 100%;
      content: "Example";
      display: inline-block;
      font-size: 7px;
      font-weight: bold;
      left: -1px;
      letter-spacing: 1px;
      padding: 3px 5px;
      position: absolute;
      text-transform: uppercase;
      vertical-align: top;
    }

    @media screen and (min-width: 769px), print {
      .example.is-fullwidth,
      .structure.is-fullwidth {
        border-left: none;
        border-right: none;
        padding: 0;
      }
    }

    .example + .highlight {
      border: 1px solid #ffdd57;
      border-radius: 0 0 3px 3px;
      border-top: none;
      margin-top: -1.5rem;
    }

    .example + .highlight:not(:last-child) {
      margin-bottom: 1.5rem;
    }

    .highlight pre {
      max-height: 600px;
      margin-bottom: 0 !important;
    }

    .structure {
      border-color: #ff3860;
      border-radius: 3px;
      padding: 1.5rem;
    }

    .structure:before {
      background: #ff3860;
      color: #fff;
      content: "Structure";
    }

    .structure-item {
      position: relative;
    }

    .structure-item:before {
      bottom: 0;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      background: rgba(10, 10, 10, 0.7);
      background: whitesmoke;
      border: 1px solid #dbdbdb;
      content: "";
      display: block;
      z-index: 1;
    }

    .structure-item:after {
      bottom: 0;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      content: attr(title);
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: monospace;
      font-size: 11px;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      padding: 3px 5px;
      z-index: 2;
    }

    .structure-item.is-structure-container {
      padding: 1.5rem 0.75rem 0.75rem;
    }

    .structure-item.is-structure-container:after {
      -webkit-box-align: start;
          -ms-flex-align: start;
              align-items: flex-start;
      -webkit-box-pack: start;
          -ms-flex-pack: start;
              justify-content: flex-start;
      padding: 0.5rem 0.75rem;
    }

    .highlight {
      position: relative;
    }

    .highlight .copy,
    .highlight .expand {
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background: white;
      border: solid #dbdbdb;
      border-width: 0 0 1px 1px;
      color: #7a7a7a;
      cursor: pointer;
      outline: none;
      position: absolute;
      right: 0;
      top: 0;
    }

    .highlight .copy:hover,
    .highlight .expand:hover {
      border-color: #ff3860;
      color: #ff3860;
    }

    .highlight .expand {
      border-right-width: 1px;
      right: 50px;
    }

    @media screen and (min-width: 769px), print {
      .highlight pre {
        white-space: pre-wrap;
      }
    }


    pre {
        @include tablet {
            white-space: pre-wrap;
        }
        code {
            max-height: 400px;
            &.hljs {
                background: inherit;
                color: inherit;
                padding: 1.25rem 1.5rem;
            }
        }
    }

    .highlight {
        position: relative;
    }

    .highlight {
        background-color: #f5f5f5;
        color: #586e75;
    }

    .highlight .c {
        color: #93a1a1;
    }

    .highlight .err,
    .highlight .g {
        color: #586e75;
    }

    .highlight .k {
        color: #859900;
    }

    .highlight .l,
    .highlight .n {
        color: #586e75;
    }

    .highlight .o {
        color: #859900;
    }

    .highlight .x {
        color: #cb4b16;
    }

    .highlight .p {
        color: #586e75;
    }

    .highlight .cm {
        color: #93a1a1;
    }

    .highlight .cp {
        color: #859900;
    }

    .highlight .c1 {
        color: #93a1a1;
    }

    .highlight .cs {
        color: #859900;
    }

    .highlight .gd {
        color: #2aa198;
    }

    .highlight .ge {
        color: #586e75;
        font-style: italic;
    }

    .highlight .gr {
        color: #dc322f;
    }

    .highlight .gh {
        color: #cb4b16;
    }

    .highlight .gi {
        color: #859900;
    }

    .highlight .go,
    .highlight .gp {
        color: #586e75;
    }

    .highlight .gs {
        color: #586e75;
        font-weight: bold;
    }

    .highlight .gu {
        color: #cb4b16;
    }

    .highlight .gt {
        color: #586e75;
    }

    .highlight .kc {
        color: #cb4b16;
    }

    .highlight .kd {
        color: #268bd2;
    }

    .highlight .kn,
    .highlight .kp {
        color: #859900;
    }

    .highlight .kr {
        color: #268bd2;
    }

    .highlight .kt {
        color: #dc322f;
    }

    .highlight .ld {
        color: #586e75;
    }

    .highlight .m,
    .highlight .s {
        color: #2aa198;
    }

    .highlight .na {
        color: #B58900;
    }

    .highlight .nb {
        color: #586e75;
    }

    .highlight .nc {
        color: #268bd2;
    }

    .highlight .no {
        color: #cb4b16;
    }

    .highlight .nd {
        color: #268bd2;
    }

    .highlight .ni,
    .highlight .ne {
        color: #cb4b16;
    }

    .highlight .nf {
        color: #268bd2;
    }

    .highlight .nl,
    .highlight .nn,
    .highlight .nx,
    .highlight .py {
        color: #586e75;
    }

    .highlight .nt,
    .highlight .nv {
        color: #268bd2;
    }

    .highlight .ow {
        color: #859900;
    }

    .highlight .w {
        color: #586e75;
    }

    .highlight .mf,
    .highlight .mh,
    .highlight .mi,
    .highlight .mo {
        color: #2aa198;
    }

    .highlight .sb {
        color: #93a1a1;
    }

    .highlight .sc {
        color: #2aa198;
    }

    .highlight .sd {
        color: #586e75;
    }

    .highlight .s2 {
        color: #2aa198;
    }

    .highlight .se {
        color: #cb4b16;
    }

    .highlight .sh {
        color: #586e75;
    }

    .highlight .si,
    .highlight .sx {
        color: #2aa198;
    }

    .highlight .sr {
        color: #dc322f;
    }

    .highlight .s1,
    .highlight .ss {
        color: #2aa198;
    }

    .highlight .bp,
    .highlight .vc,
    .highlight .vg,
    .highlight .vi {
        color: #268bd2;
    }

    .highlight .il {
        color: #2aa198;
    }

    .highlight .copy,
    .highlight .expand {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background: white;
        border: solid #dbdbdb;
        border-width: 0 0 1px 1px;
        color: #7a7a7a;
        cursor: pointer;
        outline: none;
        position: absolute;
        right: 0;
        top: 0;
    }

    .highlight .copy:hover,
    .highlight .expand:hover {
        border-color: #ff3860;
        color: #ff3860;
    }

    .highlight .expand {
        border-right-width: 1px;
        right: 50px;
    }

    @media screen and (min-width: 769px), print {
        .highlight pre {
            white-space: pre-wrap;
        }
    }


    //
    ::selection {
        background: lighten($primary, 5%);
        color: $primary-invert;
    }

    .home {
        .logo-rounded{
            margin-bottom: 0.5rem;
        }
        .logo-rounded {
            background: $light;
            display: inline-block;
            padding: 2.5rem;
            border-radius: 32px;
            box-shadow: 0 20px 60px rgba(10, 10, 10, 0.05), 0 5px 10px rgba(10, 10, 10, 0.1), 0 1px 1px rgba(10, 10, 10, 0.2);
            img {
                width: 160px;
            }
            @include mobile {
                padding: 2rem;
                img {
                    width: 220px;
                }
            }
        }
    }
</style>

<style src="vue-windows/dist/vue-windows.css"></style>
<style>

span.step {
  background: #111;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #fff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em;
}

</style>
<style>
/* [class^="style__window"] {
    width: 100%;
    height: auto;
    margin: 0 0 0 0;
}
[class^="style__body"] {
    padding: 0 !important;
    height: 100% !important;
} */

</style>
