<template lang="pug">
div
  //- pre {{offered}}
  table.vui-table.vui-no-row-hover.mgs-total-grid
    thead
      tr
        th(v-for='gridColumn in gridColumns' v-if='gridColumn.isVisible') {{gridColumn.title}}
    tbody
      tr(v-if='preempts && preempts.length')
        td Preempt(s)
        td.vui-text-align--right {{(preempts && preempts.length) ? preempts.length : 0}}
        td.vui-text-align--right {{preemptDollars | numberWithCommas | formatMoney}}
        td.vui-text-align--right {{preemptGrps | formatRating}}
      tr
        td Makegood(s)
        td.vui-text-align--right {{makegoodSpotsCount}}
        td.vui-text-align--right {{makegoodStationRates * makegoodSpotsCount | numberWithCommas | formatMoney}}
        td.vui-text-align--right {{makegoodStationGrps * makegoodSpotsCount | formatRating}}
      tr(v-if='preempts && preempts.length')
        td Diff.
        td.vui-text-align--right(:class='{"error": (preempts.length - makegoodSpotsCount) < 0}')
          | {{preempts.length - makegoodSpotsCount}}
        td.vui-text-align--right(:class='{"error": (preemptDollars - (makegoodStationRates * makegoodSpotsCount)) < 0}')
          | {{preemptDollars - (makegoodStationRates * makegoodSpotsCount) | numberWithCommas | formatMoney}}
        td.vui-text-align--right
          | {{preemptGrps - (makegoodStationGrps * makegoodSpotsCount) | formatRating}}
      //- tr(v-for='item in items')
      //-   td.vui-truncate(:title='item.rowName' style='width: 155px') {{item.rowName}}
      //-   td.vui-truncate.vui-text-align--right(:class='{"error": item.spotsCount < 0}', :title='item.spotsCount' style='width: 80px') {{item.spotsCount}}
      //-   td.vui-truncate.vui-text-align--right(:class='{"error": item.rateSum < 0}', :title='item.rateSum') {{item.rateSum}}
      //-   td.vui-truncate.vui-text-align--right(:class='{"error": item.ratings < 0}', :title='item.ratings' v-if='!showImpressions') {{item.ratings}}
</template>

<script>
  import _ from 'lodash'

  export default {
    props: ['preempts', 'offered'],

    data () {
      return {
        showImpressions: false,
        gridColumns: [
          { title: 'Totals', isVisible: true },
          { title: 'Spots', isVisible: true },
          { title: 'Dollars', isVisible: true },
          { title: 'GRPs', isVisible: true }
        ],
        items: [
          // {
          //   rowName: 'Preempt(s)',
          //   spotsCount: 0,
          //   rateSum: 0,
          //   ratings: 0
          // },
          { rowName: 'Makegood(s)', spotsCount: 1, rateSum: 0, ratings: 0 },
          { rowName: 'Diff.', spotsCount: -1, rateSum: 0, ratings: 0 }
        ]
      }
    },
    computed: {
      preemptDollars () {
        return this.preempts.reduce((total, preempt) => total + parseFloat(preempt.programSpotUnitRate), 0)
      },
      preemptGrps () {
        return this.preempts.reduce((total, preempt) => total + parseFloat(preempt.buyerRating), 0)
      },

      makegoodSpots () {
        return this.offered.map(offer => offer.weeks)
          .reduce((total, value) => total + parseFloat(value), 0)
        // return this.offered.reduce((total, offer) => total + parseFloat(offer.weeks), 0)
      },

      makegoodSpotsCount () {
        return this.offered.map(spot => _.sum(spot.weeks))
          .reduce((total, spot) => total + parseFloat(spot), 0)
      },

      makegoodStationRates () {
        return this.offered.map(offer => offer.spotRate)
          .reduce((total, value) => total + parseFloat(value), 0)
      },

      makegoodStationGrps () {
        return this.offered.map(offer => offer.buyerRating)
          .reduce((total, value) => total + parseFloat(value), 0)
      }
    }
  }
</script>
