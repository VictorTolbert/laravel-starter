<!-- https://codepen.io/LostKobrakai/pen/KVXQBg?editors=1010 -->
<template lang="pug">
.example
  .fullscreen
    video(
      @ended.prevent = 'switchToNext',
      @mousemove = 'showThumbs',
      :poster = 'current.thumb',
      controls = '',
      ref = 'video'
    )
      source(
        v-for='(type, src) in current.video',
        :src='src',
        :type='type'
      )
      | HTML5 Video seems to be not supported in your browser.
  ul.popover(v-show='showThumbnails')
    li(
      v-for='(video, index) in videos',
      v-show='index !== currentIndex'
    )
      a(
        :href='firstSource(video.video)',
        @click.prevent='setCurrent(index)'
      )
        img(:src='video.thumb', alt='')
  div(v-show='loader')
    .loader
      .loader__inner(:class="{'loader__inner--active': loader}")

</template>

<script>
  function debounce(func, wait, immediate) {
    var timeout
    return function () {
      var context = this, args = arguments
      var later = function () {
        timeout = null
        if (!immediate) func.apply(context, args)
      }
      var callNow = immediate && !timeout
      clearTimeout(timeout)
      timeout = setTimeout(later, wait)
      if (callNow) func.apply(context, args)
    }
  }

  export default {
    data: () => ({
      videos: [
        {
          thumb: 'https://assets.victortolbert.com/video/Go-Goat.jpg',
          video: {
            'video/mp4': 'https://assets.victortolbert.com/video/Go-Goat.mp4',
            'video/webm': 'https://assets.victortolbert.com/video/Go-Goat.webm'
          }
        },
        {
          thumb: 'https://assets.victortolbert.com/video/Mock-up.jpg',
          video: {
            'video/mp4': 'https://assets.victortolbert.com/video/Mock-up.mp4',
            'video/webm': 'https://assets.victortolbert.com/video/Mock-up.webm'
          }
        }
      ],
      currentIndex: 0,
      timeout: null,
      showThumbnails: false,
      forceShow: false,
      loader: false
    }),

    computed: {
      current () {
        return this.videos[this.currentIndex]
      }
    },

    methods: {
      firstSource (obj) {
        return obj['video/mp4']
      },

      setCurrent (index) {
        this.currentIndex = index
      },

      switchToNext () {
        this.currentIndex++
        if (this.currentIndex == this.videos.length) {
          this.currentIndex = 0
        }
      },

      showThumbs () {
        this.showThumbnails = true
        this.hideThumbs()
      },

      hideThumbs: debounce(() => {
        this.showThumbnails = false
      }, 1000)
    },

    watch: {
      current (newVal, oldVal) {
        this.$refs.video.load()
        this.loader = true
        setTimeout(() => {
          this.$refs.video.play()
          this.loader = false
        }, 1000)
      }
    },

    ready () {
      this.$refs.video.play()
    }
  }
</script>
