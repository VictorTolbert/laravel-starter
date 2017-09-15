<!-- http://codepen.io/sashatran/pen/peNaXE -->
<template lang="pug">
  .example
    vui-title Zipcode Finder
    .form
      input(type='text', v-model='zip', maxlength='5', placeholder='ex: 94301')
    .error {{error}}
    .display {{ result }}

</template>
<script>
  import axios from 'axios'
  import $ from 'jquery'

  export default {
    data: () => ({
      result: {

      },
      city: '',
      zip: '94301',
      error: ''
    }),

    methods: {
      getCity () {
        axios.get('/https://ZiptasticAPI.com/' + this.zip)
          .then(({data}) => this.result = data)
          .then(console.error)

        // $.getJSON("https://ZiptasticAPI.com/" + this.zip, function(result) {
        //   if (result.error) {
        //     self.error = "zip code not found";
        //     self.city = "";
        //     $(".error").addClass("no");
        //   } else {
        //     self.city = result.city + "," + result.state;
        //     $(".display").addClass("animated fadeInDown");
        //   }
        // })
      }
    },
    watch: {
      zip () {
        if (this.zip.length === 5) {
          this.getCity()
          this.error = ''
          $('.error').removeClass('no')
        }

        if (this.zip.length < 5) {
          this.city = ''
          this.error = 'hey, that\'s not a zipcode'
          $('.error').addClass('no')
          $('.display').removeClass('animated fadeInDown')
        }
      }
    },

    mounted () {
      this.getCity()
    }
  }
</script>
