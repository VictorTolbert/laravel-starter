<template lang="pug">
.example.vui-m-top--x-large
  //- video-bg(
  //-   :sources="['/static/shared/video/Mock-up.mp4']"
  //-   img="/static/shared/video/Mock-up.jpg"
  //- )
  //-   // If you want to add content here, a slot is waiting!
  vui-title 🔥 Examples

  vue-audio(:file='file1')

  ul: li(v-for='animal in animals') {{ animal.name }}

  //- https://github.com/surmon-china/vue-video-player
  video-player(:options='videoOptions')

  //- https://github.com/hootlex/vuejs-paginator
  v-paginator(
    @update='updateResource',
    :resource_url='resource_url'
  )

  //- scrubber(:min='10', :max='100', :steps='1', :value='50')
  //- scrubber(:value.sync="steps", :min="0", :max="10", :steps="0.1")

  //- div(v-masonry transition-duration="0.3s" item-selector=".item")
  //-     .item(v-masonry-tile v-for="(item, index) in 14", :key='index')
  //-        p Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolorem, aspernatur quae incidunt architecto tempora distinctio animi recusandae! Ex laudantium odit velit alias corporis! Inventore nam voluptate, debitis. Similique, quidem.

  //- slideout(menu='#menu', panel='#panel', :toggleselectors="['.toggle-button']", @on-open='open')
  //-   nav#menu
  //-     div Menu
  //-   main#panel
  //-     header
  //-       div
  //-         button.toggle-button ☰
  //-         | Panel

  tooltip(label="This is title" placement="top-right")
    button.button.is-primary.has-text-centered.vui-button
      span top-right

  grid
    grid-item(size = '2/3')
      .vui-box.vui-theme--shade
        ul
          li(v-for='example in examples')
            a(
              v-bind:href = 'example.path'
            ) {{ example.path }}
    grid-item(size = '1/3')
      //- .vui-box.vui-theme--shade
      //-   //- pre {{ orders }}
      //-   component-a
      //-   component-b
      //-   parent
      //-   vui-widget
      //-     h1(
      //-       slot = 'header'
      //-     ) This is the main title
      //-     p I will go in the unnamed slot!

      //-   a(
      //-     href = "paparazzi:(width=2500,height=600)http://localhost:8082/"
      //-   ) Test Paparazzi URL

      //-   keep-alive
      //-     component(
      //-       v-bind:is = 'selected'
      //-     )

      //-   vui-button(
      //-     @buttonClick = 'selected = "appBlack", labelColor = "#000000"'
      //-     primary
      //-   ) Black Label

      //-   vui-button(
      //-     @buttonClick = 'selected = "appWhite", labelColor = "#ffffff"'
      //-   ) White Label

      //-   input(
      //-     type = 'color'
      //-     v-model = "labelColor"
      //-     defaultValue = '#ff0000'
      //-   )

</template>

<script>
  import Vue from 'vue'
  import VideoBg from './video-background'
  import Tooltip from './tooltip2'
  import VueAudio from '@/components/common/audio'
  // import Scrubber from '@/components/common/scrubber'
  // import { masonry, masonryTile } from 'vue-masonry'
  // import Slideout from '@/components/slideout'
  import VuePaginator from 'vuejs-paginator'

  import { EventBus } from '@/plugins/event-bus'

  import btn from '@/components/buttons/button'
  import appBlack from '@/components/black'
  import appWhite from '@/components/white'
  import parent from '@/components/parent'

  let ComponentA = Vue.extend({
    template: '<p>ComponentA</p>',
    created () {
      EventBus.listen('thatEvent', () => {
        console.log('Event received')
      })
    }
  })

  let ComponentB = Vue.extend({
    template: '<p>ComponentB</p>',
    created () {
      EventBus.fire('thatEvent')
      console.log('Event emitted.')
    }
  })

  // const orders = require('yamljs').load('~data/orders.yaml')

  export default {
    name: 'examples',

    metaInfo: {
      title: 'Examples',
    },

    components: {
      btn,
      appBlack,
      appWhite,
      parent,
      ComponentA,
      ComponentB,
      VideoBg,
      Tooltip,
      VueAudio,
      VPaginator: VuePaginator
      // Scrubber,
      // Slideout
    },

    data () {
      return {
        file1: '/static/shared/audio/best-friend.mp3',
        file2: '/static/shared/audio/dear-old-morehouse.mp3',
        examples: require('@/models/examples'),
        // orders: orders,
        selected: 'appBlack',
        videoOptions: {
          source: [
            { type: "video/mp4", src: '/static/shared/video/ScreenFlow.mp4', label: 'Mark Kelly', res: 1 },
            { type: "video/mp4", src: 'https://assets.victortolbert.com/video/Go-Goat.mp4', label: 'Go Goat', res: 2 },
            { type: "video/mp4", src: 'https://assets.victortolbert.com/video/Mock-up.mp4', label: 'Mock Up', res: 3 }
          ],
          language: 'en-US',
          playbackRates: [0.7, 1.0, 1.3, 1.5, 1.7],
          poster: 'https://assets.victortolbert.com/video/Mock-up.jpg',
          defaultSrcReId: 2
        },
        labelColor: '#000000',
        orders: [],
        min: 0,
        max: 200,
        steps: 1,
        value: 100,
        demo: '',
        // The resource variable
        animals: [],
        // Here you define the url of your paginated API
        resource_url: 'http://hootlex.github.io/vuejs-paginator/samples/animals1.json'
      }
    },

    methods: {
      open () {
        console.log('slideoutOpen')
      },

      updateResource (data){
        this.animals = data
      },

      toggleGrid () {
      }
    },

    beforeCreate () {
      this.$store.state.activeApp = null
    },
    created () {
      // axios.get('https://wp.videa.design/wp-json')
      // https://wp.videa.design/wp-json/wp/v2/posts
      //
      var statuses = ['foo', 'bar']
      console.log(statuses.includes('bars'))

      axios.get('/orders')
        .then(({data}) => this.orders = data)

    },
    mounted () {
      this.$toasted.success('Mounted', {
        theme: "primary",
        position: "top-right",
        duration : 5000
      })
    }

  }
</script>

<style lang="scss">
  // @import '~bulma'
</style>
<style lang="stylus">
  body
    width: 100%
    height: 100%
    margin: 0
  .slideout-menu
    position: fixed
    top: 0
    bottom: 0
    width: 256px
    height: 100vh
    overflow-y: scroll
    -webkit-overflow-scrolling: touch
    z-index: 0
    display: none
    background-color: #1D1F20
    color: white
  .slideout-menu-left
    left: 0
  .slideout-menu-right
    right: 0
  .slideout-panel
    background-color: #4B5
    color: white
    position: relative
    z-index: 1
    will-change: transform
    min-height: 100vh
  .slideout-open,
    .slideout-open body,
    .slideout-open .slideout-panel
    overflow: hidden
  .slideout-open .slideout-menu
    display: block
</style>
