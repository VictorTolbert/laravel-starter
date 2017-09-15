const moment = require('moment')

module.exports = {
  hidden: true,
  context: {
    preempts: [
      {
        offerId: 12676,
        orderNumber: 131542,
        stationOrderNumber: 876542,
        videaOrderNumber: 131542,
        totalAmountPreempted: 550,
        airDate: moment().subtract(1, 'weeks').weekday(2).format('MM/DD/YY'),
        stationLineNumber: 7,
        altLineNumber: 7,
        stationSpotNumber: 1,
        buyerLineNumber: 4,
        buyerDays: 'Mo-Fr',
        buyerTime: '6-7pm',
        buyerProgramOrdered: 'Network23 News @ 6',
        programPlaced: 'Network23 News This Morning',
        priority: 'P-05',
        statusName: 'Placed',
        airDay: 'Monday',
        length: '30 s',
        preemptReason: '[NA/Oversold]',
        currentStateDescription: '[NA/Oversold]',
        flightStartDate: moment().subtract(2, 'weeks').format('MM/DD/YY'),
        flightEndDate: moment().add(3, 'weeks').format('MM/DD/YY'),
        demo: 'P18-49',
        buyerName: 'Sarah Salinas',
        cpe: 'NEW/GEN/23',
        openMG: '[NA/Oversold]',
        agencyName: 'The Media Masters Group',
        advertiserName: 'Metro Wireless',
        campaignName: 'FY17 Metro Wireless GEN',
        productName: 'CORPORATE',
        estimate: '0016',
        revenue: '5230',
        currentGrpsImps: '',
        purchasedGrpsImps: '',
        difference: '',
        currentHouseholdGrpsImps: '',
        totalPurchasedGrpsImps: '88.3',
        demoName: ' P18-49',
        weeksRemaining: 2,
        programSpotUnitRate: 550,
        airTime: '7:00 AM',
        customerCareNotes: 'MARK kelley\'s note as a test. I also updated the open preempt note via the EOM screen.',
        orderStartDate: '06/27/2016',
        orderEndDate: '12/25/2016',
      },
      {
        offerId: 12674,
        orderNumber: 131542,
        stationOrderNumber: 876542,
        videaOrderNumber: 131542,
        totalAmountPreempted: 550,
        airDate: moment().subtract(1, 'weeks').weekday(4).format('MM/DD/YY'),
        stationLineNumber: 7,
        altLineNumber: 7,
        stationSpotNumber: 1,
        buyerLineNumber: 4,
        buyerDays: 'Mo-Fr',
        buyerTime: '6-7pm',
        buyerProgramOrdered: 'Network23 News @ 6',
        programPlaced: 'Network23 News This Morning',
        priority: 'P-05',
        statusName: 'Placed',
        airDay: 'Monday',
        length: '30 s',
        preemptReason: '[NA/Oversold]',
        currentStateDescription: '[NA/Oversold]',
        flightStartDate: moment().subtract(2, 'weeks').format('MM/DD/YY'),
        flightEndDate: moment().add(3, 'weeks').format('MM/DD/YY'),
        demo: 'P18-49',
        buyerName: 'Sarah Salinas',
        cpe: 'NEW/GEN/23',
        openMG: '[NA/Oversold]',
        agencyName: 'The Media Masters Group',
        advertiserName: 'Metro Wireless',
        campaignName: 'FY17 Metro Wireless GEN',
        productName: 'CORPORATE',
        estimate: '0016',
        revenue: '5230',
        currentGrpsImps: '',
        purchasedGrpsImps: '',
        difference: '',
        currentHouseholdGrpsImps: '',
        totalPurchasedGrpsImps: '88.3',
        demoName: ' P18-49',
        weeksRemaining: 2,
        programSpotUnitRate: 550,
        airTime: '12:00 am',
        customerCareNotes: 'MARK kelley\'s note as a test. I also updated the open preempt note via the EOM screen.',
        orderStartDate: '06/27/2016',
        orderEndDate: '12/25/2016',
      }
    ],
    weeklySpotAllocations: [
      {
        week: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
        value: null,
        isHiatus: false,
        trafficSpots: null
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
  }
}
