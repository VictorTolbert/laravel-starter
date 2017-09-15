<template lang="pug">
  table.vui-table.vui-no-row-hover.vui-table--striped
    thead
      tr
        th(style='width: 56px'): vui-sorting-column(title='Version')
        th(style='width: 100px'): vui-sorting-column(title='Last Updated')
        th(style='width: 100px'): vui-sorting-column(title='Total Dollars')
        th(style='width: 100px'): vui-sorting-column(title='Total GRPs')
        th(style='width: 70px'): vui-sorting-column(title='Total Spots')
        th(style='width: 70px'): vui-sorting-column(title='Total Lines')
        th(style='width: 105px'): vui-sorting-column(title='Difference Dollars')
        th(style='width: 95px'): vui-sorting-column(title='Difference GRPs')
        th(style='width: 95px'): vui-sorting-column(title='Difference Spots')
        th(style='width: 20%'): vui-sorting-column(title='Difference Lines')
    tbody
      tr(v-for='item in items')
        td.vui-text-align--right {{item.version}}
        td {{item.lastUpdated}}
        td.vui-text-align--right {{item.totalDollars | numbersWithCommas | formatMoney}}
        td.vui-text-align--right {{item.totalGrps}}
        td.vui-text-align--right {{item.totalSpots }}
        td.vui-text-align--right {{item.totalLines}}
        td
        td
        td
        td
</template>

<script>
  export default {
    data () {
      return {
        items: [
          {
            version: 1,
            lastUpdated: '04/14/2017',
            totalDollars: 41000,
            totalGrps: 99.7,
            totalSpots: 53,
            totalLines: 11
          }
        ]
      }
    }
  }
</script>
