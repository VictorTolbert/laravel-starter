<template lang="pug">
      table.vui-table.vui-no-row-hover.vui-table--striped.vui-table--fixed-layout
        thead
          tr
            th(
              style = 'width: 120px'
            )
              vui-sorting-column(
                column-data = 'gridColumns.requestType'
                column-name = 'requestType'
                current-sorting = 'sorting'
                on-sorting = 'columnSortingChanged(gridColumns.requestType)'
                title = 'Request Type'
              )
            th(
              style = 'width: 210px'
            )
              vui-sorting-column(
                column-data = 'gridColumns.transactionStatusName'
                column-name = 'transactionStatusName'
                current-sorting = 'sorting'
                on-sorting = 'columnSortingChanged(gridColumns.transactionStatusName)'
                title = 'Status'
              )
            th(
              style = 'width: 200px'
            )
              vui-sorting-column(
                column-data = 'gridColumns.userName'
                column-name = 'userName'
                current-sorting = 'sorting'
                on-sorting = 'columnSortingChanged(gridColumns.userName)'
                title = 'User'
              )
            th(
              style = 'width: 150px'
            )
              vui-sorting-column(
                column-data = 'gridColumns.transactionDateTime'
                column-name = 'transactionDateTime'
                current-sorting = 'sorting'
                on-sorting = 'columnSortingChanged(gridColumns.transactionDateTime)'
                title = 'Date/Time'
              )
            th(
              style = 'width: 100px'
            )
              vui-sorting-column(
                column-data = 'gridColumns.iterationNumber'
                column-name = 'iterationNumber'
                current-sorting = 'sorting'
                on-sorting = 'columnSortingChanged(gridColumns.iterationNumber)'
                title = 'Iteration'
              )
            th(
              style = 'width: 15%'
            )
              vui-sorting-column(
                column-data = 'gridColumns.versionNumber'
                column-name = 'versionNumber'
                current-sorting = 'sorting'
                on-sorting = 'columnSortingChanged(gridColumns.versionNumber)'
                title = 'Version'
              )
        tbody
          tr
            td Original
            td Buyer Status - Accepted
            td Admin Videa
            td
            td
            td
</template>
