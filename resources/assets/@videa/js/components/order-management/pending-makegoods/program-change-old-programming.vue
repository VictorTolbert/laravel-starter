<template lang="pug">
div.vui-m-bottom--xx-large
  vui-subtitle Old Program Names Being Replaced
  .vui-scrollable--x
    table.vui-table.vui-no-row-hover.vui-table--striped.vui-table--fixed-layout.mg-program-name-change
      thead
        tr
          th(style='width:110px'): vui-sorting-column(title='Order Days')
          th(style='width:95px'): vui-sorting-column(title='Start Time')
          th(style='width:95px'): vui-sorting-column(title='End Time')
          th(ng-style="{width: isEditMode ? '202px' : '250px'}", style='width: 250px')
            vui-sorting-column(title='Program')
          th(style='width:95px'): vui-sorting-column(title='Line')
          th(style='width:95px'): vui-sorting-column(title='Len')
          th.vui-cell-wrap(style='width:95px'): vui-sorting-column(title='Ordered Spots')
          th.spot-allocation-column(ng-style="{'width': ctrl.spotAllocationNavigator.tableCellWidth}", style='width: 503px')
            spot-allocation-header(ng-model='items[0].spotAllocations', navigator='ctrl.spotAllocationNavigator')
          th(style='width:100px'): vui-sorting-column(title='Spot Rate')
          th(style='width:100px'): vui-sorting-column(title='Buyer RTG')
          th(style='width:100px'): vui-sorting-column(title='Buyer CPP')
          th(style='width:200px'): vui-sorting-column(title='Line $ Total')
      tbody
        tr(v-for='program in offer.oldProgramNamesBeingReplaced')
          td.vui-truncate(style='width:110px', :title='program.orderDays') {{program.orderDays}}
          td.vui-truncate(style='width:95px', :title='program.startTime') {{program.startTime}}
          td.vui-truncate(style='width:95px', :title='program.endTime') {{program.endTime}}
          td.vui-truncate(style='width:250px', :title='program.program') {{program.program}}
          td {{program.lineNumber}}
          td.vui-truncate.vui-text-align--right(style='width:95px', :title='program.length') {{program.length}}
          td.vui-truncate.vui-text-align--right(style='width:95px', :title='program.orderedSpots') {{program.orderedSpots}}
          td.spot-allocation-cell(style='width: 503px')
            //- spot-allocation-with-missed-spots(ng-model='item.spotAllocations', navigator='ctrl.spotAllocationNavigator')
            .spot-allocation-row
              .spot-allocation-container.spot-allocation-data(style='width: 455px')
                ul.spot-allocation(style='left: 0')
                  li(v-for='(week, index) in program.weeks', :key='index')
                    .editable-spot-value
                      input(v-model.number='program.weeks[index]')
          td.vui-truncate.vui-text-align--right(style='width:100px', :title='program.spotRate') {{program.spotRate | formatMoney}}
          td.vui-truncate.vui-text-align--right(style='width:100px', :title='program.buyerRating') {{program.buyerRating | formatRating}}
          td.vui-truncate.vui-text-align--right(style='width:100px', :title='program.buyerCpp') {{program.buyerCpp | formatMoney }}
          td.vui-truncate.vui-text-align--right(style='width:200px', :title='program.lineDollarTotal') {{program.lineDollarTotal |formatMoney}}
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
