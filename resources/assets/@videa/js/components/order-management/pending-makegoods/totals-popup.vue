<template lang="pug">
  vui-modal(size='large')
    .modal-header.vui-m-bottom--large
      h3.vui-text-heading--medium.vui-grid.vui-grid--align-spread
        span Order Totals
        span.pointer.vui-icon_container.vui-m-right--x-small(@click='$emit("close")' title='Close')
          vui-icon.vui-icon--small(name='close')
    .modal-body
      .vui-scrollable--x
        table.vui-table.vui-no-row-hover.vui-table--fixed-layout
          thead
            tr
              th(style='width:100px')  Month/Year
              th.vui-text-align--right(style='width:100px')  Dollars
              th.vui-text-align--right(style='width:100px')  Spots
              th.vui-text-align--right(style='width:100px')  GRP
          tbody.avails-pulled-table-body
            tr(v-for='item in items')
              td(style='width:100px') {{item.monthStartDate}}
              td.vui-text-align--right.currency(style='width:100px') {{item.dollars | numberWithCommas | formatMoney}}
              td.vui-text-align--right(style='width:100px') {{item.totalSpots}}
              td.vui-text-align--right(style='width:100px') {{item.rating}}
          tfoot
            tr
              th.vui-text-align--right(style='width:100px')  Totals:
              th.vui-text-align--right.currency(style='width:100px', title='$0.00') {{totalDollars | numberWithCommas | formatMoney}}
              th.vui-text-align--right(style='width:100px', title='12.00') {{totalSpots}}
              th.vui-text-align--right(style='width:100px', title='0.00') {{totalGrps | formatRating}}
</template>

<script>
    export default {
      data () {
        return {
          items: [
            { monthStartDate: 'April 2017', dollars: 20950, totalSpots: 32, rating: 54.6 },
            { monthStartDate: 'May 2017', dollars: 20050, totalSpots: 21, rating: 45.1 }
          ]
        }
      },
      computed: {
        totalDollars () {
          return this.items.reduce((total, item) => total + item.dollars, 0)
        },
        totalSpots () {
          return this.items.reduce((total, item) => total + item.totalSpots, 0)
        },
        totalGrps () {
          return this.items.reduce((total, item) => total + item.rating, 0)
        }
      }
    }
</script>
