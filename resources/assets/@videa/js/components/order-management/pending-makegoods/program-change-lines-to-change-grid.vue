<template lang="pug">
  .vui-scrollable--x(style='height: 220px;overflow-y: hidden')
    table.vui-table.vui-no-row-hover.vui-table--striped.vui-table--fixed-layout.mg-program-name-change
      thead
        tr
          th.vui-text-align--center(v-if='isEditMode' style='width: 48px') Select
          th(style='width: 110px'): vui-sorting-column(title='Order Days')
          th(style='width: 95px'): vui-sorting-column(title='Start Time')
          th(style='width: 95px'): vui-sorting-column(title='End Time')
          th(style='width: 220px'): vui-sorting-column(title='Program')
          th(style='width: 70px'): vui-sorting-column(title='Line')
          th(style='width: 55px'): vui-sorting-column(title='Len')
          th.vui-cell-wrap(style='width: 80px'): vui-sorting-column(title='Ordered Spots')
          th.spot-allocation-column(style='width: 503px')
            spot-allocation-header
          th(style='width: 100px'): vui-sorting-column(title='Spot Rate')
          th(v-if='isImpressionsBuyType' style='width: 100px'): vui-sorting-column(title='Buyer IMP')
          th(v-if='isImpressionsBuyType' style='width: 100px'): vui-sorting-column(title='Buyer CPM')
          th(style='width: 50%'): vui-sorting-column(title='Line $ Total')
      tbody
        tr(v-for='item in items')
          td.vui-text-align--center(v-if='isEditMode' style='width: 48px')
            label.vui-checkbox
              input.vui-input(v-model='item.isSelected' type='checkbox')
              span.vui-checkbox--faux
          td.vui-truncate(:title='item.orderDays' style='width: 110px') {{item.orderDays}}
          td.vui-truncate(:title='item.startTime' style='width: 95px') {{ item.startTime }}
          td.vui-truncate(:title='item.endTime' style='width: 95px') {{ item.endTime }}
          td.vui-truncate(:title='item.programName' style='width: 220px') {{ item.programName }}
          td.vui-truncate.vui-text-align--right(:title='item.lineNumber' style='width: 70px') {{ item.lineNumber }}
          td.vui-truncate.vui-text-align--right(:title='item.spotLength' style='width: 55px') {{ item.spotLength }}
          td.vui-truncate.vui-text-align--right(:title='item.orderedSpots' style='width: 80px') {{ item.orderedSpots }}
          td.spot-allocation-cell(style='width: 503px')
            //- makegoods-spot-allocation-with-missed-spots(v-model='item.weeklySpotAllocations')
            .spot-allocation-row
              .spot-allocation-container.spot-allocation-data(style='width: 455px')
                ul.spot-allocation(style='left: 0')
                  li(v-for='spot in item.weeklySpotAllocations')
                    div: span: span {{ spot.value }}
          td.vui-truncate.vui-text-align--right(:title='item.orderedSpotRate' style='width: 100px') {{ item.orderedSpotRate }}
          td.vui-truncate.vui-text-align--right(:title='item.buyerRating' style='width: 100px') {{ item.buyerRating }}
          td.vui-truncate.vui-text-align--right(:title='item.orderedCpp' style='width: 100px') {{ item.orderedCpp }}
          td.vui-truncate.vui-text-align--right(:title='item.lineTotalMoney' style='width: 50%') {{ item.lineTotalMoney }}
</template>

<script>
  export default {
    data () {
      return {
        isEditMode: true,
        isImpressionsBuyType: true,
        items: [
          {
            isSelected: false,
            orderDays: 'MO-FR',
            startTime: '07:00 AM',
            endTime: '08:00 AM',
            programName: 'Network23 News This Morning',
            lineNumber: 1,
            spotLength: '30 s',
            orderedSpots: 12,
            spotRate: 350,
            buyerRating: 1.5,
            lineDollarTotal: 4200,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          },
          {
            isSelected: false,
            orderDays: 'MO-FR',
            startTime: '08:00 AM',
            endTime: '09:00 AM',
            programName: 'Network23 News This Morning',
            lineNumber: 2,
            spotLength: '30 s',
            orderedSpots: 6,
            spotRate: 350,
            buyerRating: 1.7,
            lineDollarTotal: 2100,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          },
          {
            isSelected: false,
            orderDays: 'MO-FR',
            startTime: '05:00 PM',
            endTime: '06:00 PM',
            programName: ' Network23 News @ 5',
            lineNumber: 3,
            spotLength: '30 s',
            orderedSpots: 6,
            spotRate: 550,
            buyerRating: 1.8,
            lineDollarTotal: 3300,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          },
          {
            isSelected: false,
            orderDays: 'MO-FR',
            startTime: '06:00 PM',
            endTime: '07:00 PM',
            programName: ' Network23 News @ 6',
            lineNumber: 4,
            spotLength: '30 s',
            orderedSpots: 6,
            spotRate: 550,
            buyerRating: 2.0,
            lineDollarTotal: 3300,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 2,
                isHiatus: false,
                trafficSpots: 0
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 2,
                isHiatus: false,
                trafficSpots: 2
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 2,
                isHiatus: false,
                trafficSpots: 2
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          },
          {
            isSelected: false,
            orderDays: 'MO-FR',
            startTime: '09:00 PM',
            endTime: '10:00 PM',
            programName: 'Network23 News @ 9',
            lineNumber: 5,
            spotLength: '30 s',
            orderedSpots: 6,
            spotRate: 1400,
            buyerRating: 3.0,
            lineDollarTotal: 8400,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 2,
                isHiatus: false,
                trafficSpots: 2
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 2,
                isHiatus: false,
                trafficSpots: 2
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 2,
                isHiatus: false,
                trafficSpots: 2
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          },
          {
            isSelected: false,
            orderDays: 'MO-FR',
            startTime: '11:00 PM',
            endTime: '11:30 PM',
            programName: 'Seinfeld',
            lineNumber: 6,
            spotLength: '30 s',
            orderedSpots: 6,
            spotRate: 200,
            buyerRating: 1.1,
            lineDollarTotal: 1200,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          },
          {
            isSelected: false,
            orderDays: 'MO-FR',
            startTime: '12:00 AM',
            endTime: '12:30 AM',
            programName: 'Anger Management',
            lineNumber: 7,
            spotLength: '30 s',
            orderedSpots: 3,
            spotRate: 100,
            buyerRating: 0.7,
            lineDollarTotal: 300,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 3,
                isHiatus: false,
                trafficSpots: 3
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          },
          {
            isSelected: false,
            orderDays: 'Mo',
            startTime: '08:00 PM',
            endTime: '09:00 PM',
            programName: 'Gotham',
            lineNumber: 8,
            spotLength: '30 s',
            orderedSpots: 2,
            spotRate: 2500,
            buyerRating: 3.0,
            lineDollarTotal: 5000,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 1,
                isHiatus: false,
                trafficSpots: 1
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 1,
                isHiatus: false,
                trafficSpots: 1
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          },
          {
            isSelected: false,
            orderDays: 'Th',
            startTime: '09:00 PM',
            endTime: '10:00 PM',
            programName: 'Rosewood',
            lineNumber: 9,
            spotLength: '30 s',
            orderedSpots: 2,
            spotRate: 1650,
            buyerRating: 2.0,
            lineDollarTotal: 3300,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 1,
                isHiatus: false,
                trafficSpots: 1
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 1,
                isHiatus: false,
                trafficSpots: 1
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          },
          {
            isSelected: false,
            orderDays: 'Su',
            startTime: '07:00 PM',
            endTime: '07:30 PM',
            programName: 'The Simpsons',
            lineNumber: 10,
            spotLength: '30 s',
            orderedSpots: 2,
            spotRate: 2650,
            buyerRating: 3.0,
            lineDollarTotal: 5300,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 1,
                isHiatus: false,
                trafficSpots: 1
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 1,
                isHiatus: false,
                trafficSpots: 1
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          },
          {
            isSelected: false,
            orderDays: 'Su',
            startTime: '08:00 PM',
            endTime: '08:30 PM',
            programName: 'Family Guy',
            lineNumber: 11,
            spotLength: '30 s',
            orderedSpots: 2,
            spotRate: 2300,
            buyerRating: 3.0,
            lineDollarTotal: 4600,
            weeklySpotAllocations: [
              {
                week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 1,
                isHiatus: false,
                trafficSpots: 1
              },
              {
                week: moment().subtract(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(3, 'weeks').weekday(1).format('MM/DD/YY'),
                value: 1,
                isHiatus: false,
                trafficSpots: 1
              },
              {
                week: moment().add(4, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(5, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(6, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(7, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(8, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(9, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              },
              {
                week: moment().add(10, 'weeks').weekday(1).format('MM/DD/YY'),
                value: null,
                isHiatus: false,
                trafficSpots: null
              }
            ]
          }
        ]
      }
    }
  }
</script>
