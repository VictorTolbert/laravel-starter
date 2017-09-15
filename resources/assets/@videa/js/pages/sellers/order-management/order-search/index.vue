<template lang="pug">
  .active-orders-view
    vui-title Order Search
    vui-panel
      .vui-scrollabl.vui-p-bottom--x-small
        order-search-filter

    order-search-grid(:orders='orders')

    .table-footer-row
      .vui-pagination(
        current-page = 'currentPage'
        items-per-page = 'itemsPerPage'
        refresh-data = 'refreshData'
        total-items = 'totalItems'
      )
        .vui-show--inline-block.vui-m-right--large
          span
        .vui-show--inline-block
          //- ul.pagination(total-items='totalItems', items-per-page='itemsPerPage', @change='changeFunction', max-size='_maxSize', previous-text='', next-text='', boundary-links='false', rotate='false', num-pages='numPages')
          //-   li.pagination-prev(v-if='directionLinks')
          //-     a(href='', @click='selectPage(page - 1)') 
          //-   li.pagination-page(v-for='(page, index) in pages')
          //-     a(href='', @click='selectPage(page.number)') 1
          //-   li.pagination-next(v-if='directionLinks')
          //-     a(href='', @click='selectPage(page + 1)') 
</template>

<script>
  import { EventBus } from '@/plugins/event-bus'

  import OrderSearchFilter from '@/components/order-management/order-search/filter'
  import OrderSearchGrid from '@/components/order-management/order-search/grid'

  export default {
    name: 'order-search',

    metaInfo: {
      title: 'Order Search'
    },

    components: {
      OrderSearchFilter,
      OrderSearchGrid
    },

    data () {
      return {
        orders: [],
        currentPage: 1,
        directionLinks: true,
        pages: [
          { active: true, number: 1 },
          { active: false, number: 2 }
        ]
      }
    },

    methods: {
      fetchOrders () {
        axios.get('/orders')
          .then((response) => {
            this.orders = response.data
          })
          .catch((error) => {
            console.log(error)
          })
      },

      changeFunction () {}
    },

    beforeCreate () {
      this.$store.state.activeApp = 'sellers'
    },

    created () {
      this.fetchOrders()
    },

    mounted () {
      // EventBus.listen('completed-order', () => this.hasChangedCompletionOrders)


    }
  }
</script>
