<!-- id="custom id"
class-name="custom class name"
placeholder="placeholder"
:init-value="initial value"
:init-value="initial value"
:custom-params="{ token: 'dev' }"
:min="3"

:on-input="callbackEvent"
:on-show="callbackEvent"
:on-blur="callbackEvent"
:on-hide="callbackEvent"
:on-focus="callbackEvent"
:on-select="callbackEvent"
:on-before-ajax="callbackEvent"
:on-ajax-progress="callbackEvent"
:on-ajax-loaded="callbackEvent" -->

<!-- https://github.com/BosNaufal/vue2-autocomplete -->

<template>
  <autocomplete
    url="http://localhost/proyek/goodmovie/api/api/v1/search"
    anchor="title"
    label="writer"
    :on-select="getData"
    >
  </autocomplete>

</template>

<script>

  import Autocomplete from 'vue2-autocomplete-js';
  require('vue2-autocomplete-js/style/vue2-autocomplete.css')

  export default {

    components: { Autocomplete },

    methods: {
      getFiles(obj){
        console.log(obj);
      }
    }
  };

</script>
