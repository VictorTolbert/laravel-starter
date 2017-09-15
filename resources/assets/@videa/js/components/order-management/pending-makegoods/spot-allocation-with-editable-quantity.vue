<template lang="pug">
  .spot-allocation-row.has-quantity
    .spot-allocation-container.spot-allocation-data(v-bind:style="{'width': spotsWidth}")
      ul.spot-allocation(style='left: 0')
        li(:class = "{ 'hiatus-spot': spot.isHiatus }" v-for='spot in spots')
          div(v-if='spot.availableQuantity !== null')
            div(v-if='isEditable')
              .table-row.value
                input.arrow-hidden(type='number', min='0', max='99', step='0.1', vui-max-number='99', ng-change='vm.onChanged()', v-model.number='spot.value')
              .table-row.quantity
                span.text-underline {{spot.availableQuantity}}
</template>

<script>
  export default {
    props: {
      spots: Array,
      isEditable: {
        type: Boolean,
        default: true
      }
    },
    data () {
      return {
        spotsWidth: '455px'
      }
    },

    methods: {
      scrollLeft () {},
      scrollRight () {}
    }
  }
</script>
