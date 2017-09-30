const moment = require('moment')

module.exports = {
    demo: {
        columns: [
            {
                title: 'ID',
                field: 'id',
                meta: { icon: null },
                width: '',
                isVisible: true,
                isSortable: true,
                isNumeric: true,
                isCentered: false
            },
            {
                title: 'First Name',
                field: 'first_name',
                meta: { icon: null },
                width: '',
                isVisible: true,
                isSortable: true,
                isNumeric: false,
                isCentered: false
            },
            {
                title: 'Last Name',
                field: 'last_name',
                meta: { icon: null },
                width: '',
                isVisible: true,
                isSortable: true,
                isNumeric: false,
                isCentered: false
            },
            {
                title: 'Date',
                field: 'date',
                meta: { icon: null },
                width: '200',
                isVisible: true,
                isSortable: true,
                isNumeric: false,
                isCentered: false
            },
            {
                title: 'Gender',
                field: 'gender',
                meta: { icon: null },
                width: '50',
                isVisible: true,
                isSortable: true,
                isNumeric: false,
                isCentered: false
            }
        ],
        data: [
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
                buyerOrderComment:
                    'THIS ORDER IS MADE UNDER AND IS SUBJECT TO AAAA TERMS AND CONDITIONS FOR LOCAL BROADCAST.  STATION INVOICES TO: SAATCHI & SAATCHI C/O OF RESOURCES 27-01 QUEENS PLAZA NORTH, LONG ISLAND CITY, NY 11101-4020 AS AGENT FOR THE CLIENT MUST INCLUDE REFERENCE NUMBER THE PRICING, BUDGETS, ADVERTISING CREATIVE DELIVERED AND ALL OTHER INFORMATION ALREADY PROVIDED OR TO BE PROVIDED BY/FOR ADVERTISER IN CONNECTION WITH THIS ORDER, WHICH UNDER THE CIRCUMSTANCES SURROUNDING THE DISCLOSURE WOULD BE REASONABLY DEEMED CONFIDENTIAL OR PROPRIETARY SHALL BE DEEMED "AGENCY CONFIDENTIAL INFORMATION." AGENCY CONFIDENTIAL INFORMATION SHALL NOT:(I)BE PUBLISHED PRIOR TO THE DATE AUTHORIZED IN THE ORDER;(II)BE RELEASED:(X)TO ANYONE EXCEPT AN EMPLOYEE, OR AGENT WHO HAS A NEED TO KNOW SAME, AND WHO IS BOUND BY CONFIDENTIALITY OBLIGATIONS; OR (II) FOR ANY PURPOSE OTHER THAN THOSE PROVIDED FOR UNDER THIS ORDER.  PLEASE BOOK PENDING CLIENT APPROVAL  All Invoices to new billing address: Resources 27-01 Queens Plaza North Long Island City, NY 11101-4020 Telephone #: 646-935-4700 *Agent for Saatchi & Saatchi; Agent for Client* All electronic invoices should be sent to Saatchi and Saatchi\'s IDB #155 Order passed validation- please see line comments.  Please approve',
                salesOffice: 'Videa',
                salesOfficeLocation: 'Atlanta',
                salesPerson: 'Brian Reed',
                cpe: 'PHC-HEA-57',
                campaign: 'PIE-HEA-57 Q116',
                product: 'HEA',
                flightStart: '05/15/17',
                flightEnd: '06/25/17',
                updated: moment()
                    .subtract(1, 'weeks')
                    .format('MM/DD/YY'),
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
                                weekdayCounts: [0, 1, 0, 1, 0, 0, 0],
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
                                weekdayCounts: [1, 0, 1, 0, 1, 0, 0],
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
                                weekdayCounts: [1, 0, 1, 0, 1, 0, 0],
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
                                weekdayCounts: [1, 1, 1, 1, 0, 0, 0],
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
                                weekdayCounts: [0, 1, 1, 1, 1, 0, 0],
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
                                weekdayCounts: [0, 1, 0, 1, 0, 0, 0],
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
                                weekdayCounts: [0, 1, 0, 1, 0, 0, 0],
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
                                weekdayCounts: [0, 1, 1, 1, 0, 0, 0],
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
                                weekdayCounts: [1, 0, 1, 0, 1, 0, 0],
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
                                weekdayCounts: [1, 0, 1, 1, 1, 0, 0],
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
                                weekdayCounts: [1, 0, 1, 0, 1, 0, 0],
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
            }
        ]
    }
}
