<template lang="pug">
  table.vui-table.vui-no-row-hover.vui-table--striped
    thead
      tr
        th(style='width: 56px'): vui-sorting-column(title='Request Type')
        th(style='width: 100px'): vui-sorting-column(title='Status')
        th(style='width: 100px'): vui-sorting-column(title='User')
        th(style='width: 70px'): vui-sorting-column(title='Date/Time')
        th(style='width: 70px'): vui-sorting-column(title='Iteration')
        th(style='width: 105px'): vui-sorting-column(title='Version')
    tbody
      tr(v-for='item in items' v-show='!item.delivered || item.delivered == showDelivered')
        td {{item.requestType}}
        td {{item.status}}
        td {{item.user}}
        td {{item.dateTime}}
        td.vui-text-align--right {{item.iteration}}
        td.vui-text-align--right {{item.version}}
</template>

<script>
  export default {
    props: {
      showDelivered: Boolean
    },
    data () {
      return {
        items: [
          {
            delivered: true,
            requestType: 'Original',
            status: 'DARE In',
            user: 'Jessica Bond',
            dateTime: '02/27/2017 09:13 PM',
            iteration: 1,
            version: 1
          },
          {
            delivered: false,
            requestType: 'Original',
            status: 'Buyer Status -- Accepted',
            user: 'Brian Reed',
            dateTime: '02/28/2017 10:07 AM',
            iteration: 1,
            version: 1
          },
          {
            delivered: false,
            requestType: 'Original',
            status: 'Seller Status -- New',
            user: 'Brian Reed',
            dateTime: '03/02/2017 12:12 PM',
            iteration: 1,
            version: 1
          },
          {
            delivered: true,
            requestType: 'Original',
            status: 'DARE Out',
            user: 'Brian Reed',
            dateTime: '03/08/2017 03:59 PM',
            iteration: 1,
            version: 1
          },
          {
            delivered: false,
            requestType: 'Original',
            status: 'Email -- Order Sent To Station',
            user: 'Brian Reed',
            dateTime: '03/20/2017 05:16 PM',
            iteration: 1,
            version: 1
          },
          {
            delivered: true,
            requestType: 'Original',
            status: 'DARE Out',
            user: 'Brian Reed',
            dateTime: '03/28/2017 08:27 AM',
            iteration: 1,
            version: 1
          },
          {
            delivered: false,
            requestType: 'Original',
            status: 'Buyer Status -- Confirmed',
            user: 'Brian Reed',
            dateTime: '04/07/2017 09:49 AM',
            iteration: 1,
            version: 1
          },
          {
            delivered: false,
            requestType: 'Original',
            status: 'Seller Status -- Confirmed',
            user: 'Brian Reed',
            dateTime: '04/10/2017 06:31 PM',
            iteration: 1,
            version: 1
          },
          {
            delivered: false,
            requestType: 'Original',
            status: 'Email -- Order Confirmed To Station',
            user: 'Brian Reed',
            dateTime: '04/19/2017 04:13 PM',
            iteration: 1,
            version: 1
          },
          {
            delivered: true,
            requestType: 'Original',
            status: 'DARE In',
            user: 'Brian Reed',
            dateTime: '04/19/2017 05:01 PM',
            iteration: 1,
            version: 1
          }
        ]
      }
    },
    computed: {
      filteredItems () {
        return this.items.filter((item) => {
          return this.showDelivered == item.delivered || item
        })
      }
    }
  }
</script>

