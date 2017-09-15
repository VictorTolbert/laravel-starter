<template lang="pug">
  .vui-grid.vui-grid--align-spread.vui-m-bottom--large
    h2.vui-text-heading--medium Details

    fieldset
      a.close-button.vui-m-right--x-small
        input.vui-button.vui-button--neutral(
          v-on:click = 'closeTab'
          type = 'button',
          value = 'Close'
        )

      a.vui-button.vui-button--secondary.vui-m-right--xx-small(
        v-if = '!isCancelledOrder'
        v-bind:href = '`/#/sellers/order-management/pending-makegoods/${orderId}`'
        target = '_blank'
      ) Makegoods

      input.vui-button.vui-button--secondary(
        v-if = '!isCancelledOrder'
        v-on:click = 'openSpotsRunNotOrderedPopup'
        type = 'button'
        value = 'Unmatched Spots'
      )

      input.vui-button.vui-button--secondary(
        v-if = '!isCancelledOrder'
        v-on:click = 'openEbizHistoryPopup'
        type = 'button'
        value = 'eBiz History'
      )
      input.vui-button.vui-button--secondary(
        v-on:click.prevent = 'openTotalsPopup'
        type = 'button'
        value = 'Totals'
      )

    ebiz-history-popup(
      v-bind:context = 'context'
      v-if = 'showEbizHistoryPopup'
      @close = 'showEbizHistoryPopup = false'
    )
    totals-popup(
      v-bind:context = 'context'
      v-if = 'showTotalsPopup'
      @close = 'showTotalsPopup = false'
    )
    spots-run-not-ordered-popup(
      v-bind:context = 'context'
      v-if = 'showSpotsRunNotOrderedPopup'
      @close = 'showSpotsRunNotOrderedPopup = false'
    )
</template>

<script>
  export default {
    props: {
      orderId: {
        type: [String, Number]
      },
      offers: {
        type: Array
      },
      offerRoute: {
        type: String,
        default: 'sellers-order-management-pending-makegoods-id'
      }
    },

    data () {
      return {
        context: {},
        isCancelledOrder: false,
        startDate: new Date(moment().add(14, 'days').toISOString()),
        endDate: new Date(moment().add(5, 'days').toISOString()),
        offer: {},
        order: {},
        isImpressionsBuyType: true,
        shouldShowInfo: true,
        isMakegoodDefined: true,
        showSpotsRunNotOrderedPopup: false,
        showEbizHistoryPopup: false,
        showTotalsPopup: false
      }
    },
    methods: {
      showOffer (id, version = '') {
        let routeInfo = {
          name: this.offerRoute,
          params: {
            id: id
          }
        }

        if (version) {
          routeInfo.query = { version: version }
        }

        this.$router.push(routeInfo)
      },

      closeTab () {
        window.close();
      },

      openMakegoodDetails (id) {

      },

      openSpotsRunNotOrderedPopup () {
        this.showSpotsRunNotOrderedPopup = true
      },

      openEbizHistoryPopup () {
        this.showEbizHistoryPopup = true
      },

      openTotalsPopup () {
        this.showTotalsPopup = true
      },

      showEbizHistory () {},

      fetchOffer(id) {
        axios.get(`/offers/${id}`)
          .then((response) => {
            this.offer = response.data
          })
          .catch((error) => {
            console.log(error)
          })
      },

      fetchOrder (id) {
        axios.get(`/orders/${id}`)
          .then((response) => {
            this.order = response.data
          })
          .catch((error) => {
            console.log(error)
          })
      },


      infoClicked () {
        this.shouldShowInfo = !this.shouldShowInfo
      }
    },

    created () {
      // this.fetchOffer(this.$route.params.id)
    },

    mounted () {
      this.fetchOrder(this.$route.params.id)
    }
  }
</script>
