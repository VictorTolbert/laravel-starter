<template lang="pug">
div.vui-m-bottom--xx-large
  vui-subtitle New Programming
  .vui-scrollable--x
    table.vui-table.vui-no-row-hover.vui-table--fixed-layout.mg-offer-spots
      thead
        tr
          th(style='width:80px')
            vui-sorting-column(title='Line #')
          th(style='width:110px')
            vui-sorting-column(title='Order Days')
          th(style='width:95px')
            vui-sorting-column(title='Start Time')
          th(style='width:95px')
            vui-sorting-column(title='End Time')
          th(style='width:310px')
            vui-sorting-column(title='Program')
          th(style='width:60px')
            vui-sorting-column(title='Len')
          th.vui-cell-wrap(style='width:85px')
            vui-sorting-column(title='Ordered Spots')
          th.spot-allocation-column(style='width: 503px;')
            spot-allocation-header(ng-model='items[0].spotAllocations', navigator='ctrl.spotAllocationNavigator')
          th(style='width:100px'): vui-sorting-column(title='Spot Rate')
          th.vui-cell-wrap(style='width:100px'): vui-sorting-column(title='Station RTG')
          th(style='width:100px')
            vui-sorting-column(title='Station CPP')
          th.vui-cell-wrap(style='width:200px') Makegood Comments
      tbody
        tr.ng-scope(v-for='program in offer.newProgramming')
          td.vui-truncate.vui-text-align--center(style='width:80px', :title='program.lineNumber') {{program.lineNumber}}
          td.vui-truncate(style='width:110px', :title='program.orderDays') {{program.orderDays}}
          td.vui-truncate(style='width:95px', :title='program.startTime') {{program.startTime}}
          td.vui-truncate(style='width:95px', :title='program.endTime') {{program.endTime}}
          td.vui-truncate(style='width:310px', :title='program.program') {{program.program}}
          td.vui-truncate.vui-text-align--right(style='width:60px', :title='program.length') {{program.length}}
          td.vui-truncate.vui-text-align--right(style='width:85px', :title='program.orderedSpots') {{program.orderedSpots}}
          td.spot-allocation-cell(style='width: 503px')
            //- spot-allocation-with-missed-spots(ng-model='item.spotAllocations')
            .spot-allocation-row
              .spot-allocation-container.spot-allocation-data(style='width: 455px')
                ul.spot-allocation(style='left: 0')
                  li(v-for='(week, index) in program.weeks', :key='index')
                    .editable-spot-value
                      input(v-model.number='program.weeks[index]')
          td.vui-truncate.vui-text-align--right(style='width:100px', :title='program.spotRate') {{program.spotRate | formatMoney}}
          td.vui-truncate.vui-text-align--right(style='width:100px', :title='program.stationRating') {{program.stationRating | formatRating}}
          td.vui-truncate.vui-text-align--right(style='width:100px', :title='program.stationCpp') {{program.stationCpp | formatMoney}}
          td.vui-truncate(style='width:200px', ng-bind='::item.comment', :title='program.comment') {{program.comment}}
</template>

<script>
  export default {
    props: {
      offer: {
        type: Object
      }
    }
  }
</script>
