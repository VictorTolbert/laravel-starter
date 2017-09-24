const moment = require('moment')

module.exports = [
  {
    id: 135001,
    isVideaArchived: false,
    stationOrderNumber: 876498,
    agencyOrderNumber: 2239987,
    estimate: 57,
    status: 'new',
    type: 'Original',
    currency: 'Cash',
    ordered: '05/18/16',
    demo: 'A25-54',
    advertiser: 'Piedmont Healthcare',
    agency: 'Hughes-Martin Agency',
    buyer: 'Janna Valentine',
    buyerOrderComment: 'THIS ORDER IS MADE UNDER AND IS SUBJECT TO AAAA TERMS AND CONDITIONS FOR LOCAL BROADCAST.  STATION INVOICES TO: SAATCHI & SAATCHI C/O OF RESOURCES 27-01 QUEENS PLAZA NORTH, LONG ISLAND CITY, NY 11101-4020 AS AGENT FOR THE CLIENT MUST INCLUDE REFERENCE NUMBER THE PRICING, BUDGETS, ADVERTISING CREATIVE DELIVERED AND ALL OTHER INFORMATION ALREADY PROVIDED OR TO BE PROVIDED BY/FOR ADVERTISER IN CONNECTION WITH THIS ORDER, WHICH UNDER THE CIRCUMSTANCES SURROUNDING THE DISCLOSURE WOULD BE REASONABLY DEEMED CONFIDENTIAL OR PROPRIETARY SHALL BE DEEMED "AGENCY CONFIDENTIAL INFORMATION." AGENCY CONFIDENTIAL INFORMATION SHALL NOT:(I)BE PUBLISHED PRIOR TO THE DATE AUTHORIZED IN THE ORDER;(II)BE RELEASED:(X)TO ANYONE EXCEPT AN EMPLOYEE, OR AGENT WHO HAS A NEED TO KNOW SAME, AND WHO IS BOUND BY CONFIDENTIALITY OBLIGATIONS; OR (II) FOR ANY PURPOSE OTHER THAN THOSE PROVIDED FOR UNDER THIS ORDER.  PLEASE BOOK PENDING CLIENT APPROVAL  All Invoices to new billing address: Resources 27-01 Queens Plaza North Long Island City, NY 11101-4020 Telephone #: 646-935-4700 *Agent for Saatchi & Saatchi; Agent for Client* All electronic invoices should be sent to Saatchi and Saatchi\'s IDB #155 Order passed validation- please see line comments.  Please approve',
    salesOffice: 'Videa',
    salesOfficeLocation: 'Atlanta',
    salesPerson: 'Brian Reed',
    cpe: 'PHC-HEA-57',
    campaign: 'PIE-HEA-57 Q116',
    product: 'HEA',
    flightStart: '05/15/17',
    flightEnd: '06/25/17',
    updated: moment().subtract(1, 'weeks').format('MM/DD/YY'),
    revenue: 37189,
    lineItems: [],
    preempts: [],
    revenueBy: [
      {
        month: 'May',
        revenue: 13866
      },
      {
        month: 'June',
        revenue: 23323
      }
    ],
    share: 0.31,
    spots: 113,
    spotsOrdered: 95,
    spotsMissed: 0,
    missedValue: null,
    trafficSpots: null,
    dayparts: [
      {
        name: 'Early Morning',
        aur: 413,
        spots: 42,
        revenue: 17160,
        cpp: 211.85,
        rating: 2,
        grps: 81,
        expanded: false,
        shows: [
          {
            name: 'Network 23 6a News',
            aur: 413,
            numberOfSpots: 25,
            revenue: 11425,
            cpp: 190.48,
            expanded: false,
            showTimes: [
              {
                time: 'M-F / 06:00 AM - 07:00 AM',
                expanded: false,
                dates: [
                  {
                    date: '05/15/17',
                    spotLength: ':30',
                    aur: 475,
                    numberOfSpots: 3,
                    revenue: 1425,
                    cpp: 226.19,
                    grps: 6.3
                  },
                  {
                    date: '05/22/17',
                    spotLength: ':30',
                    aur: 475,
                    numberOfSpots: 3,
                    revenue: 1425,
                    cpp: 226.19,
                    grps: 6.3
                  },
                  {
                    date: '05/29/17',
                    spotLength: ':30',
                    aur: 465,
                    numberOfSpots: 3,
                    revenue: 1395,
                    cpp: 221.43,
                    grps: 6.3
                  },
                  {
                    date: '06/05/17',
                    spotLength: ':30',
                    aur: 465,
                    numberOfSpots: 3,
                    revenue: 1395,
                    cpp: 221.43,
                    grps: 6.3
                  },
                  {
                    date: '06/12/17',
                    spotLength: ':30',
                    aur: 400,
                    numberOfSpots: 3,
                    revenue: 1200,
                    cpp: 190.48,
                    grps: 6.3
                  },
                  {
                    date: '06/19/17',
                    spotLength: ':30',
                    aur: 400,
                    numberOfSpots: 3,
                    revenue: 1200,
                    cpp: 190.48,
                    grps: 6.3
                  }
                ]
              }
            ]
          },
          {
            name: 'Network 23 News This Morning',
            aur: 360,
            numberOfSpots: 36,
            revenue: 13744,
            cpp: 200,
            expanded: false,
            showTimes: [
              {
                time: 'M-F / 07:00 AM - 09:00 AM',
                expanded: false,
                dates: [
                  {
                    date: '05/15/17',
                    spotLength: ':30',
                    aur: 390,
                    numberOfSpots: 4,
                    revenue: 1560,
                    cpp: 216.67,
                    grps: 7.2
                  },
                  {
                    date: '05/22/17',
                    spotLength: ':30',
                    aur: 390,
                    numberOfSpots: 4,
                    revenue: 1560,
                    cpp: 216.67,
                    grps: 7.2
                  },
                  {
                    date: '05/29/17',
                    spotLength: ':30',
                    aur: 390,
                    numberOfSpots: 4,
                    revenue: 1560,
                    cpp: 216.67,
                    grps: 7.2
                  },
                  {
                    date: '06/05/17',
                    spotLength: ':30',
                    aur: 390,
                    numberOfSpots: 4,
                    revenue: 1560,
                    cpp: 216.67,
                    grps: 7.2
                  },
                  {
                    date: '06/12/17',
                    spotLength: ':30',
                    aur: 360,
                    numberOfSpots: 4,
                    revenue: 1440,
                    cpp: 200,
                    grps: 7.2
                  },
                  {
                    date: '06/19/17',
                    spotLength: ':30',
                    aur: 360,
                    numberOfSpots: 4,
                    revenue: 1440,
                    cpp: 200,
                    grps: 7.2
                  }
                ]
              }
            ]
          }
        ]
      },
      {
        name: 'Early News',
        aur: 646,
        spots: 26,
        revenue: 16879,
        cpp: 238.4,
        rating: 2.7,
        grps: 70.8,
        expanded: false,
        shows: [
          {
            name: 'Early News @ 5',
            aur: 647,
            numberOfSpots: 10,
            revenue: 6240,
            cpp: 238,
            expanded: false,
            showTimes: [
              {
                time: 'M-F / 05:00 PM - 06:00 PM',
                expanded: false,
                dates: [
                  {
                    date: '11/14/16',
                    spotLength: ':30',
                    aur: 624,
                    numberOfSpots: 2,
                    revenue: 1248,
                    cpp: 240,
                    grps: 5.2
                  },
                  {
                    date: '11/21/16',
                    spotLength: ':30',
                    aur: 624,
                    numberOfSpots: 2,
                    revenue: 1248,
                    cpp: 240,
                    grps: 5.2
                  },
                  {
                    date: '11/28/16',
                    spotLength: ':30',
                    aur: 624,
                    numberOfSpots: 2,
                    revenue: 1248,
                    cpp: 240,
                    grps: 5.2
                  },
                  {
                    date: '12/05/16',
                    spotLength: ':30',
                    aur: 624,
                    numberOfSpots: 2,
                    revenue: 1248,
                    cpp: 240,
                    grps: 5.2
                  },
                  {
                    date: '12/12/16',
                    spotLength: ':30',
                    aur: 624,
                    numberOfSpots: 2,
                    revenue: 1248,
                    cpp: 240,
                    grps: 5.2
                  }
                ]
              }
            ]
          },
          {
            name: 'Network 23 News @ 6',
            aur: 652,
            numberOfSpots: 22,
            revenue: 12595,
            cpp: 241,
            expanded: false,
            showTimes: [
              {
                time: 'M-F / 06:00 PM - 07:00 PM',
                expanded: false,
                dates: [
                  {
                    date: '11/14/16',
                    spotLength: ':30',
                    aur: 675,
                    numberOfSpots: 3,
                    revenue: 2025,
                    cpp: 241,
                    grps: 8.4
                  },
                  {
                    date: '11/21/16',
                    spotLength: ':30',
                    aur: 652,
                    numberOfSpots: 3,
                    revenue: 1956,
                    cpp: 233,
                    grps: 8.4
                  },
                  {
                    date: '11/28/16',
                    spotLength: ':30',
                    aur: 675,
                    numberOfSpots: 3,
                    revenue: 2025,
                    cpp: 241,
                    grps: 8.4
                  },
                  {
                    date: '12/05/16',
                    spotLength: ':30',
                    aur: 652,
                    numberOfSpots: 3,
                    revenue: 1956,
                    cpp: 233,
                    grps: 8.4
                  },
                  {
                    date: '12/12/16',
                    spotLength: ':30',
                    aur: 652,
                    numberOfSpots: 2,
                    revenue: 1304,
                    cpp: 233,
                    grps: 5.6
                  },
                  {
                    date: '12/19/16',
                    spotLength: ':30',
                    aur: 652,
                    numberOfSpots: 2,
                    revenue: 1304,
                    cpp: 233,
                    grps: 5.6
                  }
                ]
              }
            ]
          }
        ]
      },
      {
        name: 'Late Fringe',
        aur: 117,
        spots: 27,
        revenue: 3150,
        cpp: 125,
        rating: 0.9,
        grps: 25.2,
        expanded: false,
        shows: [
          {
            name: 'Seinfeld',
            aur: 125,
            numberOfSpots: 27,
            revenue: 3150,
            cpp: 125,
            expanded: false,
            showTimes: [
              {
                time: 'M-F / 11:00 PM - 11:30 PM',
                expanded: false,
                dates: [
                  {
                    date: '11/14/16',
                    spotLength: ':30',
                    aur: 125,
                    numberOfSpots: 3,
                    revenue: 375,
                    cpp: 125,
                    grps: 3
                  },
                  {
                    date: '11/21/16',
                    spotLength: ':30',
                    aur: 125,
                    numberOfSpots: 3,
                    revenue: 375,
                    cpp: 125,
                    grps: 3
                  },
                  {
                    date: '11/28/16',
                    spotLength: ':30',
                    aur: 125,
                    numberOfSpots: 3,
                    revenue: 375,
                    cpp: 125,
                    grps: 3
                  },
                  {
                    date: '12/05/16',
                    spotLength: ':30',
                    aur: 125,
                    numberOfSpots: 3,
                    revenue: 375,
                    cpp: 125,
                    grps: 3
                  },
                  {
                    date: '12/12/16',
                    spotLength: ':30',
                    aur: 125,
                    numberOfSpots: 3,
                    revenue: 375,
                    cpp: 125,
                    grps: 3
                  },
                  {
                    date: '12/19/16',
                    spotLength: ':30',
                    aur: 125,
                    numberOfSpots: 3,
                    revenue: 375,
                    cpp: 125,
                    grps: 3
                  }
                ]
              },
              {
                time: 'M-F / 11:30 PM - 12:00 AM',
                expanded: false,
                dates: [
                  {
                    date: '11/14/16',
                    spotLength: ':30',
                    aur: 100,
                    numberOfSpots: 3,
                    revenue: 300,
                    cpp: 125,
                    grps: 2.4
                  },
                  {
                    date: '11/21/16',
                    spotLength: ':30',
                    aur: 100,
                    numberOfSpots: 3,
                    revenue: 300,
                    cpp: 125,
                    grps: 2.4
                  },
                  {
                    date: '11/28/16',
                    spotLength: ':30',
                    aur: 100,
                    numberOfSpots: 3,
                    revenue: 300,
                    cpp: 125,
                    grps: 2.4
                  }
                ]
              }
            ]
          },
          {
            name: 'Seinfeld',
            aur: 65,
            numberOfSpots: 6,
            revenue: 390,
            cpp: 130,
            expanded: false,
            showTimes: [
              {
                time: 'Sat / 11:00 PM - 11:30 PM',
                expanded: false,
                dates: [
                  {
                    date: '05/09/16',
                    spotLength: ':30',
                    aur: 65,
                    numberOfSpots: 1,
                    revenue: 65,
                    cpp: 130,
                    grps: 0.5
                  },
                  {
                    date: '05/16/16',
                    spotLength: ':30',
                    aur: 65,
                    numberOfSpots: 1,
                    revenue: 65,
                    cpp: 130,
                    grps: 0.5
                  },
                  {
                    date: '06/06/16',
                    spotLength: ':30',
                    aur: 65,
                    numberOfSpots: 1,
                    revenue: 65,
                    cpp: 130,
                    grps: 0.5
                  },
                  {
                    date: '06/13/16',
                    spotLength: ':30',
                    aur: 65,
                    numberOfSpots: 1,
                    revenue: 65,
                    cpp: 130,
                    grps: 0.5
                  },
                  {
                    date: '06/20/16',
                    spotLength: ':30',
                    aur: 65,
                    numberOfSpots: 1,
                    revenue: 65,
                    cpp: 130,
                    grps: 0.5
                  }
                ]
              }
            ]
          }
        ]
      }
    ],
    expanded: false,
    versions: [
      {
        id: 1,
        dateSubmitted: '',
        timeSubmitted: '',
        submittedBy: '',
        programs: [
          {
            name: 'Network 23 6a News',
            time: 'M-F / 06:00 AM — 07:00 AM',
            length: ':30',
            flightStart: '05/15/17',
            flightEnd: '05/26/17',
            rate: 475,
            weeklySpots: 3,
            weekdayCounts: [
              0,
              1,
              0,
              1,
              0,
              0,
              0
            ],
            weekdays: [
              {
                monday: 0
              },
              {
                tuesday: 1
              },
              {
                wednesday: 0
              },
              {
                thursday: 1
              },
              {
                friday: 0
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 2,
            totalSpots: 6,
            totalCost: 2850,
            buyerRating: 2.1,
            videaRating: 2.1,
            totalRatings: 12.6
          },
          {
            name: 'Network 23 6a News',
            time: 'M-F / 06:00 AM — 07:00 AM',
            length: ':30',
            flightStart: '05/22/17',
            flightEnd: '06/09/17',
            rate: 465,
            weeklySpots: 3,
            weekdayCounts: [
              1,
              0,
              1,
              0,
              1,
              0,
              0
            ],
            weekdays: [
              {
                monday: 1
              },
              {
                tuesday: 0
              },
              {
                wednesday: 1
              },
              {
                thursday: 0
              },
              {
                friday: 1
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 2,
            totalSpots: 6,
            totalCost: 2790,
            buyerRating: 2.1,
            videaRating: 2.1,
            totalRatings: 12.6
          },
          {
            name: 'Network 23 6a News',
            time: 'M-F / 06:00 AM — 07:00 AM',
            length: ':30',
            flightStart: '06/12/17',
            flightEnd: '06/23/17',
            rate: 400,
            weeklySpots: 3,
            weekdayCounts: [
              1,
              0,
              1,
              0,
              1,
              0,
              0
            ],
            weekdays: [
              {
                monday: 1
              },
              {
                tuesday: 0
              },
              {
                wednesday: 1
              },
              {
                thursday: 0
              },
              {
                friday: 1
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 2,
            totalSpots: 6,
            totalCost: 2400,
            buyerRating: 2.1,
            videaRating: 2.1,
            totalRatings: 12.6
          },
          {
            name: 'Network 23 News This Morning',
            time: 'M-F / 07:00 AM — 08:00 AM',
            length: ':30',
            flightStart: '06/12/17',
            flightEnd: '06/23/17',
            rate: 360,
            weeklySpots: 4,
            weekdayCounts: [
              1,
              1,
              1,
              1,
              0,
              0,
              0
            ],
            weekdays: [
              {
                monday: 1
              },
              {
                tuesday: 1
              },
              {
                wednesday: 1
              },
              {
                thursday: 1
              },
              {
                friday: 0
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 2,
            totalSpots: 8,
            totalCost: 2880,
            buyerRating: 1.8,
            videaRating: 2,
            totalRatings: 14.4
          },
          {
            name: 'Network 23 News This Morning',
            time: 'M-F / 07:00 AM — 08:00 AM',
            length: ':30',
            flightStart: '05/15/17',
            flightEnd: '06/09/17',
            rate: 390,
            weeklySpots: 4,
            weekdayCounts: [
              0,
              1,
              1,
              1,
              1,
              0,
              0
            ],
            weekdays: [
              {
                monday: 0
              },
              {
                tuesday: 1
              },
              {
                wednesday: 1
              },
              {
                thursday: 1
              },
              {
                friday: 1
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 4,
            totalSpots: 16,
            totalCost: 6240,
            buyerRating: 1.8,
            videaRating: 2,
            totalRatings: 28.8
          },
          {
            name: 'Network 23 News @ 5',
            time: 'M-F / 05:00 PM — 06:00 PM',
            length: ':30',
            flightStart: '05/15/17',
            flightEnd: '06/16/17',
            rate: 624,
            weeklySpots: 2,
            weekdayCounts: [
              0,
              1,
              0,
              1,
              0,
              0,
              0
            ],
            weekdays: [
              {
                monday: 0
              },
              {
                tuesday: 1
              },
              {
                wednesday: 0
              },
              {
                thursday: 1
              },
              {
                friday: 0
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 5,
            totalSpots: 10,
            totalCost: 6240,
            buyerRating: 2.6,
            videaRating: 2.9,
            totalRatings: 26
          },
          {
            name: 'Network 23 News @ 6',
            time: 'M-F / 06:00 PM — 07:00 PM',
            length: ':30',
            flightStart: '05/15/17',
            flightEnd: '06/02/17',
            rate: 652,
            weeklySpots: 2,
            weekdayCounts: [
              0,
              1,
              0,
              1,
              0,
              0,
              0
            ],
            weekdays: [
              {
                monday: 0
              },
              {
                tuesday: 1
              },
              {
                wednesday: 0
              },
              {
                thursday: 1
              },
              {
                friday: 0
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 2,
            totalSpots: 4,
            totalCost: 2608,
            buyerRating: 2.8,
            videaRating: 2.8,
            totalRatings: 11.2
          },
          {
            name: 'Network 23 News @ 6',
            time: 'M-F / 06:00 PM — 07:00 PM',
            length: ':30',
            flightStart: '06/05/17',
            flightEnd: '06/09/17',
            rate: 652,
            weeklySpots: 3,
            weekdayCounts: [
              0,
              1,
              1,
              1,
              0,
              0,
              0
            ],
            weekdays: [
              {
                monday: 0
              },
              {
                tuesday: 1
              },
              {
                wednesday: 1
              },
              {
                thursday: 1
              },
              {
                friday: 0
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 1,
            totalSpots: 3,
            totalCost: 1956,
            buyerRating: 2.8,
            videaRating: 2.8,
            totalRatings: 8.4
          },
          {
            name: 'Network 23 News @ 6',
            time: 'M-F / 06:00 PM — 07:00 PM',
            length: ':30',
            flightStart: '06/12/17',
            flightEnd: '06/23/17',
            rate: 675,
            weeklySpots: 3,
            weekdayCounts: [
              1,
              0,
              1,
              0,
              1,
              0,
              0
            ],
            weekdays: [
              {
                monday: 1
              },
              {
                tuesday: 0
              },
              {
                wednesday: 1
              },
              {
                thursday: 0
              },
              {
                friday: 1
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 3,
            totalSpots: 9,
            totalCost: 6075,
            buyerRating: 2.8,
            videaRating: 2.8,
            totalRatings: 25.2
          },
          {
            name: 'Seinfeld',
            time: 'M-F / 11:00 PM — 11:30 PM',
            length: ':30',
            flightStart: '05/15/17',
            flightEnd: '05/15/17',
            rate: 125,
            weeklySpots: 3,
            weekdayCounts: [
              1,
              0,
              1,
              1,
              1,
              0,
              0
            ],
            weekdays: [
              {
                monday: 1
              },
              {
                tuesday: 0
              },
              {
                wednesday: 1
              },
              {
                thursday: 1
              },
              {
                friday: 1
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 6,
            totalSpots: 18,
            totalCost: 2250,
            buyerRating: 1,
            videaRating: 1,
            totalRatings: 18
          },
          {
            name: 'Seinfeld',
            time: 'M-F / 11:30 PM — 12:00 AM',
            length: ':30',
            flightStart: '05/15/17',
            flightEnd: '06/02/17',
            rate: 100,
            weeklySpots: 3,
            weekdayCounts: [
              1,
              0,
              1,
              0,
              1,
              0,
              0
            ],
            weekdays: [
              {
                monday: 1
              },
              {
                tuesday: 0
              },
              {
                wednesday: 1
              },
              {
                thursday: 0
              },
              {
                friday: 1
              },
              {
                saturday: 0
              },
              {
                sunday: 0
              }
            ],
            weeks: 3,
            totalSpots: 9,
            totalCost: 900,
            buyerRating: 0.8,
            videaRating: 1,
            totalRatings: 7.2
          }
        ]
      }
    ],
    offers: [
      {
        id: 12676,
        orderId: 131542,
        stationOrderNumber: 154703,
        flightStart: '01/09/17',
        flightEnd: '02/12/17',
        overdue: true,
        product: '',
        estimate: 57,
        primaryDemo: 'A25-54',
        totalRevenue: 12345,
        totalGrps: 123,
        totalSpots: 100,
        buyerName: 'John Doe',
        repName: 'Jane Doe',
        dealType: 'Cash',
        version: 1,
        scheduleType: 'Weekly',
        makegoodTotal: 1100,
        makegoodNumber: 12676,
        dateMakegoodSent: '05/23/16',
        dateTimeOfferDue: '05/25/16',
        stationAction: 'Accept/Reject',
        offerType: 'Makegood',
        offerStatus: 'pending',
        agencyOrderNumber: 56789,
        acceptedByAgency: 'pending',
        agencyNotes: '',
        acceptedByStation: 'pending',
        stationNotes: '',
        agency: 'The Media Masters Group',
        advertiser: 'Metro Wireless',
        campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
        cpe: 'MEW-GEN-23',
        videaOrderDetail: 'V00012543',
        videaOrderNumber: 131542,
        preempts: [
          {
            buyLine: 4,
            spotNumber: 1,
            programPlaced: 'Network 23 News @ 5',
            status: 'confirmed',
            priority: 1,
            airDay: 'Tuesday',
            airDate: '01/10/17',
            airTime: '05:00 PM',
            spotLength: ':30',
            spotRate: 550,
            buyerRating: 1.8,
            comment: 'Technical Difficulties'
          },
          {
            buyLine: 6,
            spotNumber: 1,
            programPlaced: 'Network 23 News @ 5',
            status: 'confirmed',
            priority: 1,
            airDay: 'Thursday',
            airDate: '01/12/17',
            airTime: '05:00 PM',
            spotLength: ':30',
            spotRate: 550,
            buyerRating: 1.8,
            comment: 'Weather'
          }
        ],
        makegoods: [
          {
            lineNumber: 1,
            program: 'Network 23 News @ 5',
            startTime: '05:00 PM',
            endTime: '06:00 PM',
            days: 'M-F',
            spotLength: ':30',
            offeredSpots: 2,
            spotRate: 550,
            stationRating: 1.8,
            comment: ''
          }
        ]
      },
      {
        id: 12389,
        orderId: 131642,
        stationOrderNumber: 178269,
        flightStart: '01/09/17',
        flightEnd: '02/19/17',
        overdue: false,
        product: '',
        estimate: 57,
        primaryDemo: 'A25-54',
        totalRevenue: 12345,
        totalGrps: 123,
        totalSpots: 100,
        buyerName: 'John Doe',
        repName: 'Jane Doe',
        dealType: 'Cash',
        version: 1,
        scheduleType: 'Weekly',
        makegoodTotal: 300,
        makegoodNumber: 12389,
        dateMakegoodSent: '11/22/16',
        dateTimeOfferDue: '11/24/16',
        stationAction: 'Accept/Reject',
        offerType: 'Makegood',
        offerStatus: 'pending',
        agencyOrderNumber: 56789,
        acceptedByAgency: 'confirmed',
        agencyNotes: '',
        acceptedByStation: 'pending',
        stationNotes: '',
        agency: 'Auto Advertising Partners',
        advertiser: 'Southeast Ford',
        campaignName: 'WASHI WVVV FSE-END-22 Q1 17',
        cpe: 'FSE-END-22',
        videaOrderDetail: 'V00012321',
        videaOrderNumber: 131642
      },
      {
        id: 12674,
        orderId: 131542,
        stationOrderNumber: 154703,
        flightStart: '01/09/17',
        flightEnd: '02/12/17',
        overdue: false,
        product: '',
        estimate: 57,
        primaryDemo: 'A25-54',
        totalRevenue: 12345,
        totalGrps: 123,
        totalSpots: 100,
        buyerName: 'John Doe',
        repName: 'Jane Doe',
        dealType: 'Cash',
        version: 1,
        scheduleType: 'Weekly',
        makegoodTotal: 0,
        makegoodNumber: 12674,
        dateMakegoodSent: '11/09/16',
        dateTimeOfferDue: '11/11/16',
        stationAction: 'N/A',
        offerType: 'Bonus',
        offerStatus: 'confirmed',
        agencyOrderNumber: 56789,
        acceptedByAgency: 'confirmed',
        agencyNotes: '',
        acceptedByStation: 'confirmed',
        stationNotes: '',
        agency: 'The Media Masters Group',
        advertiser: 'Metro Wireless',
        campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
        cpe: 'MEW-GEN-23',
        videaOrderDetail: 'V00012543',
        videaOrderNumber: 131542
      },
      {
        id: 12375,
        orderId: 133529,
        stationOrderNumber: 193847,
        flightStart: '12/26/16',
        flightEnd: '01/29/17',
        overdue: false,
        product: '',
        estimate: 57,
        primaryDemo: 'A25-54',
        totalRevenue: 12345,
        totalGrps: 123,
        totalSpots: 100,
        buyerName: 'John Doe',
        repName: 'Jane Doe',
        dealType: 'Cash',
        version: 1,
        scheduleType: 'Weekly',
        makegoodTotal: 2500,
        makegoodNumber: 12375,
        dateMakegoodSent: '10/31/16',
        dateTimeOfferDue: '11/02/16',
        stationAction: 'N/A',
        offerType: 'Program Change',
        offerStatus: 'confirmed',
        agencyOrderNumber: 56789,
        acceptedByAgency: 'confirmed',
        agencyNotes: '',
        acceptedByStation: 'confirmed',
        stationNotes: '',
        agency: 'Zone Group Advertising',
        advertiser: 'Papa John’s Pizza',
        campaignName: 'WASHI WVVV PJP-HOL-8 Q1 17',
        cpe: 'PJP-HOL-8',
        videaOrderDetail: 'V00012341',
        videaOrderNumber: 133529
      }
    ]
  },
  {
    id: 131542,
    isVideaArchived: false,
    stationOrderNumber: 876542,
    agencyOrderNumber: 4119683,
    estimate: 23,
    status: 'accepted',
    type: 'Original',
    currency: 'Cash',
    ordered: '10/01/16',
    demo: 'A18-49',
    advertiser: 'Metro Wireless',
    agency: 'The Media Masters Group',
    buyer: 'Sarah Salinas',
    buyerOrderComment: '20 minutes separation.',
    salesOffice: 'Videa',
    salesOfficeLocation: 'Atlanta',
    salesPerson: 'Jessica Bond',
    cpe: 'MEW-GEN-23',
    campaign: 'Q1`16 DI',
    product: 'GEN',
    flightStart: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
    flightEnd: moment().add(3, 'weeks').weekday(7).format('MM/DD/YY'),
    updated: moment().subtract(2, 'weeks').format('MM/DD/YY'),
    revenue: 41000,
    lineItems: [
      {
        lineNumber: 1,
        isExpanded: false,
        days: 'MO-FR',
        time: '7-8am',
        program: 'Network23 News This Morning',
        length: '30 s',
        orderSpots: 12,
        openPreempts: null,
        trafficSpots: 12,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:21 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().subtract(2, 'weeks').weekday(1).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().subtract(2, 'weeks').weekday(3).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().subtract(2, 'weeks').weekday(4).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().subtract(1, 'weeks').weekday(2).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().subtract(1, 'weeks').weekday(5).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().subtract(1, 'weeks').weekday(3).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().add(1, 'weeks').weekday(1).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().add(1, 'weeks').weekday(2).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().add(1, 'weeks').weekday(5).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().add(3, 'weeks').weekday(4).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().add(3, 'weeks').weekday(3).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: moment().add(3, 'weeks').weekday(5).format('MM/DD/YY'),
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '01/23/2017',
        endDate: '03/03/2017',
        weeks: [
          null,
          null,
          null,
          null,
          null,
          null
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
        ],
        spotRate: 350,
        buyerRtg: 1.5,
        videaRtg: 1.7,
        lineNumberTotal: 4200,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      },
      {
        lineNumber: 2,
        isExpanded: false,
        days: 'MO-FR',
        time: '8-9am',
        program: 'Network23 News This Morning',
        length: '30 s',
        orderSpots: 6,
        openPreempts: null,
        trafficSpots: 6,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '02/06/2017',
        endDate: '02/17/2017',
        weeks: [
          null,
          null,
          null,
          null,
          null,
          null
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
        ],
        spotRate: 350,
        buyerRtg: 1.7,
        videaRtg: 1.7,
        lineNumberTotal: 2100,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      },
      {
        lineNumber: 3,
        isExpanded: false,
        days: 'MO-FR',
        time: '5-6pm',
        program: 'Network23 News @ 5',
        length: '30 s',
        orderSpots: 6,
        openPreempts: null,
        trafficSpots: 6,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '01/23/2017',
        endDate: '02/10/2017',
        weeks: [
          null,
          null,
          null,
          null,
          null,
          null
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
        ],
        spotRate: 550,
        buyerRtg: 1.8,
        videaRtg: 1.8,
        lineNumberTotal: 3300,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      },
      {
        lineNumber: 4,
        isExpanded: false,
        days: 'MO-FR',
        time: '6-7pm',
        program: 'Network23 News @ 6',
        length: '30 s',
        orderSpots: 6,
        openPreempts: 2,
        trafficSpots: 4,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null,
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
                trafficSpots: 0
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
                trafficSpots: 0
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
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '02/13/2017',
        endDate: '03/03/2017',
        weeks: [
          null,
          2,
          null,
          2,
          null,
          2
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
            trafficSpots: 0
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
            trafficSpots: 0
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
        ],
        spotRate: 550,
        buyerRtg: 2.0,
        videaRtg: 2.2,
        lineNumberTotal: 3300,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      },
      {
        lineNumber: 5,
        isExpanded: false,
        days: 'MO-FR',
        time: '9-10pm',
        program: 'Network23 News @ 9',
        length: '30 s',
        orderSpots: 6,
        openPreempts: null,
        trafficSpots: 6,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '02/06/2017',
        endDate: '03/03/2017',
        weeks: [
          null,
          null,
          null,
          null,
          null,
          null
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
        ],
        spotRate: 1400,
        buyerRtg: 3.0,
        videaRtg: 3.0,
        lineNumberTotal: 8400,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      },
      {
        lineNumber: 6,
        isExpanded: false,
        days: 'MO-FR',
        time: '11-11:30pm',
        program: 'Seinfeld',
        length: '30 s',
        orderSpots: 6,
        openPreempts: null,
        trafficSpots: 6,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '01/23/2017',
        endDate: '02/10/2017',
        weeks: [
          null,
          null,
          null,
          null,
          null,
          null
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
        ],
        spotRate: 200,
        buyerRtg: 1.1,
        videaRtg: 1.2,
        lineNumberTotal: 1200,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      },
      {
        lineNumber: 7,
        isExpanded: false,
        days: 'MO-FR',
        time: '12-12:30am',
        program: 'Anger Management',
        length: '30 s',
        orderSpots: 3,
        openPreempts: null,
        trafficSpots: 3,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '01/23/2017',
        endDate: '01/27/2017',
        weeks: [
          null,
          null,
          null,
          null,
          null,
          null
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
        ],
        spotRate: 100,
        buyerRtg: 0.7,
        videaRtg: 0.7,
        lineNumberTotal: 300,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      },
      {
        lineNumber: 8,
        isExpanded: false,
        days: 'Mo',
        time: '8-9pm',
        program: 'Gotham',
        length: '30 s',
        orderSpots: 2,
        openPreempts: null,
        trafficSpots: 2,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '02/06/2017',
        endDate: '02/13/2017',
        weeks: [
          null,
          null,
          null,
          null,
          null,
          null
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
        ],
        spotRate: 2500,
        buyerRtg: 3.0,
        videaRtg: 3.3,
        lineNumberTotal: 5000,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      },
      {
        lineNumber: 9,
        isExpanded: false,
        days: 'Th',
        time: '9-10am',
        program: 'Rosewood',
        length: '30 s',
        orderSpots: 2,
        openPreempts: null,
        trafficSpots: 2,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '01/26/2017',
        endDate: '03/02/2017',
        weeks: [
          null,
          null,
          null,
          null,
          null,
          null
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
        ],
        spotRate: 1650,
        buyerRtg: 2.0,
        videaRtg: 2.0,
        lineNumberTotal: 3300,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      },
      {
        lineNumber: 10,
        isExpanded: false,
        days: 'Su',
        time: '7-7:30am',
        program: 'The Simpsons',
        length: '30 s',
        orderSpots: 2,
        openPreempts: null,
        trafficSpots: 2,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '02/12/2017',
        endDate: '02/16/2017',
        weeks: [
          null,
          null,
          null,
          null,
          null,
          null
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
        ],
        spotRate: 2650,
        buyerRtg: 3.0,
        videaRtg: 3.2,
        lineNumberTotal: 5300,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      },
      {
        lineNumber: 11,
        isExpanded: false,
        days: 'Su',
        time: '8-8:30am',
        program: 'Family Guy',
        length: '30 s',
        orderSpots: 2,
        openPreempts: null,
        trafficSpots: 2,
        trafficLogs: [
          {
            airedStatus: null,
            spotNumber: 1,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 2,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 3,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 4,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 5,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 6,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 7,
            airDay: 'Monday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 8,
            airDay: 'Tuesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 9,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 10,
            airDay: 'Thursday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 11,
            airDay: 'Wednesday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          },
          {
            airedStatus: null,
            spotNumber: 12,
            airDay: 'Friday',
            airTime: '7:00 AM',
            programPlaced: 'Network23 News This Morning',
            priority: 'P-05',
            statusName: 'Placed',
            airDate: null,
            stationLineNumber: 1,
            altLineNumber: 1,
            makegoodNumber: null
          }
        ],
        agencyInvoiceDetails: [
          {
            isciAdId: null,
            stationInvoiceDate: null,
            stationInvoiceAmount: null,
            stationInvoiceNumber: null,
            makegoodNumber: null
          }
        ],
        makegoods: [
          {
            makegoodStatus: null,
            makegoodApplied: null,
            makegoodNewLines: null
          }
        ],
        currentInformation: null,
        startDate: '01/26/2017',
        endDate: '03/02/2017',
        weeks: [
          null,
          null,
          null,
          null,
          null,
          null
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
        ],
        spotRate: 2300,
        buyerRtg: 3.0,
        videaRtg: 3.2,
        lineNumberTotal: 4600,
        buyerComment: null,
        videaToStationComments: null,
        spotOption: null,
        lineType: 'Original'
      }
    ],
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
        airDay: 'Tuesday',
        length: '30 s',
        preemptReason: '[NA/Oversold]',
        currentStateDescription: '[NA/Oversold]',
        flightStart: moment().subtract(2, 'weeks').format('MM/DD/YY'),
        flightEnd: moment().add(3, 'weeks').format('MM/DD/YY'),
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
        buyerRating: 2.0,
        airTime: '6-7pm',
        customerCareNotes: 'MARK kelley\'s note as a test. I also updated the open preempt note via the EOM screen.',
        orderStartDate: '06/27/2016',
        orderEndDate: '12/25/2016',
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
        stationSpotNumber: 2,
        buyerLineNumber: 4,
        buyerDays: 'Mo-Fr',
        buyerTime: '6-7pm',
        buyerProgramOrdered: 'Network23 News @ 6',
        programPlaced: 'Network23 News This Morning',
        priority: 'P-05',
        statusName: 'Placed',
        airDay: 'Thursday',
        length: '30 s',
        preemptReason: '[NA/Oversold]',
        currentStateDescription: '[NA/Oversold]',
        flightStart: moment().subtract(2, 'weeks').format('MM/DD/YY'),
        flightEnd: moment().add(3, 'weeks').format('MM/DD/YY'),
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
        buyerRating: 2.0,
        airTime: '6-7pm',
        customerCareNotes: 'MARK kelley\'s note as a test. I also updated the open preempt note via the EOM screen.',
        orderStartDate: '06/27/2016',
        orderEndDate: '12/25/2016',
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
    ],
    revenueBy: [
    {
      month: 'Feb',
      revenue: 16400
    },
    {
      month: 'Mar',
      revenue: 24600
    }],
    share: 0.46,
    spots: 53,
    spotsOrdered: 55,
    spotsMissed: 2,
    missedValue: 1100,
    trafficSpots: 53,
    dayparts: [
    {
      name: 'Early Morning',
      aur: 350,
      spots: 18,
      revenue: 6300,
      cpp: 223,
      rating: 1.2,
      grps: 28.2,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News This Morning',
        aur: 350,
        numberOfSpots: 18,
        revenue: 6300,
        cpp: 223,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 07:00 AM - 08:00 AM',
          expanded: false,
          dates: [
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 350,
            numberOfSpots: 3,
            revenue: 1050,
            cpp: 233,
            grps: 4.5
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 350,
            numberOfSpots: 3,
            revenue: 1050,
            cpp: 233,
            grps: 4.5
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 350,
            numberOfSpots: 3,
            revenue: 1050,
            cpp: 233,
            grps: 4.5
          },
          {
            date: '03/21/16',
            spotLength: ':30',
            aur: 350,
            numberOfSpots: 3,
            revenue: 1050,
            cpp: 233,
            grps: 4.5
          }]
        },
        {
          time: 'M-F / 08:00 AM - 09:00 AM',
          expanded: false,
          dates: [
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 350,
            numberOfSpots: 3,
            revenue: 1050,
            cpp: 206,
            grps: 5.1
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 350,
            numberOfSpots: 3,
            revenue: 1050,
            cpp: 206,
            grps: 5.1
          }]
        }]
      }]
    },
    {
      name: 'Early News',
      aur: 550,
      spots: 12,
      revenue: 6600,
      cpp: 289,
      rating: 1.2,
      grps: 22.8,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News @ 5',
        aur: 550,
        numberOfSpots: 6,
        revenue: 3300,
        cpp: 306,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 05:00 PM - 06:00 PM',
          expanded: false,
          dates: [
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 550,
            numberOfSpots: 3,
            revenue: 1650,
            cpp: 306,
            grps: 5.4
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 550,
            numberOfSpots: 3,
            revenue: 1650,
            cpp: 306,
            grps: 5.4
          }]
        }]
      },
      {
        name: 'Network 23 News @ 6',
        aur: 550,
        numberOfSpots: 6,
        revenue: 3300,
        cpp: 275,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 06:00 PM - 07:00 PM',
          expanded: false,
          dates: [
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 550,
            numberOfSpots: 3,
            revenue: 1650,
            cpp: 275,
            grps: 6
          },
          {
            date: '03/21/16',
            spotLength: ':30',
            aur: 550,
            numberOfSpots: 3,
            revenue: 1650,
            cpp: 275,
            grps: 6
          }]
        }]
      }]
    },
    {
      name: 'Prime',
      aur: 2275,
      spots: 8,
      revenue: 18200,
      cpp: 827,
      rating: 2.8,
      grps: 22,
      expanded: false,
      shows: [
      {
        name: 'Gotham',
        aur: 2500,
        numberOfSpots: 2,
        revenue: 5000,
        cpp: 833,
        expanded: false,
        showTimes: [
        {
          time: 'M / 8:00 PM - 9:00 PM',
          expanded: false,
          dates: [
          {
            date: '02/29/16',
            spotLength: ':30',
            aur: 2500,
            numberOfSpots: 1,
            revenue: 2500,
            cpp: 833,
            grps: 3
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 2500,
            numberOfSpots: 1,
            revenue: 2500,
            cpp: 833,
            grps: 3
          }]
        }]
      },
      {
        name: 'Sleepy Hollow',
        aur: 1650,
        numberOfSpots: 2,
        revenue: 3300,
        cpp: 825,
        expanded: false,
        showTimes: [
        {
          time: 'Thu / 9:00 PM - 10:00 PM',
          expanded: false,
          dates: [
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 1650,
            numberOfSpots: 1,
            revenue: 1650,
            cpp: 825,
            grps: 2
          },
          {
            date: '03/21/16',
            spotLength: ':30',
            aur: 1650,
            numberOfSpots: 1,
            revenue: 1650,
            cpp: 825,
            grps: 2
          }]
        }]
      },
      {
        name: 'The Simpsons',
        aur: 2650,
        numberOfSpots: 2,
        revenue: 5300,
        cpp: 883,
        expanded: false,
        showTimes: [
        {
          time: 'Sun / 7:00 PM - 7:30 PM',
          expanded: false,
          dates: [
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 2650,
            numberOfSpots: 1,
            revenue: 2650,
            cpp: 883,
            grps: 3
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 2650,
            numberOfSpots: 1,
            revenue: 2650,
            cpp: 883,
            grps: 3
          }]
        }]
      },
      {
        name: 'Family Guy',
        aur: 2300,
        numberOfSpots: 2,
        revenue: 4600,
        cpp: 767,
        expanded: false,
        showTimes: [
        {
          time: 'Sun / 8:00 PM - 8:30 PM',
          expanded: false,
          dates: [
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 2300,
            numberOfSpots: 1,
            revenue: 2300,
            cpp: 767,
            grps: 3
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 2300,
            numberOfSpots: 1,
            revenue: 2300,
            cpp: 767,
            grps: 3
          }]
        }]
      }]
    },
    {
      name: 'Late News',
      aur: 1050,
      spots: 8,
      revenue: 8400,
      cpp: 467,
      rating: 1.2,
      grps: 18,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News@9',
        aur: 1050,
        numberOfSpots: 8,
        revenue: 8400,
        cpp: 467,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 09:00 PM - 10:00 PM',
          expanded: false,
          dates: [
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 1400,
            numberOfSpots: 2,
            revenue: 2800,
            cpp: 467,
            grps: 6
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 1400,
            numberOfSpots: 2,
            revenue: 2800,
            cpp: 467,
            grps: 6
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 1400,
            numberOfSpots: 2,
            revenue: 2800,
            cpp: 467,
            grps: 6
          },
          {
            date: '03/21/16',
            spotLength: ':30',
            aur: 1400,
            numberOfSpots: 2,
            revenue: 2800,
            cpp: 467,
            grps: 6
          }]
        }]
      }]
    },
    {
      name: 'Late Fringe',
      aur: 167,
      spots: 9,
      revenue: 1500,
      cpp: 172,
      rating: 1.2,
      grps: 8.7,
      expanded: false,
      shows: [
      {
        name: 'Seinfeld',
        aur: 200,
        numberOfSpots: 6,
        revenue: 1200,
        cpp: 182,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 11:00 PM - 11:30 PM',
          expanded: false,
          dates: [
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 200,
            numberOfSpots: 6,
            revenue: 1200,
            cpp: 182,
            grps: 3.3
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 200,
            numberOfSpots: 3,
            revenue: 600,
            cpp: 182,
            grps: 3.3
          }]
        }]
      },
      {
        name: 'Anger Management',
        expanded: false,
        aur: 100,
        numberOfSpots: 3,
        revenue: 300,
        cpp: 143,
        showTimes: [
        {
          time: 'M-F / 12:00 PM - 12:30 PM',
          expanded: false,
          dates: [
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 100,
            numberOfSpots: 3,
            revenue: 300,
            cpp: 143,
            grps: 2.1
          }]
        }]
      }]
    }],
    expanded: false,
    versions: [
    {
      id: 1,
      dateSubmitted: '',
      timeSubmitted: '',
      submittedBy: '',
      programs: [
      {
        name: 'Network 23 News This Morning',
        time: '07:00 AM — 08:00 AM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/08/16',
        rate: 350,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 12,
        totalCost: 4200,
        buyerRating: 1.5,
        videaRating: 1.7,
        totalRatings: 18
      },
      {
        name: 'Network 23 News This Morning',
        time: '08:00 AM — 09:00 AM ',
        length: ':30',
        flightStart: '04/11/16',
        flightEnd: '05/06/16',
        rate: 350,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 6,
        totalCost: 2100,
        buyerRating: 1.7,
        videaRating: 1.7,
        totalRatings: 10.2
      },
      {
        name: 'Network 23 News @ 5',
        time: '05:00 PM — 06:00 PM ',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/15/16',
        rate: 550,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          1,
          1,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 6,
        totalCost: 3300,
        buyerRating: 1.8,
        videaRating: 1.8,
        totalRatings: 10.8
      },
      {
        name: 'Network 23 News @ 6',
        time: '06:00 PM — 07:00 PM ',
        length: ':30',
        flightStart: '05/02/16',
        flightEnd: '04/08/16',
        rate: 550,
        weeklySpots: 3,
        weekdayCounts: [
          0,
          0,
          1,
          1,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 6,
        totalCost: 3300,
        buyerRating: 2,
        videaRating: 2.2,
        totalRatings: 12
      },
      {
        name: 'Network 23 News @ 9',
        time: '09:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/08/16',
        rate: 1400,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 6,
        totalCost: 8400,
        buyerRating: 3,
        videaRating: 3,
        totalRatings: 18
      },
      {
        name: 'Seinfeld',
        time: '11:00 PM — 11:30 PM ',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/15/16',
        rate: 200,
        weeklySpots: 3,
        weekdayCounts: [
          0,
          1,
          1,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 6,
        totalCost: 1200,
        buyerRating: 1.1,
        videaRating: 1.1,
        totalRatings: 6.6
      },
      {
        name: 'Anger Management',
        time: '12:00 PM — 12:30 PM',
        length: ':30',
        flightStart: '05/02/16',
        flightEnd: '05/06/16',
        rate: 100,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 3,
        totalCost: 300,
        buyerRating: 0.7,
        videaRating: 0.9,
        totalRatings: 2.1
      },
      {
        name: 'Gotham',
        time: '08:00 PM — 09:00 PM ',
        length: ':30',
        flightStart: '04/18/16',
        flightEnd: '04/25/16',
        rate: 2500,
        weeklySpots: 1,
        weekdayCounts: [
          1,
          0,
          0,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 2,
        totalCost: 5000,
        buyerRating: 3,
        videaRating: 3.4,
        totalRatings: 6
      },
      {
        name: 'Sleepy Hollow',
        time: '09:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '05/05/16',
        flightEnd: '05/12/16',
        rate: 1650,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 2,
        totalCost: 3300,
        buyerRating: 2,
        videaRating: 2,
        totalRatings: 4
      },
      {
        name: 'The Simpsons',
        time: '07:00 PM — 07:30 PM',
        length: ':30',
        flightStart: '04/10/16',
        flightEnd: '04/17/16',
        rate: 2650,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          0,
          0,
          1
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 1
        }],
        weeks: 2,
        totalSpots: 2,
        totalCost: 5300,
        buyerRating: 3,
        videaRating: 3.3,
        totalRatings: 6
      },
      {
        name: 'Family Guy',
        time: '08:00 PM — 08:30 PM',
        length: ':30',
        flightStart: '04/17/16',
        flightEnd: '04/17/16',
        rate: 2300,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          0,
          0,
          1
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 1
        }],
        weeks: 1,
        totalSpots: 1,
        totalCost: 2300,
        buyerRating: 3,
        videaRating: 3,
        totalRatings: 3
      },
      {
        name: 'Family Guy',
        time: '08:00 PM — 08:30 PM',
        length: ':30',
        flightStart: '05/08/16',
        flightEnd: '05/08/16',
        rate: 2300,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          0,
          0,
          1
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 1
        }],
        weeks: 1,
        totalSpots: 1,
        totalCost: 2300,
        buyerRating: 3,
        videaRating: 3,
        totalRatings: 3
      }]
    }],
    offers: [
    {
      id: 12676,
      orderId: 131542,
      stationOrderNumber: 154703,
      flightStart: '01/09/17',
      flightEnd: '02/12/17',
      overdue: true,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 1100,
      makegoodNumber: 12676,
      dateMakegoodSent: '05/23/16',
      dateTimeOfferDue: '05/25/16',
      stationAction: 'Accept/Reject',
      offerType: 'Makegood',
      offerStatus: 'pending',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'pending',
      agencyNotes: '',
      acceptedByStation: 'pending',
      stationNotes: '',
      agency: 'The Media Masters Group',
      advertiser: 'Metro Wireless',
      campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
      cpe: 'MEW-GEN-23',
      videaOrderDetail: 'V00012543',
      videaOrderNumber: 131542,
      preempts: [
      {
        buyLine: 4,
        spotNumber: 1,
        programPlaced: 'Network 23 News @ 5',
        status: 'confirmed',
        priority: 1,
        airDay: 'Tuesday',
        airDate: '01/10/17',
        airTime: '05:00 PM',
        spotLength: ':30',
        spotRate: 550,
        buyerRating: 1.8,
        comment: 'Technical Difficulties'
      },
      {
        buyLine: 6,
        spotNumber: 1,
        programPlaced: 'Network 23 News @ 5',
        status: 'confirmed',
        priority: 1,
        airDay: 'Thursday',
        airDate: '01/12/17',
        airTime: '05:00 PM',
        spotLength: ':30',
        spotRate: 550,
        buyerRating: 1.8,
        comment: 'Weather'
      }],
      makegoods: [
      {
        lineNumber: 1,
        program: 'Network 23 News @ 5',
        startTime: '05:00 PM',
        endTime: '06:00 PM',
        days: 'M-F',
        spotLength: ':30',
        offeredSpots: 2,
        spotRate: 550,
        stationRating: 1.8,
        comment: ''
      }]
    },
    {
      id: 12389,
      orderId: 131642,
      stationOrderNumber: 178269,
      flightStart: '01/09/17',
      flightEnd: '02/19/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 300,
      makegoodNumber: 12389,
      dateMakegoodSent: '11/22/16',
      dateTimeOfferDue: '11/24/16',
      stationAction: 'Accept/Reject',
      offerType: 'Makegood',
      offerStatus: 'pending',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'pending',
      stationNotes: '',
      agency: 'Auto Advertising Partners',
      advertiser: 'Southeast Ford',
      campaignName: 'WASHI WVVV FSE-END-22 Q1 17',
      cpe: 'FSE-END-22',
      videaOrderDetail: 'V00012321',
      videaOrderNumber: 131642
    },
    {
      id: 12674,
      orderId: 131542,
      stationOrderNumber: 154703,
      flightStart: '01/09/17',
      flightEnd: '02/12/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 0,
      makegoodNumber: 12674,
      dateMakegoodSent: '11/09/16',
      dateTimeOfferDue: '11/11/16',
      stationAction: 'N/A',
      offerType: 'Bonus',
      offerStatus: 'confirmed',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'confirmed',
      stationNotes: '',
      agency: 'The Media Masters Group',
      advertiser: 'Metro Wireless',
      campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
      cpe: 'MEW-GEN-23',
      videaOrderDetail: 'V00012543',
      videaOrderNumber: 131542
    },
    {
      id: 12375,
      orderId: 133529,
      stationOrderNumber: 193847,
      flightStart: '12/26/16',
      flightEnd: '01/29/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 2500,
      makegoodNumber: 12375,
      dateMakegoodSent: '10/31/16',
      dateTimeOfferDue: '11/02/16',
      stationAction: 'N/A',
      offerType: 'Program Change',
      offerStatus: 'confirmed',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'confirmed',
      stationNotes: '',
      agency: 'Zone Group Advertising',
      advertiser: 'Papa John’s Pizza',
      campaignName: 'WASHI WVVV PJP-HOL-8 Q1 17',
      cpe: 'PJP-HOL-8',
      videaOrderDetail: 'V00012341',
      videaOrderNumber: 133529
    }]
  },
  {
    id: 133529,
    isVideaArchived: false,
    stationOrderNumber: 876599,
    agencyOrderNumber: 8652192,
    estimate: 8,
    status: 'accepted',
    type: 'Original',
    currency: 'Cash',
    advertiser: 'Papa Johns Pizza',
    agency: 'Zone Group Advertising',
    buyer: 'Jennifer Harris',
    salesOffice: 'Videa',
    salesOfficeLocation: 'Atlanta',
    salesPerson: 'Jessica Bond',
    cpe: 'PJP-HOL-8',
    campaign: 'Q1 `16 LO',
    product: 'HOL',
    flightStart: moment().subtract(6, 'weeks').weekday(1).format('MM/DD/YY'),
    flightEnd: moment().subtract(1, 'weeks').weekday(7).format('MM/DD/YY'),
    updated: moment().subtract(2, 'month').format('MM/DD/YY'),
    revenue: 10650,
    lineItems: [],
    preempts: [],
    revenueBy: [
    {
      month: 'April',
      revenue: 10650
    }],
    demo: 'A18-49',
    share: 0.494,
    spots: 15,
    spotsOrdered: 15,
    spotsMissed: 0,
    missedValue: null,
    trafficSpots: 15,
    ordered: '11/05/16',
    expanded: false,
    dayparts: [
    {
      name: 'Early Morning',
      aur: 300,
      spots: 4,
      revenue: 1200,
      cpp: 158,
      rating: 1.9,
      grps: 7.6,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News This Morning',
        aur: 300,
        numberOfSpots: 4,
        revenue: 1200,
        cpp: 158,
        grps: 7.6,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 07:00 AM - 08:00 AM',
          expanded: false,
          dates: [
          {
            date: '03/23/16',
            spotLength: ':30',
            aur: 300,
            numberOfSpots: 1,
            revenue: 300,
            cpp: 158,
            grps: 1.9
          }]
        },
        {
          time: 'M-F / 08:00 AM - 09:00 AM',
          expanded: false,
          dates: [
          {
            date: '03/23/16',
            spotLength: ':30',
            aur: 300,
            numberOfSpots: 2,
            revenue: 600,
            cpp: 158,
            grps: 3.8
          },
          {
            date: '04/04/16',
            spotLength: ':30',
            aur: 300,
            numberOfSpots: 1,
            revenue: 300,
            cpp: 158,
            grps: 1.9
          }]
        }]
      }]
    },
    {
      name: 'Early News',
      aur: 550,
      spots: 3,
      revenue: 1650,
      cpp: 220,
      rating: 2.5,
      grps: 7.5,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News @ 5',
        aur: 550,
        numberOfSpots: 3,
        revenue: 1650,
        cpp: 220,
        grps: 7.5,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 05:00 PM - 06:00 PM',
          expanded: false,
          dates: [
          {
            date: '03/28/16',
            spotLength: ':30',
            aur: 550,
            numberOfSpots: 3,
            revenue: 1650,
            cpp: 220,
            grps: 7.5
          }]
        }]
      }]
    },
    {
      name: 'Prime',
      aur: 2500,
      spots: 1,
      revenue: 2500,
      cpp: 893,
      rating: 2.8,
      grps: 2.8,
      expanded: false,
      shows: [
      {
        name: 'Masterchef',
        aur: 2500,
        numberOfSpots: 1,
        revenue: 2500,
        cpp: 893,
        grps: 2.8,
        expanded: false,
        showTimes: [
        {
          time: 'W / 7:00 PM - 9:00 PM',
          expanded: false,
          dates: [
          {
            date: '03/23/16',
            spotLength: ':30',
            aur: 2500,
            numberOfSpots: 1,
            revenue: 2500,
            cpp: 893,
            grps: 2.8
          }]
        }]
      }]
    },
    {
      name: 'Late News',
      aur: 1500,
      spots: 3,
      revenue: 4500,
      cpp: 500,
      rating: 3,
      grps: 9,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News @ 9',
        aur: 1500,
        numberOfSpots: 3,
        revenue: 4500,
        cpp: 500,
        grps: 9,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 09:00 PM - 10:00 PM',
          expanded: false,
          dates: [
          {
            date: '03/23/16',
            spotLength: ':30',
            aur: 1500,
            numberOfSpots: 3,
            revenue: 4500,
            cpp: 500,
            grps: 9
          }]
        }]
      }]
    },
    {
      name: 'Late Fringe',
      aur: 200,
      spots: 4,
      revenue: 800,
      cpp: 105,
      rating: 1.9,
      grps: 7.6,
      expanded: false,
      shows: [
      {
        name: 'Seinfeld',
        aur: 225,
        numberOfSpots: 3,
        revenue: 675,
        cpp: 188,
        grps: 3.6,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 11:00 PM - 11:30 PM',
          expanded: false,
          dates: [
          {
            date: '03/23/16',
            spotLength: ':30',
            aur: 225,
            numberOfSpots: 1,
            revenue: 225,
            cpp: 188,
            grps: 1.2
          }]
        },
        {
          time: 'M-F / 11:30 PM - 12:00 PM',
          expanded: false,
          dates: [
          {
            date: '03/23/16',
            spotLength: ':30',
            aur: 225,
            numberOfSpots: 2,
            revenue: 450,
            cpp: 188,
            grps: 2.4
          }]
        }]
      },
      {
        name: 'Anger Management',
        aur: 125,
        numberOfSpots: 1,
        revenue: 125,
        cpp: 104,
        grps: 1.2,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 12:00 PM - 12:30 PM',
          expanded: false,
          dates: [
          {
            date: '04/04/16',
            spotLength: ':30',
            aur: 125,
            numberOfSpots: 1,
            revenue: 125,
            cpp: 104,
            grps: 1.2
          }]
        }]
      }]
    }],
    versions: [
    {
      id: 1,
      dateSubmitted: '',
      timeSubmitted: '',
      submittedBy: '',
      programs: [
      {
        name: 'Network 23 News This Morning',
        time: '07:00 AM — 08:00 AM',
        length: ':30',
        flightStart: '03/23/16',
        flightEnd: '04/03/16',
        rate: 300,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          1,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 1,
        totalCost: 300,
        buyerRating: 1.9,
        videaRating: 1.9,
        totalRatings: 1.9
      },
      {
        name: 'Network 23 News This Morning',
        time: '08:00 AM — 09:00 AM',
        length: ':30',
        flightStart: '03/23/16',
        flightEnd: '04/03/16',
        rate: 300,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 2,
        totalCost: 600,
        buyerRating: 1.9,
        videaRating: 1.9,
        totalRatings: 3.8
      },
      {
        name: 'Network 23 News This Morning',
        time: '08:00 AM — 09:00 AM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/10/16',
        rate: 300,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 1,
        totalCost: 300,
        buyerRating: 1.9,
        videaRating: 1.9,
        totalRatings: 1.9
      },
      {
        name: 'Network 23 News @ 5',
        time: '05:00 PM — 06:00 PM',
        length: ':30',
        flightStart: '03/23/16',
        flightEnd: '04/03/16',
        rate: 550,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 3,
        totalCost: 1650,
        buyerRating: 2.5,
        videaRating: 2.7,
        totalRatings: 7.5
      },
      {
        name: 'Network 23 News @ 9',
        time: '09:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '03/23/16',
        flightEnd: '04/03/16',
        rate: 1500,
        weeklySpots: 3,
        weekdayCounts: [
          0,
          1,
          1,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 3,
        totalCost: 4500,
        buyerRating: 3,
        videaRating: 3,
        totalRatings: 9
      },
      {
        name: 'Seinfeld',
        time: '11:00 PM — 11:30 PM',
        length: ':30',
        flightStart: '03/23/16',
        flightEnd: '04/03/16',
        rate: 225,
        weeklySpots: 1,
        weekdayCounts: [
          1,
          0,
          0,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 1,
        totalCost: 225,
        buyerRating: 1.2,
        videaRating: 1.3,
        totalRatings: 1.2
      },
      {
        name: 'Seinfeld',
        time: '11:30 PM — 12:00 AM',
        length: ':30',
        flightStart: '03/23/16',
        flightEnd: '04/03/16',
        rate: 225,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 2,
        totalCost: 450,
        buyerRating: 1.2,
        videaRating: 1.2,
        totalRatings: 2.4
      },
      {
        name: 'Anger Management',
        time: '12:00 AM — 12:30 AM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/10/16',
        rate: 125,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          1,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 1,
        totalCost: 125,
        buyerRating: 1.2,
        videaRating: 1.2,
        totalRatings: 1.2
      },
      {
        name: 'Masterchef',
        time: '07:00 PM — 09:00 PM',
        length: ':30',
        flightStart: '03/23/16',
        flightEnd: '04/03/16',
        rate: 2500,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          1,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 1,
        totalCost: 2500,
        buyerRating: 2.8,
        videaRating: 2.8,
        totalRatings: 2.8
      }]
    }],
    offers: [
    {
      id: 3333,
      orderId: 131542,
      stationOrderNumber: 154703,
      flightStart: '01/09/17',
      flightEnd: '02/12/17',
      overdue: true,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 1100,
      makegoodNumber: 12676,
      dateMakegoodSent: '05/23/16',
      dateTimeOfferDue: '05/25/16',
      stationAction: 'Accept/Reject',
      offerType: 'Makegood',
      offerStatus: 'pending',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'pending',
      agencyNotes: '',
      acceptedByStation: 'pending',
      stationNotes: '',
      agency: 'The Media Masters Group',
      advertiser: 'Metro Wireless',
      campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
      cpe: 'MEW-GEN-23',
      videaOrderDetail: 'V00012543',
      videaOrderNumber: 131542,
      preempts: [
      {
        buyLine: 4,
        spotNumber: 1,
        programPlaced: 'Network 23 News @ 5',
        status: 'confirmed',
        priority: 1,
        airDay: 'Tuesday',
        airDate: '01/10/17',
        airTime: '05:00 PM',
        spotLength: ':30',
        spotRate: 550,
        buyerRating: 1.8,
        comment: 'Technical Difficulties'
      },
      {
        buyLine: 6,
        spotNumber: 1,
        programPlaced: 'Network 23 News @ 5',
        status: 'confirmed',
        priority: 1,
        airDay: 'Thursday',
        airDate: '01/12/17',
        airTime: '05:00 PM',
        spotLength: ':30',
        spotRate: 550,
        buyerRating: 1.8,
        comment: 'Weather'
      }],
      makegoods: [
      {
        lineNumber: 1,
        program: 'Network 23 News @ 5',
        startTime: '05:00 PM',
        endTime: '06:00 PM',
        days: 'M-F',
        spotLength: ':30',
        offeredSpots: 2,
        spotRate: 550,
        stationRating: 1.8,
        comment: ''
      }]
    },
    {
      id: 12389,
      orderId: 131642,
      stationOrderNumber: 178269,
      flightStart: '01/09/17',
      flightEnd: '02/19/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 300,
      makegoodNumber: 12389,
      dateMakegoodSent: '11/22/16',
      dateTimeOfferDue: '11/24/16',
      stationAction: 'Accept/Reject',
      offerType: 'Makegood',
      offerStatus: 'pending',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'pending',
      stationNotes: '',
      agency: 'Auto Advertising Partners',
      advertiser: 'Southeast Ford',
      campaignName: 'WASHI WVVV FSE-END-22 Q1 17',
      cpe: 'FSE-END-22',
      videaOrderDetail: 'V00012321',
      videaOrderNumber: 131642
    },
    {
      id: 12674,
      orderId: 131542,
      stationOrderNumber: 154703,
      flightStart: '01/09/17',
      flightEnd: '02/12/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 0,
      makegoodNumber: 12674,
      dateMakegoodSent: '11/09/16',
      dateTimeOfferDue: '11/11/16',
      stationAction: 'N/A',
      offerType: 'Bonus',
      offerStatus: 'confirmed',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'confirmed',
      stationNotes: '',
      agency: 'The Media Masters Group',
      advertiser: 'Metro Wireless',
      campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
      cpe: 'MEW-GEN-23',
      videaOrderDetail: 'V00012543',
      videaOrderNumber: 131542
    },
    {
      id: 12375,
      orderId: 133529,
      stationOrderNumber: 193847,
      flightStart: '12/26/16',
      flightEnd: '01/29/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 2500,
      makegoodNumber: 12375,
      dateMakegoodSent: '10/31/16',
      dateTimeOfferDue: '11/02/16',
      stationAction: 'N/A',
      offerType: 'Program Change',
      offerStatus: 'confirmed',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'confirmed',
      stationNotes: '',
      agency: 'Zone Group Advertising',
      advertiser: 'Papa John’s Pizza',
      campaignName: 'WASHI WVVV PJP-HOL-8 Q1 17',
      cpe: 'PJP-HOL-8',
      videaOrderDetail: 'V00012341',
      videaOrderNumber: 133529
    }]
  },
  {
    id: 131642,
    isVideaArchived: false,
    stationOrderNumber: 875912,
    agencyOrderNumber: 4568795,
    estimate: 22,
    status: 'accepted',
    type: 'Original',
    currency: 'Cash',
    advertiser: 'Southeast Ford',
    agency: 'Auto Advertising Partners',
    buyer: 'Barry Gates',
    salesOffice: 'Videa',
    salesOfficeLocation: 'Atlanta',
    salesPerson: 'Eleanor Vine',
    cpe: 'FSE-END-22',
    campaign: 'Year-End 2015',
    product: 'END',
    flightStart: moment().subtract(8, 'weeks').weekday(1).format('MM/DD/YY'),
    flightEnd: moment().subtract(2, 'weeks').weekday(7).format('MM/DD/YY'),
    updated: moment().subtract(1, 'month').format('MM/DD/YY'),
    revenue: 41450,
    lineItems: [],
    preempts: [],
    revenueBy: [
    {
      month: 'April',
      revenue: 22450
    },
    {
      month: 'May',
      revenue: 19000
    }],
    demo: 'A25-54',
    share: 0.4,
    spots: 59,
    spotsOrdered: 15,
    spotsMissed: 3,
    missedValue: 975,
    trafficSpots: 56,
    ordered: '10/21/16',
    expanded: false,
    dayparts: [
    {
      name: 'Early Morning',
      aur: 317,
      spots: 15,
      revenue: 4750,
      cpp: 194,
      rating: 1.6,
      grps: 24.5,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News This Morning',
        aur: 317,
        numberOfSpots: 15,
        revenue: 4750,
        cpp: 194,
        grps: 24.5,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 07:00 AM - 08:00 AM',
          expanded: false,
          dates: [
          {
            date: '04/25/16',
            spotLength: ':30',
            aur: 300,
            numberOfSpots: 5,
            revenue: 1500,
            cpp: 200,
            grps: 7.5
          }]
        },
        {
          time: 'M-F / 08:00 AM - 09:00 AM',
          expanded: false,
          dates: [
          {
            date: '04/25/16',
            spotLength: ':30',
            aur: 350,
            numberOfSpots: 5,
            revenue: 1750,
            cpp: 206,
            grps: 8.5
          },
          {
            date: '05/09/16',
            spotLength: ':30',
            aur: 300,
            numberOfSpots: 5,
            revenue: 1500,
            cpp: 176,
            grps: 8.5
          }]
        }]
      }]
    },
    {
      name: 'Early News',
      aur: 538,
      spots: 16,
      revenue: 8600,
      cpp: 229,
      rating: 2.4,
      grps: 37.6,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News @ 5',
        aur: 500,
        numberOfSpots: 10,
        revenue: 5000,
        cpp: 227,
        grps: 22,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 05:00 PM - 06:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/04/16',
            spotLength: ':30',
            aur: 500,
            numberOfSpots: 5,
            revenue: 2500,
            cpp: 227,
            grps: 11
          },
          {
            date: '04/25/16',
            spotLength: ':30',
            aur: 500,
            numberOfSpots: 5,
            revenue: 2500,
            cpp: 227,
            grps: 11
          }]
        }]
      },
      {
        name: 'Network 23 News @ 6',
        aur: 300,
        numberOfSpots: 6,
        revenue: 3600,
        cpp: 231,
        grps: 15.6,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 06:00 PM - 07:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/25/16',
            spotLength: ':30',
            aur: 600,
            numberOfSpots: 3,
            revenue: 1800,
            cpp: 231,
            grsp: 7.8
          },
          {
            date: '05/02/16',
            spotLength: ':30',
            aur: 600,
            numberOfSpots: 3,
            revenue: 1800,
            cpp: 231,
            grsp: 7.8
          }]
        }]
      }]
    },
    {
      name: 'Prime',
      aur: 850,
      spots: 7,
      revenue: 5950,
      cpp: 509,
      rating: 1.2,
      grps: 11.7,
      expanded: false,
      shows: [
      {
        name: 'Bones',
        aur: 800,
        numberOfSpots: 2,
        revenue: 1600,
        cpp: 533,
        grps: 3,
        expanded: false,
        showTimes: [
        {
          time: 'Thu  / 7:00 PM - 8:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/14/16',
            spotLength: ':30',
            aur: 800,
            numberOfSpots: 1,
            revenue: 800,
            cpp: 533,
            grps: 1.5
          },
          {
            date: '04/25/16',
            spotLength: ':30',
            aur: 800,
            numberOfSpots: 1,
            revenue: 800,
            cpp: 533,
            grps: 1.5
          }]
        }]
      },
      {
        name: 'GrandFathered/Grinder',
        aur: 1000,
        numberOfSpots: 3,
        revenue: 3000,
        cpp: 500,
        grps: 6,
        expanded: false,
        showTimes: [
        {
          time: 'Tue / 8:00 PM - 9:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/25/16',
            spotLength: ':30',
            aur: 1000,
            numberOfSpots: 2,
            revenue: 2000,
            cpp: 500,
            grps: 4
          },
          {
            date: '05/09/16',
            spotLength: ':30',
            aur: 1000,
            numberOfSpots: 1,
            revenue: 1000,
            cpp: 500,
            grps: 2
          }]
        }]
      },
      {
        name: 'MasterChef',
        aur: 650,
        numberOfSpots: 2,
        revenue: 1350,
        cpp: 500,
        grps: 2.7,
        expanded: false,
        showTimes: [
        {
          time: 'F / 7:00 PM - 8:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/25/16',
            spotLength: ':30',
            aur: 650,
            numberOfSpots: 1,
            revenue: 650,
            cpp: 500,
            grps: 1.3
          },
          {
            date: '05/09/16',
            spotLength: ':30',
            aur: 700,
            numberOfSpots: 1,
            revenue: 700,
            cpp: 500,
            grps: 1.4
          }]
        }]
      }]
    },
    {
      name: 'Late News',
      aur: 1400,
      spots: 15,
      revenue: 21000,
      cpp: 494,
      rating: 1.2,
      grps: 42.5,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News@9',
        aur: 1400,
        numberOfSpots: 15,
        revenue: 21000,
        cpp: 494,
        grps: 42.5,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 09:00 PM - 010:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/25/16',
            spotLength: ':30',
            aur: 1450,
            numberOfSpots: 5,
            revenue: 7250,
            cpp: 483,
            grps: 15
          },
          {
            date: '05/02/16',
            spotLength: ':30',
            aur: 1450,
            numberOfSpots: 5,
            revenue: 7250,
            cpp: 483,
            grps: 15
          },
          {
            date: '05/09/16',
            spotLength: ':30',
            aur: 1300,
            numberOfSpots: 5,
            revenue: 6500,
            cpp: 520,
            grps: 12.5
          }]
        }]
      }]
    },
    {
      name: 'Late Fringe',
      aur: 192,
      spots: 6,
      revenue: 1150,
      cpp: 160,
      rating: 1.2,
      grps: 7.2,
      expanded: false,
      shows: [
      {
        name: 'Seinfeld',
        aur: 225,
        numberOfSpots: 4,
        revenue: 900,
        cpp: 188,
        grps: 4.8,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 11:00 PM - 11:30 PM',
          expanded: false,
          dates: [
          {
            date: '04/04/16',
            spotLength: ':30',
            aur: 225,
            numberOfSpots: 2,
            revenue: 450,
            cpp: 188,
            grps: 2.4
          }]
        },
        {
          time: 'M-F / 11:30 PM - 12:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/25/16',
            spotLength: ':30',
            aur: 225,
            numberOfSpots: 2,
            revenue: 450,
            cpp: 188,
            grps: 2.4
          }]
        }]
      },
      {
        name: 'Anger Management',
        aur: 125,
        numberOfSpots: 2,
        revenue: 250,
        cpp: 104,
        grps: 2.4,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 12:00 PM - 12:30 PM',
          expanded: false,
          dates: [
          {
            date: '05/02/16',
            spotLength: ':30',
            aur: 125,
            numberOfSpots: 2,
            revenue: 250,
            cpp: 104,
            grps: 2.4
          }]
        }]
      }]
    }],
    versions: [
    {
      id: 1,
      dateSubmitted: '',
      timeSubmitted: '',
      submittedBy: '',
      programs: [
      {
        name: 'Network 23 News This Morning',
        time: '07:00 AM — 08:00 AM',
        length: ':30',
        flightStart: '04/25/16',
        flightEnd: '04/29/16',
        rate: 300,
        weeklySpots: 5,
        weekdayCounts: [
          1,
          1,
          1,
          1,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 5,
        totalCost: 1500,
        buyerRating: 1.5,
        videaRating: 1.7,
        totalRatings: 7.5
      },
      {
        name: 'Network 23 News This Morning',
        time: '08:00 AM — 09:00 AM',
        length: ':30',
        flightStart: '04/25/16',
        flightEnd: '04/29/16',
        rate: 350,
        weeklySpots: 5,
        weekdayCounts: [
          1,
          1,
          1,
          1,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 5,
        totalCost: 1750,
        buyerRating: 1.7,
        videaRating: 1.7,
        totalRatings: 8.5
      },
      {
        name: 'Network 23 News This Morning',
        time: '08:00 AM — 09:00 AM',
        length: ':30',
        flightStart: '05/09/16',
        flightEnd: '05/13/16',
        rate: 300,
        weeklySpots: 5,
        weekdayCounts: [
          1,
          1,
          1,
          1,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 5,
        totalCost: 1500,
        buyerRating: 1.7,
        videaRating: 1.7,
        totalRatings: 8.5
      },
      {
        name: 'Network 23 News @ 5',
        time: '05:00 PM — 06:00 PM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/29/16',
        rate: 500,
        weeklySpots: 5,
        weekdayCounts: [
          1,
          1,
          1,
          1,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 10,
        totalCost: 5000,
        buyerRating: 2.2,
        videaRating: 2.4,
        totalRatings: 22
      },
      {
        name: 'Network 23 News @ 6',
        time: '06:00 PM — 07:00 PM',
        length: ':30',
        flightStart: '04/25/16',
        flightEnd: '05/06/16',
        rate: 600,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 6,
        totalCost: 3600,
        buyerRating: 2.6,
        videaRating: 2.6,
        totalRatings: 15.6
      },
      {
        name: 'Network 23 News @ 9',
        time: '09:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '04/25/16',
        flightEnd: '05/06/16',
        rate: 1450,
        weeklySpots: 5,
        weekdayCounts: [
          1,
          1,
          1,
          1,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 10,
        totalCost: 14500,
        buyerRating: 3,
        videaRating: 3,
        totalRatings: 30
      },
      {
        name: 'Network 23 News @ 9',
        time: '09:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '05/09/16',
        flightEnd: '05/13/16',
        rate: 1300,
        weeklySpots: 5,
        weekdayCounts: [
          1,
          1,
          1,
          1,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 5,
        totalCost: 6500,
        buyerRating: 2.5,
        videaRating: 2.7,
        totalRatings: 12.5
      },
      {
        name: 'Seinfeld',
        time: '11:00 PM — 11:30 PM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/08/16',
        rate: 225,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 2,
        totalCost: 450,
        buyerRating: 1.2,
        videaRating: 1.4,
        totalRatings: 2.4
      },
      {
        name: 'Seinfeld',
        time: '11:30 PM — 12:00 AM',
        length: ':30',
        flightStart: '04/25/16',
        flightEnd: '04/29/16',
        rate: 225,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 2,
        totalCost: 450,
        buyerRating: 1.2,
        videaRating: 1.2,
        totalRatings: 2.4
      },
      {
        name: 'Anger Management',
        time: '12:00 AM — 12:30 AM',
        length: ':30',
        flightStart: '05/02/16',
        flightEnd: '05/05/16',
        rate: 125,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 2,
        totalCost: 250,
        buyerRating: 1.2,
        videaRating: 1.2,
        totalRatings: 2.4
      },
      {
        name: 'Bones',
        time: '07:00 PM — 08:00 PM',
        length: ':30',
        flightStart: '04/14/16',
        flightEnd: '04/22/16',
        rate: 800,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 2,
        totalCost: 1600,
        buyerRating: 1.5,
        videaRating: 1.8,
        totalRatings: 3
      },
      {
        name: 'Grandfathered/Grinder',
        time: '08:00 PM — 09:00 PM',
        length: ':30',
        flightStart: '04/26/16',
        flightEnd: '05/03/16',
        rate: 1000,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 2,
        totalCost: 2000,
        buyerRating: 2,
        videaRating: 2,
        totalRatings: 4
      },
      {
        name: 'Grandfathered/Grinder',
        time: '08:00 PM — 09:00 PM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '05/10/16',
        rate: 1000,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          1,
          0,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 1,
        totalCost: 1000,
        buyerRating: 2,
        videaRating: 2,
        totalRatings: 2
      },
      {
        name: 'Masterchef',
        time: '07:00 PM — 08:00 PM',
        length: ':30',
        flightStart: '04/29/16',
        flightEnd: '04/29/16',
        rate: 650,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 1,
        totalCost: 650,
        buyerRating: 1.3,
        videaRating: 1.4,
        totalRatings: 1.3
      },
      {
        name: 'Masterchef',
        time: '07:00 PM — 08:00 PM',
        length: ':30',
        flightStart: '05/13/16',
        flightEnd: '05/13/16',
        rate: 700,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 1,
        totalCost: 700,
        buyerRating: 1.4,
        videaRating: 1.4,
        totalRatings: 1.4
      }]
    }],
    offers: [
    {
      id: 12676,
      orderId: 131542,
      stationOrderNumber: 154703,
      flightStart: '01/09/17',
      flightEnd: '02/12/17',
      overdue: true,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 1100,
      makegoodNumber: 12676,
      dateMakegoodSent: '05/23/16',
      dateTimeOfferDue: '05/25/16',
      stationAction: 'Accept/Reject',
      offerType: 'Makegood',
      offerStatus: 'pending',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'pending',
      agencyNotes: '',
      acceptedByStation: 'pending',
      stationNotes: '',
      agency: 'The Media Masters Group',
      advertiser: 'Metro Wireless',
      campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
      cpe: 'MEW-GEN-23',
      videaOrderDetail: 'V00012543',
      videaOrderNumber: 131542,
      preempts: [
      {
        buyLine: 4,
        spotNumber: 1,
        programPlaced: 'Network 23 News @ 5',
        status: 'confirmed',
        priority: 1,
        airDay: 'Tuesday',
        airDate: '01/10/17',
        airTime: '05:00 PM',
        spotLength: ':30',
        spotRate: 550,
        buyerRating: 1.8,
        comment: 'Technical Difficulties'
      },
      {
        buyLine: 6,
        spotNumber: 1,
        programPlaced: 'Network 23 News @ 5',
        status: 'confirmed',
        priority: 1,
        airDay: 'Thursday',
        airDate: '01/12/17',
        airTime: '05:00 PM',
        spotLength: ':30',
        spotRate: 550,
        buyerRating: 1.8,
        comment: 'Weather'
      }],
      makegoods: [
      {
        lineNumber: 1,
        program: 'Network 23 News @ 5',
        startTime: '05:00 PM',
        endTime: '06:00 PM',
        days: 'M-F',
        spotLength: ':30',
        offeredSpots: 2,
        spotRate: 550,
        stationRating: 1.8,
        comment: ''
      }]
    },
    {
      id: 12389,
      orderId: 131642,
      stationOrderNumber: 178269,
      flightStart: '01/09/17',
      flightEnd: '02/19/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 300,
      makegoodNumber: 12389,
      dateMakegoodSent: '11/22/16',
      dateTimeOfferDue: '11/24/16',
      stationAction: 'Accept/Reject',
      offerType: 'Makegood',
      offerStatus: 'pending',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'pending',
      stationNotes: '',
      agency: 'Auto Advertising Partners',
      advertiser: 'Southeast Ford',
      campaignName: 'WASHI WVVV FSE-END-22 Q1 17',
      cpe: 'FSE-END-22',
      videaOrderDetail: 'V00012321',
      videaOrderNumber: 131642
    },
    {
      id: 12674,
      orderId: 131542,
      stationOrderNumber: 154703,
      flightStart: '01/09/17',
      flightEnd: '02/12/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 0,
      makegoodNumber: 12674,
      dateMakegoodSent: '11/09/16',
      dateTimeOfferDue: '11/11/16',
      stationAction: 'N/A',
      offerType: 'Bonus',
      offerStatus: 'confirmed',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'confirmed',
      stationNotes: '',
      agency: 'The Media Masters Group',
      advertiser: 'Metro Wireless',
      campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
      cpe: 'MEW-GEN-23',
      videaOrderDetail: 'V00012543',
      videaOrderNumber: 131542
    },
    {
      id: 12375,
      orderId: 133529,
      stationOrderNumber: 193847,
      flightStart: '12/26/16',
      flightEnd: '01/29/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 2500,
      makegoodNumber: 12375,
      dateMakegoodSent: '10/31/16',
      dateTimeOfferDue: '11/02/16',
      stationAction: 'N/A',
      offerType: 'Program Change',
      offerStatus: 'confirmed',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'confirmed',
      stationNotes: '',
      agency: 'Zone Group Advertising',
      advertiser: 'Papa John’s Pizza',
      campaignName: 'WASHI WVVV PJP-HOL-8 Q1 17',
      cpe: 'PJP-HOL-8',
      videaOrderDetail: 'V00012341',
      videaOrderNumber: 133529
    }]
  },
  {
    id: 131634,
    isVideaArchived: false,
    stationOrderNumber: 875888,
    agencyOrderNumber: 7564196,
    estimate: 3567,
    status: 'accepted',
    type: 'Original',
    currency: 'Trade',
    ordered: '10/13/16',
    demo: 'A25-54',
    advertiser: 'Community Loans, Inc.',
    agency: 'Vanthrop and Associates',
    buyer: 'Ann Barnes',
    salesOffice: 'Videa',
    salesOfficeLocation: 'Atlanta',
    salesPerson: 'Brian Reed',
    cpe: 'CLI-QTR-3567',
    campaign: '1Q16',
    product: 'QTR',
    flightStart: moment().subtract(3, 'weeks').weekday(1).format('MM/DD/YY'),
    flightEnd: moment().add(1, 'weeks').weekday(7).format('MM/DD/YY'),
    updated: moment().subtract(3, 'weeks').format('MM/DD/YY'),
    revenue: 19100,
    lineItems: [],
    preempts: [],
    revenueBy: [
    {
      month: 'April',
      revenue: 19100
    }],
    share: 0.35,
    spots: 45,
    spotsOrdered: 45,
    spotsMissed: 1,
    missedValue: 150,
    trafficSpots: 44,
    dayparts: [
    {
      name: 'Daytime',
      aur: 277,
      spots: 15,
      revenue: 4150,
      cpp: 218,
      rating: 1.2,
      grps: 19,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News@12',
        aur: 250,
        numberOfSpots: 7,
        revenue: 1750,
        cpp: 250,
        grps: 7,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 12:00 PM - 01:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/04/16',
            spotLength: ':30',
            aur: 250,
            numberOfSpots: 4,
            revenue: 1000,
            cpp: 250,
            grps: 4
          },
          {
            date: '04/11/16',
            spotLength: ':30',
            aur: 250,
            numberOfSpots: 3,
            revenue: 750,
            cpp: 250,
            grps: 3
          }]
        }]
      },
      {
        name: 'Judge Judy',
        aur: 300,
        numberOfSpots: 8,
        revenue: 2400,
        cpp: 200,
        grps: 12,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 02:00 PM - 03:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/11/16',
            spotLength: ':30',
            aur: 300,
            numberOfSpots: 4,
            revenue: 1200,
            cpp: 200,
            grps: 6
          },
          {
            date: '04/18/16',
            spotLength: ':30',
            aur: 300,
            numberOfSpots: 4,
            revenue: 1200,
            cpp: 200,
            grps: 6
          }]
        }]
      }]
    },
    {
      name: 'Early News',
      aur: 573,
      spots: 15,
      revenue: 8600,
      cpp: 287,
      rating: 1.2,
      grps: 30,
      expanded: false,
      shows: [
      {
        name: 'Network 23 News @ 5',
        aur: 500,
        numberOfSpots: 7,
        revenue: 3800,
        cpp: 250,
        grps: 14,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 05:00 PM - 06:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/04/16',
            spotLength: ':30',
            aur: 500,
            numberOfSpots: 4,
            revenue: 2000,
            cpp: 250,
            grsp: 8
          },
          {
            date: '04/11/16',
            spotLength: ':30',
            aur: 600,
            numberOfSpots: 3,
            revenue: 1800,
            cpp: 300,
            grsp: 6
          }]
        }]
      },
      {
        name: 'Network 23 News @ 6',
        aur: 600,
        numberOfSpots: 8,
        revenue: 4800,
        cpp: 300,
        grsp: 16,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 06:00 PM - 07:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/04/16',
            spotLength: ':30',
            aur: 600,
            numberOfSpots: 4,
            revenue: 2400,
            cpp: 300,
            grsp: 8
          },
          {
            date: '04/11/16',
            spotLength: ':30',
            aur: 600,
            numberOfSpots: 4,
            revenue: 2400,
            cpp: 300,
            grsp: 8
          }]
        }]
      }]
    },
    {
      name: 'Prime Access',
      aur: 600,
      spots: 9,
      revenue: 5400,
      cpp: 300,
      rating: 1.2,
      grps: 18,
      expanded: false,
      shows: [
      {
        name: 'Access Hollywood/Entertainment Tonight',
        aur: 600,
        numberOfSpots: 9,
        revenue: 5400,
        cpp: 300,
        grps: 18,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 07:00 PM - 10:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/04/16',
            spotLength: ':30',
            aur: 500,
            numberOfSpots: 3,
            revenue: 1500,
            cpp: 250,
            grps: 6
          },
          {
            date: '04/11/16',
            spotLength: ':30',
            aur: 650,
            numberOfSpots: 3,
            revenue: 1950,
            cpp: 325,
            grps: 6
          },
          {
            date: '4/18/16',
            spotLength: ':30',
            aur: 650,
            numberOfSpots: 3,
            revenue: 1950,
            cpp: 325,
            grps: 6
          }]
        }]
      }]
    },
    {
      name: 'Late Fringe',
      aur: 158,
      spots: 6,
      revenue: 950,
      cpp: 140,
      rating: 1.2,
      grps: 6.8,
      expanded: false,
      shows: [
      {
        name: 'Seinfeld',
        aur: 200,
        numberOfSpots: 4,
        revenue: 750,
        cpp: 150,
        grps: 5,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 11:00 PM - 11:30 PM',
          expanded: false,
          dates: [
          {
            date: '04/04/16',
            spotLength: ':30',
            aur: 200,
            numberOfSpots: 2,
            revenue: 400,
            cpp: 133,
            grps: 3
          }]
        },
        {
          time: 'M-F / 11:30 AM - 12:00 PM',
          expanded: false,
          dates: [
          {
            date: '04/11/16',
            spotLength: ':30',
            aur: 175,
            numberOfSpots: 2,
            revenue: 350,
            cpp: 175,
            grps: 2
          }]
        }]
      },
      {
        name: 'Anger management',
        aur: 100,
        numberOfSpots: 2,
        revenue: 200,
        cpp: 111,
        grps: 1.8,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 12:00 PM - 12:30 PM',
          expanded: false,
          dates: [
          {
            date: '04/18/16',
            spotLength: ':30',
            aur: 100,
            numberOfSpots: 2,
            revenue: 200,
            cpp: 111,
            grps: 1.8
          }]
        }]
      }]
    }],
    expanded: false,
    versions: [
    {
      id: 1,
      dateSubmitted: '',
      timeSubmitted: '',
      submittedBy: '',
      programs: [
      {
        name: 'Network 23 News @ 12',
        time: '12:00 PM — 01:00 PM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/10/16',
        rate: 250,
        weeklySpots: 4,
        weekdayCounts: [
          1,
          1,
          1,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 4,
        totalCost: 1000,
        buyerRating: 1,
        videaRating: 1.3,
        totalRatings: 4
      },
      {
        name: 'Network 23 News @ 12',
        time: '12:00 PM — 01:00 PM',
        length: ':30',
        flightStart: '04/11/16',
        flightEnd: '04/17/16',
        rate: 250,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 3,
        totalCost: 750,
        buyerRating: 1,
        videaRating: 1.3,
        totalRatings: 3
      },
      {
        name: 'Judge Judy',
        time: '02:00 PM — 03:00 PM',
        length: ':30',
        flightStart: '04/11/16',
        flightEnd: '04/24/16',
        rate: 300,
        weeklySpots: 4,
        weekdayCounts: [
          1,
          1,
          1,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 8,
        totalCost: 2400,
        buyerRating: 1.5,
        videaRating: 1.7,
        totalRatings: 12
      },
      {
        name: 'Network 23 News @ 5',
        time: '05:00 PM — 06:00 PM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/10/16',
        rate: 500,
        weeklySpots: 4,
        weekdayCounts: [
          0,
          1,
          1,
          1,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 1
        },
        {
          thursday: 1
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 4,
        totalCost: 2000,
        buyerRating: 2,
        videaRating: 2,
        totalRatings: 8
      },
      {
        name: 'Network 23 News @ 5',
        time: '05:00 PM — 06:00 PM',
        length: ':30',
        flightStart: '04/11/16',
        flightEnd: '04/17/16',
        rate: 600,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 3,
        totalCost: 1800,
        buyerRating: 2,
        videaRating: 2,
        totalRatings: 6
      },
      {
        name: 'Network 23 News @ 6',
        time: '06:00 PM — 07:00 PM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/17/16',
        rate: 600,
        weeklySpots: 4,
        weekdayCounts: [
          1,
          1,
          0,
          1,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 8,
        totalCost: 4800,
        buyerRating: 2,
        videaRating: 2.2,
        totalRatings: 16
      },
      {
        name: 'Access Hollywood/Entertainment Tonight',
        time: '07:00 PM — 08:00 PM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/17/16',
        rate: 500,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 3,
        totalCost: 1500,
        buyerRating: 2,
        videaRating: 2,
        totalRatings: 6
      },
      {
        name: 'Access Hollywood/Entertainment Tonight',
        time: '07:00 PM — 08:00 PM',
        length: ':30',
        flightStart: '04/18/16',
        flightEnd: '04/24/16',
        rate: 650,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 6,
        totalCost: 3900,
        buyerRating: 2,
        videaRating: 2,
        totalRatings: 12
      },
      {
        name: 'Seinfeld',
        time: '11:00 PM — 11:30 PM',
        length: ':30',
        flightStart: '04/04/16',
        flightEnd: '04/10/16',
        rate: 200,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 2,
        totalCost: 400,
        buyerRating: 1.5,
        videaRating: 1.5,
        totalRatings: 3
      },
      {
        name: 'Seinfeld',
        time: '11:30 PM — 12:00 AM',
        length: ':30',
        flightStart: '04/11/16',
        flightEnd: '04/17/16',
        rate: 175,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 2,
        totalCost: 350,
        buyerRating: 1,
        videaRating: 1,
        totalRatings: 2
      },
      {
        name: 'Anger Management',
        time: '12:00 AM — 12:30 AM',
        length: ':30',
        flightStart: '04/18/16',
        flightEnd: '4/24/16',
        rate: 100,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 1,
        totalSpots: 2,
        totalCost: 200,
        buyerRating: 0.9,
        videaRating: 1,
        totalRatings: 1.8
      }]
    }],
    offers: [
    {
      id: 12676,
      orderId: 131542,
      stationOrderNumber: 154703,
      flightStart: '01/09/17',
      flightEnd: '02/12/17',
      overdue: true,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 1100,
      makegoodNumber: 12676,
      dateMakegoodSent: '05/23/16',
      dateTimeOfferDue: '05/25/16',
      stationAction: 'Accept/Reject',
      offerType: 'Makegood',
      offerStatus: 'pending',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'pending',
      agencyNotes: '',
      acceptedByStation: 'pending',
      stationNotes: '',
      agency: 'The Media Masters Group',
      advertiser: 'Metro Wireless',
      campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
      cpe: 'MEW-GEN-23',
      videaOrderDetail: 'V00012543',
      videaOrderNumber: 131542,
      preempts: [
      {
        buyLine: 4,
        spotNumber: 1,
        programPlaced: 'Network 23 News @ 5',
        status: 'confirmed',
        priority: 1,
        airDay: 'Tuesday',
        airDate: '01/10/17',
        airTime: '05:00 PM',
        spotLength: ':30',
        spotRate: 550,
        buyerRating: 1.8,
        comment: 'Technical Difficulties'
      },
      {
        buyLine: 6,
        spotNumber: 1,
        programPlaced: 'Network 23 News @ 5',
        status: 'confirmed',
        priority: 1,
        airDay: 'Thursday',
        airDate: '01/12/17',
        airTime: '05:00 PM',
        spotLength: ':30',
        spotRate: 550,
        buyerRating: 1.8,
        comment: 'Weather'
      }],
      makegoods: [
      {
        lineNumber: 1,
        program: 'Network 23 News @ 5',
        startTime: '05:00 PM',
        endTime: '06:00 PM',
        days: 'M-F',
        spotLength: ':30',
        offeredSpots: 2,
        spotRate: 550,
        stationRating: 1.8,
        comment: ''
      }]
    },
    {
      id: 12389,
      orderId: 131642,
      stationOrderNumber: 178269,
      flightStart: '01/09/17',
      flightEnd: '02/19/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 300,
      makegoodNumber: 12389,
      dateMakegoodSent: '11/22/16',
      dateTimeOfferDue: '11/24/16',
      stationAction: 'Accept/Reject',
      offerType: 'Makegood',
      offerStatus: 'pending',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'pending',
      stationNotes: '',
      agency: 'Auto Advertising Partners',
      advertiser: 'Southeast Ford',
      campaignName: 'WASHI WVVV FSE-END-22 Q1 17',
      cpe: 'FSE-END-22',
      videaOrderDetail: 'V00012321',
      videaOrderNumber: 131642
    },
    {
      id: 12674,
      orderId: 131542,
      stationOrderNumber: 154703,
      flightStart: '01/09/17',
      flightEnd: '02/12/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 0,
      makegoodNumber: 12674,
      dateMakegoodSent: '11/09/16',
      dateTimeOfferDue: '11/11/16',
      stationAction: 'N/A',
      offerType: 'Bonus',
      offerStatus: 'confirmed',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'confirmed',
      stationNotes: '',
      agency: 'The Media Masters Group',
      advertiser: 'Metro Wireless',
      campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
      cpe: 'MEW-GEN-23',
      videaOrderDetail: 'V00012543',
      videaOrderNumber: 131542
    },
    {
      id: 12375,
      orderId: 133529,
      stationOrderNumber: 193847,
      flightStart: '12/26/16',
      flightEnd: '01/29/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 2500,
      makegoodNumber: 12375,
      dateMakegoodSent: '10/31/16',
      dateTimeOfferDue: '11/02/16',
      stationAction: 'N/A',
      offerType: 'Program Change',
      offerStatus: 'confirmed',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'confirmed',
      stationNotes: '',
      agency: 'Zone Group Advertising',
      advertiser: 'Papa John’s Pizza',
      campaignName: 'WASHI WVVV PJP-HOL-8 Q1 17',
      cpe: 'PJP-HOL-8',
      videaOrderDetail: 'V00012341',
      videaOrderNumber: 133529
    }]
  },
  {
    id: 134787,
    isVideaArchived: false,
    stationOrderNumber: 871211,
    agencyOrderNumber: 68845,
    estimate: 459,
    status: 'accepted',
    type: 'Revision',
    currency: 'Cash',
    ordered: '09/26/16',
    demo: 'A25-54',
    advertiser: 'Sun Valley Bank',
    agency: 'Mullberry Way Group',
    buyer: 'Allison Gray',
    salesOffice: 'Videa',
    salesOfficeLocation: 'Atlanta',
    salesPerson: 'Emily Jackson',
    cpe: 'SUN-GEN-459',
    campaign: 'SUN-GEN-459 Q116',
    product: 'GEN',
    flightStart: moment().add(2, 'weeks').weekday(1).format('MM/DD/YY'),
    flightEnd: moment().add(10, 'weeks').weekday(7).format('MM/DD/YY'),
    updated: moment().subtract(1, 'month').format('MM/DD/YY'),
    revenue: 52215,
    lineItems: [],
    preempts: [],
    revenueBy: [
    {
      month: 'Feb',
      revenue: 28240
    },
    {
      month: 'Mar',
      revenue: 23975
    }],
    share: 0.21,
    spots: 87,
    spotsOrdered: 87,
    spotsMissed: 0,
    missedValue: null,
    trafficSpots: 87,
    dayparts: [
    {
      name: 'Early Morning',
      aur: 341,
      spots: 33,
      revenue: 11085,
      cpp: 190,
      rating: 1.2,
      grps: 57.6,
      expanded: false,
      shows: [
      {
        name: 'Morning News @ 6',
        aur: 360,
        numberOfSpots: 12,
        revenue: 4320,
        cpp: 189.47,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 06:00 AM - 07:00 AM',
          expanded: false,
          dates: [
          {
            date: '02/08/16',
            spotLength: ':30',
            aur: 360,
            numberOfSpots: 2,
            revenue: 720,
            cpp: 189.47,
            grps: 3.8
          },
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 360,
            numberOfSpots: 2,
            revenue: 720,
            cpp: 189.47,
            grps: 3.8
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 360,
            numberOfSpots: 2,
            revenue: 720,
            cpp: 189.47,
            grps: 3.8
          },
          {
            date: '03/07/16',
            spotLength: ':30',
            aur: 360,
            numberOfSpots: 2,
            revenue: 720,
            cpp: 189.47,
            grps: 3.8
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 360,
            numberOfSpots: 2,
            revenue: 720,
            cpp: 189.47,
            grps: 3.8
          },
          {
            date: '03/21/16',
            spotLength: ':30',
            aur: 360,
            numberOfSpots: 2,
            revenue: 720,
            cpp: 189.47,
            grps: 3.8
          }]
        }]
      },
      {
        name: 'Morning News @ 7',
        aur: 310,
        numberOfSpots: 18,
        revenue: 5715,
        cpp: 193.75,
        grps: 4.8,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 07:00 AM - 09:00 AM',
          expanded: false,
          dates: [
          {
            date: '02/08/16',
            spotLength: ':30',
            aur: 310,
            numberOfSpots: 3,
            revenue: 930,
            cpp: 193.75,
            grps: 4.8
          },
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 310,
            numberOfSpots: 3,
            revenue: 930,
            cpp: 193.75,
            grps: 4.8
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 310,
            numberOfSpots: 3,
            revenue: 930,
            cpp: 193.75,
            grps: 4.8
          },
          {
            date: '03/07/16',
            spotLength: ':30',
            aur: 325,
            numberOfSpots: 3,
            revenue: 975,
            cpp: 203.13,
            grps: 4.8
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 325,
            numberOfSpots: 3,
            revenue: 975,
            cpp: 203.13,
            grps: 4.8
          },
          {
            date: '03/21/16',
            spotLength: ':30',
            aur: 325,
            numberOfSpots: 3,
            revenue: 975,
            cpp: 203.13,
            grps: 4.8
          }]
        }]
      },
      {
        name: 'Sunday AM News @9',
        aur: 350,
        numberOfSpots: 3,
        revenue: 1050,
        cpp: 175,
        grps: 2,
        expanded: false,
        showTimes: [
        {
          time: 'Sun / 9:00 AM - 10:00 AM',
          expanded: false,
          dates: [
          {
            date: '02/08/16',
            spotLength: ':30',
            aur: 350,
            numberOfSpots: 1,
            revenue: 350,
            cpp: 175,
            grps: 2
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 350,
            numberOfSpots: 1,
            revenue: 350,
            cpp: 175,
            grps: 2
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 350,
            numberOfSpots: 1,
            revenue: 350,
            cpp: 175,
            grps: 2
          }]
        }]
      }]
    },
    {
      name: 'Prime Access',
      aur: 299,
      spots: 30,
      revenue: 8985,
      cpp: 333,
      rating: 1.2,
      grps: 27,
      expanded: false,
      shows: [
      {
        name: 'Access Hollywood ',
        aur: 265,
        numberOfSpots: 15,
        revenue: 4110,
        cpp: 331.25,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 07:00 PM - 07:30 PM',
          expanded: false,
          dates: [
          {
            date: '02/08/16',
            spotLength: ':30',
            aur: 265,
            numberOfSpots: 2,
            revenue: 530,
            cpp: 331.25,
            grps: 1.6
          },
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 265,
            numberOfSpots: 2,
            revenue: 530,
            cpp: 331.25,
            grps: 1.6
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 265,
            numberOfSpots: 2,
            revenue: 530,
            cpp: 331.25,
            grps: 1.6
          },
          {
            date: '03/07/16',
            spotLength: ':30',
            aur: 280,
            numberOfSpots: 3,
            revenue: 840,
            cpp: 350,
            grps: 2.4
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 280,
            numberOfSpots: 3,
            revenue: 840,
            cpp: 350,
            grps: 2.4
          },
          {
            date: '03/21/16',
            spotLength: ':30',
            aur: 280,
            numberOfSpots: 3,
            revenue: 840,
            cpp: 350,
            grps: 2.4
          }]
        },
        {
          time: 'M-F / 0:30 PM - 08:00 PM',
          expanded: false,
          dates: [
          {
            date: '02/08/16',
            spotLength: ':30',
            aur: 325,
            numberOfSpots: 3,
            revenue: 975,
            cpp: 325,
            grps: 3
          },
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 325,
            numberOfSpots: 3,
            revenue: 975,
            cpp: 325,
            grps: 3
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 325,
            numberOfSpots: 3,
            revenue: 975,
            cpp: 325,
            grps: 3
          },
          {
            date: '03/07/16',
            spotLength: ':30',
            aur: 325,
            numberOfSpots: 2,
            revenue: 650,
            cpp: 325,
            grps: 2
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 325,
            numberOfSpots: 2,
            revenue: 650,
            cpp: 325,
            grps: 2
          },
          {
            date: '03/21/16',
            spotLength: ':30',
            aur: 325,
            numberOfSpots: 2,
            revenue: 650,
            cpp: 325,
            grps: 2
          }]
        }]
      }]
    },
    {
      name: 'Prime',
      aur: 1358,
      spots: 10,
      revenue: 13575,
      cpp: 535,
      rating: 1.2,
      grps: 25,
      expanded: false,
      shows: [
      {
        name: 'American Idol',
        aur: 1358,
        numberOfSpots: 10,
        revenue: 13575,
        cpp: 53,
        expanded: false,
        showTimes: [
        {
          time: 'W / 8:00 PM - 9:00 PM',
          expanded: false,
          dates: [
          {
            date: '02/08/16',
            spotLength: ':30',
            aur: 1775,
            numberOfSpots: 1,
            revenue: 1775,
            cpp: 554.69,
            grps: 3.2
          },
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 1775,
            numberOfSpots: 1,
            revenue: 1775,
            cpp: 554.69,
            grps: 3.2
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 1775,
            numberOfSpots: 1,
            revenue: 1775,
            cpp: 554.69,
            grps: 3.2
          }]
        },
        {
          time: 'Th / 8:00 PM - 10:00 PM',
          expanded: false,
          dates: [
          {
            date: '02/08/16',
            spotLength: ':30',
            aur: 1870,
            numberOfSpots: 1,
            revenue: 1870,
            cpp: 550,
            grps: 3.4
          },
          {
            date: '02/22/16',
            spotLength: ':30',
            aur: 1870,
            numberOfSpots: 1,
            revenue: 1870,
            cpp: 550,
            grps: 3.4
          },
          {
            date: '03/07/16',
            spotLength: ':30',
            aur: 1870,
            numberOfSpots: 1,
            revenue: 1870,
            cpp: 550,
            grps: 3.4
          }]
        }]
      },
      {
        name: 'Brooklyn 9 9/The Grinder',
        aur: 570,
        numberOfSpots: 2,
        revenue: 1140,
        cpp: 518,
        expanded: false,
        showTimes: [
        {
          time: 'Tu / 9:00 PM - 10:00 AM',
          expanded: false,
          dates: [
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 570,
            numberOfSpots: 1,
            revenue: 570,
            cpp: 518,
            grps: 1.1
          },
          {
            date: '03/21/16',
            spotLength: ':30',
            aur: 570,
            numberOfSpots: 1,
            revenue: 570,
            cpp: 518,
            grps: 1.1
          }]
        }]
      },
      {
        name: 'Hell’s Kitchen',
        aur: 750,
        numberOfSpots: 2,
        revenue: 1500,
        cpp: 500,
        expanded: false,
        showTimes: [
        {
          time: 'F / 9:00 PM - 10:00 PM',
          expanded: false,
          dates: [
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 750,
            numberOfSpots: 1,
            revenue: 750,
            cpp: 500,
            grps: 1.5
          },
          {
            date: '03/21/16',
            spotLength: ':30',
            aur: 750,
            numberOfSpots: 1,
            revenue: 750,
            cpp: 500,
            grps: 1.5
          }]
        }]
      }]
    },
    {
      name: 'Late News',
      aur: 1208,
      spots: 14,
      revenue: 18570,
      cpp: 503,
      rating: 1.2,
      grps: 36.8,
      expanded: false,
      shows: [
      {
        name: 'Late News @10',
        aur: 1415,
        numberOfSpots: 12,
        revenue: 16980,
        cpp: 505.36,
        expanded: false,
        showTimes: [
        {
          time: 'M-F / 10:00 PM - 11:00 PM',
          expanded: false,
          dates: [
          {
            date: '02/08/16',
            spotLength: ':30',
            aur: 1415,
            numberOfSpots: 3,
            revenue: 4245,
            cpp: 505.36,
            grps: 8.4
          },
          {
            date: '02/15/16',
            spotLength: ':30',
            aur: 1415,
            numberOfSpots: 3,
            revenue: 4245,
            cpp: 505.36,
            grps: 8.4
          },
          {
            date: '03/07/16',
            spotLength: ':30',
            aur: 1415,
            numberOfSpots: 3,
            revenue: 4245,
            cpp: 505.36,
            grps: 8.4
          },
          {
            date: '03/14/16',
            spotLength: ':30',
            aur: 1415,
            numberOfSpots: 3,
            revenue: 4245,
            cpp: 505.36,
            grps: 8.4
          }]
        }]
      },
      {
        name: 'Sat. Late News @10',
        aur: 795,
        numberOfSpots: 1,
        revenue: 1590,
        cpp: 496.88,
        expanded: false,
        showTimes: [
        {
          time: 'Sa / 10:00 PM - 11:00 PM',
          expanded: false,
          dates: [
          {
            date: '02/08/16',
            spotLength: ':30',
            aur: 795,
            numberOfSpots: 1,
            revenue: 795,
            cpp: 496.88,
            grps: 1.6
          },
          {
            date: '03/07/16',
            spotLength: ':30',
            aur: 795,
            numberOfSpots: 1,
            revenue: 795,
            cpp: 496.88,
            grps: 1.6
          }]
        }]
      }]
    }],
    expanded: false,
    versions: [
    {
      id: 1,
      dateSubmitted: '01/25/17',
      timeSubmitted: '04:25 PM',
      submittedBy: 'Emily Jackson',
      programs: [
      {
        name: 'Morning News @ 6',
        time: '06:00 AM — 07:00 AM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '03/25/16',
        rate: 360,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 8,
        totalSpots: 16,
        totalCost: 5760,
        buyerRating: 1.9,
        videaRating: 2,
        totalRatings: 30.4
      },
      {
        name: 'Morning News @ 7',
        time: '07:00 AM — 09:00 AM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '02/16/16',
        rate: 310,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 12,
        totalCost: 3720,
        buyerRating: 1.6,
        videaRating: 1.6,
        totalRatings: 19.2
      },
      {
        name: 'Morning News @ 7',
        time: '07:00 AM — 09:00 AM',
        length: ':30',
        flightStart: '02/29/16',
        flightEnd: '03/25/16',
        rate: 325,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 12,
        totalCost: 3900,
        buyerRating: 1.6,
        videaRating: 1.6,
        totalRatings: 19.2
      },
      {
        name: 'Sunday AM News @9',
        time: '09:00 AM — 10:00 AM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '03/18/16',
        rate: 350,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          0,
          0,
          1
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 1
        }],
        weeks: 4,
        totalSpots: 4,
        totalCost: 1400,
        buyerRating: 2,
        videaRating: 2.2,
        totalRatings: 8
      },
      {
        name: 'Access Hollywood',
        time: '07:00 PM — 07:30 PM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '02/26/16',
        rate: 265,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 8,
        totalCost: 2120,
        buyerRating: 0.8,
        videaRating: 0.8,
        totalRatings: 6.4
      },
      {
        name: 'Access Hollywood',
        time: '07:00 PM — 07:30 PM',
        length: ':30',
        flightStart: '02/29/16',
        flightEnd: '03/25/16',
        rate: 280,
        weeklySpots: 3,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 12,
        totalCost: 3360,
        buyerRating: 0.8,
        videaRating: 0.8,
        totalRatings: 9.6
      },
      {
        name: 'Modern Family',
        time: '07:30 PM — 08:00 PM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '03/25/16',
        rate: 325,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 12,
        totalCost: 3900,
        buyerRating: 1,
        videaRating: 1,
        totalRatings: 12
      },
      {
        name: 'Modern Family',
        time: '07:30 PM — 08:00 PM',
        length: ':30',
        flightStart: '02/15/16',
        flightEnd: '03/18/16',
        rate: 325,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 8,
        totalCost: 2600,
        buyerRating: 1,
        videaRating: 1,
        totalRatings: 8
      },
      {
        name: 'Late News @10',
        time: '10:00 PM — 11:00 PM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '03/16/16',
        rate: 1415,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 6,
        totalSpots: 18,
        totalCost: 25470,
        buyerRating: 2.8,
        videaRating: 2.8,
        totalRatings: 50.4
      },
      {
        name: 'Sat. Late News @10',
        time: '10:00 PM — 11:00 PM',
        length: ':30',
        flightStart: '02/06/16',
        flightEnd: '03/07/16',
        rate: 795,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          0,
          1,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 1
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 4,
        totalCost: 3180,
        buyerRating: 1.6,
        videaRating: 1.6,
        totalRatings: 6.4
      }]
    },
    {
      id: 2,
      dateSubmitted: '02/03/16',
      timeSubmitted: '09:39 PM',
      submittedBy: 'Emily Jackson',
      programs: [
      {
        name: 'Morning News @ 6',
        time: '06:00 AM — 07:00 AM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '03/25/16',
        rate: 360,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 8,
        totalSpots: 16,
        totalCost: 5760,
        buyerRating: 1.9,
        videaRating: 2,
        totalRatings: 30.4
      },
      {
        name: 'Morning News @ 7',
        time: '07:00 AM — 09:00 AM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '02/16/16',
        rate: 310,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 12,
        totalCost: 3720,
        buyerRating: 1.6,
        videaRating: 1.6,
        totalRatings: 19.2
      },
      {
        name: 'Morning News @ 7',
        time: '07:00 AM — 09:00 AM',
        length: ':30',
        flightStart: '02/29/16',
        flightEnd: '03/25/16',
        rate: 325,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 12,
        totalCost: 3900,
        buyerRating: 1.6,
        videaRating: 1.6,
        totalRatings: 19.2
      },
      {
        name: 'Sunday AM News @9',
        time: '09:00 AM — 10:00 AM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '03/18/16',
        rate: 350,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          0,
          0,
          1
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 1
        }],
        weeks: 4,
        totalSpots: 4,
        totalCost: 1400,
        buyerRating: 2,
        videaRating: 2.2,
        totalRatings: 8
      },
      {
        name: 'Access Hollywood',
        time: '07:00 PM — 07:30 PM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '02/26/16',
        rate: 265,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 8,
        totalCost: 2120,
        buyerRating: 0.8,
        videaRating: 0.8,
        totalRatings: 6.4
      },
      {
        name: 'Access Hollywood',
        time: '07:00 PM — 07:30 PM',
        length: ':30',
        flightStart: '02/29/16',
        flightEnd: '03/25/16',
        rate: 280,
        weeklySpots: 3,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 12,
        totalCost: 3360,
        buyerRating: 0.8,
        videaRating: 0.8,
        totalRatings: 9.6
      },
      {
        name: 'Modern Family',
        time: '07:30 PM — 08:00 PM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '03/25/16',
        rate: 325,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 12,
        totalCost: 3900,
        buyerRating: 1,
        videaRating: 1,
        totalRatings: 12
      },
      {
        name: 'Modern Family',
        time: '07:30 PM — 08:00 PM',
        length: ':30',
        flightStart: '02/15/16',
        flightEnd: '03/18/16',
        rate: 325,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 8,
        totalCost: 2600,
        buyerRating: 1,
        videaRating: 1,
        totalRatings: 8
      },
      {
        name: 'American Idol — Wed',
        time: '08:00 PM — 09:00 PM',
        length: ':30',
        flightStart: '02/10/16',
        flightEnd: '03/16/16',
        rate: 1775,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          1,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 3,
        totalCost: 5325,
        buyerRating: 3.2,
        videaRating: 3.5,
        totalRatings: 9.6
      },
      {
        name: 'American Idol — Thu',
        time: '08:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '02/04/16',
        flightEnd: '03/10/16',
        rate: 1870,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 4,
        totalCost: 7480,
        buyerRating: 3.4,
        videaRating: 3.6,
        totalRatings: 13.6
      },
      {
        name: 'Brooklyn 9 9/The Grinder',
        time: '09:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '03/15/16',
        flightEnd: '03/22/16',
        rate: 570,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          1,
          0,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 2,
        totalCost: 1140,
        buyerRating: 1.1,
        videaRating: 1.1,
        totalRatings: 2.2
      },
      {
        name: 'Hell’s Kitchen',
        time: '09:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '03/11/16',
        flightEnd: '03/25/16',
        rate: 750,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 3,
        totalCost: 2250,
        buyerRating: 1.5,
        videaRating: 1.8,
        totalRatings: 4.5
      },
      {
        name: 'Late News @10',
        time: '10:00 PM — 11:00 PM',
        length: ':30',
        flightStart: '02/01/16',
        flightEnd: '03/18/16',
        rate: 1415,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 6,
        totalSpots: 18,
        totalCost: 25570,
        buyerRating: 2.8,
        videaRating: 2.8,
        totalRatings: 50.4
      },
      {
        name: 'Sat. Late News @10',
        time: '10:00 PM — 11:00 PM',
        length: ':30',
        flightStart: '02/06/16',
        flightEnd: '03/07/16',
        rate: 795,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          0,
          1,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 1
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 4,
        totalCost: 3180,
        buyerRating: 1.6,
        videaRating: 1.6,
        totalRatings: 6.4
      }]
    },
    {
      id: 3,
      dateSubmitted: '02/21/17',
      timeSubmitted: '02:04 PM',
      submittedBy: 'Emily Jackson',
      programs: [
      {
        name: 'Morning News @ 6',
        time: '06:00 AM — 07:00 AM',
        length: ':30',
        flightStart: '02/08/16',
        flightEnd: '03/25/16',
        rate: 360,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 6,
        totalSpots: 12,
        totalCost: 4320,
        buyerRating: 1.9,
        videaRating: 2,
        totalRatings: 22.8
      },
      {
        name: 'Morning News @ 7',
        time: '07:00 AM — 09:00 AM',
        length: ':30',
        flightStart: '02/08/16',
        flightEnd: '02/22/16',
        rate: 310,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 9,
        totalCost: 2790,
        buyerRating: 1.6,
        videaRating: 1.6,
        totalRatings: 14.4
      },
      {
        name: 'Morning News @ 7',
        time: '07:00 AM — 09:00 AM',
        length: ':30',
        flightStart: '03/07/16',
        flightEnd: '03/25/16',
        rate: 325,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 9,
        totalCost: 2925,
        buyerRating: 1.6,
        videaRating: 1.6,
        totalRatings: 14.4
      },
      {
        name: 'Sunday AM News @9',
        time: '09:00 AM — 10:00 AM',
        length: ':30',
        flightStart: '02/08/16',
        flightEnd: '03/14/16',
        rate: 350,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          0,
          0,
          1
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 1
        }],
        weeks: 3,
        totalSpots: 3,
        totalCost: 1050,
        buyerRating: 2,
        videaRating: 2.2,
        totalRatings: 6
      },
      {
        name: 'Access Hollywood',
        time: '07:00 PM — 07:30 PM',
        length: ':30',
        flightStart: '02/08/16',
        flightEnd: '02/22/16',
        rate: 265,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 6,
        totalCost: 1590,
        buyerRating: 0.8,
        videaRating: 0.8,
        totalRatings: 4.8
      },
      {
        name: 'Access Hollywood',
        time: '07:00 PM — 07:30 PM',
        length: ':30',
        flightStart: '03/07/16',
        flightEnd: '03/21/16',
        rate: 280,
        weeklySpots: 3,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 9,
        totalCost: 2520,
        buyerRating: 0.8,
        videaRating: 0.8,
        totalRatings: 7.2
      },
      {
        name: 'Modern Family',
        time: '07:30 AM — 08:00 AM',
        length: ':30',
        flightStart: '02/08/16',
        flightEnd: '03/21/16',
        rate: 325,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          0,
          1,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 9,
        totalCost: 2925,
        buyerRating: 1,
        videaRating: 1,
        totalRatings: 9
      },
      {
        name: 'Modern Family',
        time: '07:30 PM — 09:00 PM',
        length: ':30',
        flightStart: '02/15/16',
        flightEnd: '03/14/16',
        rate: 325,
        weeklySpots: 2,
        weekdayCounts: [
          0,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 6,
        totalCost: 1950,
        buyerRating: 1,
        videaRating: 1,
        totalRatings: 6
      },
      {
        name: 'American Idol — Wed',
        time: '08:00 PM — 09:00 PM',
        length: ':30',
        flightStart: '02/08/16',
        flightEnd: '03/14/16',
        rate: 1775,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          1,
          0,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 1
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 3,
        totalCost: 5325,
        buyerRating: 3.2,
        videaRating: 3.5,
        totalRatings: 9.6
      },
      {
        name: 'American Idol — Thu',
        time: '08:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '02/08/16',
        flightEnd: '03/07/16',
        rate: 1870,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 3,
        totalSpots: 3,
        totalCost: 5610,
        buyerRating: 3.4,
        videaRating: 3.6,
        totalRatings: 10.2
      },
      {
        name: 'Brookyln Nine-Nine / The Grinder',
        time: '09:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '03/14/16',
        flightEnd: '03/21/16',
        rate: 570,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 2,
        totalCost: 1140,
        buyerRating: 1.1,
        videaRating: 1.1,
        totalRatings: 2.2
      },
      {
        name: 'Hell’s Kitchen',
        time: '09:00 PM — 10:00 PM',
        length: ':30',
        flightStart: '03/14/16',
        flightEnd: '03/21/16',
        rate: 750,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          1,
          0,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 1
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 2,
        totalCost: 1500,
        buyerRating: 1.5,
        videaRating: 1.8,
        totalRatings: 3
      },
      {
        name: 'Late News @10',
        time: '10:00 PM — 11:00 PM',
        length: ':30',
        flightStart: '02/08/16',
        flightEnd: '03/14/16',
        rate: 1415,
        weeklySpots: 3,
        weekdayCounts: [
          1,
          1,
          0,
          1,
          0,
          0,
          0
        ],
        weekdays: [
        {
          monday: 1
        },
        {
          tuesday: 1
        },
        {
          wednesday: 0
        },
        {
          thursday: 1
        },
        {
          friday: 0
        },
        {
          saturday: 0
        },
        {
          sunday: 0
        }],
        weeks: 4,
        totalSpots: 12,
        totalCost: 16980,
        buyerRating: 2.8,
        videaRating: 2.8,
        totalRatings: 33.6
      },
      {
        name: 'Sat. Late News @10',
        time: '10:00 PM — 11:00 PM',
        length: ':30',
        flightStart: '02/08/16',
        flightEnd: '03/07/16',
        rate: 795,
        weeklySpots: 1,
        weekdayCounts: [
          0,
          0,
          0,
          0,
          0,
          1,
          0
        ],
        weekdays: [
        {
          monday: 0
        },
        {
          tuesday: 0
        },
        {
          wednesday: 0
        },
        {
          thursday: 0
        },
        {
          friday: 0
        },
        {
          saturday: 1
        },
        {
          sunday: 0
        }],
        weeks: 2,
        totalSpots: 2,
        totalCost: 1590,
        buyerRating: 1.6,
        videaRating: 1.6,
        totalRatings: 3.2
      }]
    }],
    offers: [
    {
      id: 12676,
      orderId: 131542,
      stationOrderNumber: 154703,
      flightStart: '01/09/17',
      flightEnd: '02/12/17',
      overdue: true,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 1100,
      makegoodNumber: 12676,
      dateMakegoodSent: '05/23/16',
      dateTimeOfferDue: '05/25/16',
      stationAction: 'Accept/Reject',
      offerType: 'Makegood',
      offerStatus: 'pending',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'pending',
      agencyNotes: '',
      acceptedByStation: 'pending',
      stationNotes: '',
      agency: 'The Media Masters Group',
      advertiser: 'Metro Wireless',
      campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
      cpe: 'MEW-GEN-23',
      videaOrderDetail: 'V00012543',
      videaOrderNumber: 131542,
      preempts: [
      {
        buyLine: 4,
        spotNumber: 1,
        programPlaced: 'Network 23 News @ 5',
        status: 'confirmed',
        priority: 1,
        airDay: 'Tuesday',
        airDate: '01/10/17',
        airTime: '05:00 PM',
        spotLength: ':30',
        spotRate: 550,
        buyerRating: 1.8,
        comment: 'Technical Difficulties'
      },
      {
        buyLine: 6,
        spotNumber: 1,
        programPlaced: 'Network 23 News @ 5',
        status: 'confirmed',
        priority: 1,
        airDay: 'Thursday',
        airDate: '01/12/17',
        airTime: '05:00 PM',
        spotLength: ':30',
        spotRate: 550,
        buyerRating: 1.8,
        comment: 'Weather'
      }],
      makegoods: [
      {
        lineNumber: 1,
        program: 'Network 23 News @ 5',
        startTime: '05:00 PM',
        endTime: '06:00 PM',
        days: 'M-F',
        spotLength: ':30',
        offeredSpots: 2,
        spotRate: 550,
        stationRating: 1.8,
        comment: ''
      }]
    },
    {
      id: 12389,
      orderId: 131642,
      stationOrderNumber: 178269,
      flightStart: '01/09/17',
      flightEnd: '02/19/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 300,
      makegoodNumber: 12389,
      dateMakegoodSent: '11/22/16',
      dateTimeOfferDue: '11/24/16',
      stationAction: 'Accept/Reject',
      offerType: 'Makegood',
      offerStatus: 'pending',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'pending',
      stationNotes: '',
      agency: 'Auto Advertising Partners',
      advertiser: 'Southeast Ford',
      campaignName: 'WASHI WVVV FSE-END-22 Q1 17',
      cpe: 'FSE-END-22',
      videaOrderDetail: 'V00012321',
      videaOrderNumber: 131642
    },
    {
      id: 12674,
      orderId: 131542,
      stationOrderNumber: 154703,
      flightStart: '01/09/17',
      flightEnd: '02/12/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 0,
      makegoodNumber: 12674,
      dateMakegoodSent: '11/09/16',
      dateTimeOfferDue: '11/11/16',
      stationAction: 'N/A',
      offerType: 'Bonus',
      offerStatus: 'confirmed',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'confirmed',
      stationNotes: '',
      agency: 'The Media Masters Group',
      advertiser: 'Metro Wireless',
      campaignName: 'WASHI WVVV MEW-GEN-23 Q1 17',
      cpe: 'MEW-GEN-23',
      videaOrderDetail: 'V00012543',
      videaOrderNumber: 131542
    },
    {
      id: 12375,
      orderId: 133529,
      stationOrderNumber: 193847,
      flightStart: '12/26/16',
      flightEnd: '01/29/17',
      overdue: false,
      product: '',
      estimate: 57,
      primaryDemo: 'A25-54',
      totalRevenue: 12345,
      totalGrps: 123,
      totalSpots: 100,
      buyerName: 'John Doe',
      repName: 'Jane Doe',
      dealType: 'Cash',
      version: 1,
      scheduleType: 'Weekly',
      makegoodTotal: 2500,
      makegoodNumber: 12375,
      dateMakegoodSent: '10/31/16',
      dateTimeOfferDue: '11/02/16',
      stationAction: 'N/A',
      offerType: 'Program Change',
      offerStatus: 'confirmed',
      agencyOrderNumber: 56789,
      acceptedByAgency: 'confirmed',
      agencyNotes: '',
      acceptedByStation: 'confirmed',
      stationNotes: '',
      agency: 'Zone Group Advertising',
      advertiser: 'Papa John’s Pizza',
      campaignName: 'WASHI WVVV PJP-HOL-8 Q1 17',
      cpe: 'PJP-HOL-8',
      videaOrderDetail: 'V00012341',
      videaOrderNumber: 133529
    }]
  }
]
