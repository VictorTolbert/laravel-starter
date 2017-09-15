// const faker = require('faker')
const _ = require('lodash')
// const moment = require('moment')

module.exports = _.times(30, function (n) {
    return {
        id: 1,
        daypart: 'Early Morning',
        program: 'Network23 6a News',
        air: 'M-F/6:00 AM - 7:00 AM',
        aur_this_year: 450,
        aur_last_year: 0,
        revenue_this_year: 14060,
        revenue_last_year: 0,
        spot_count: 38
    }
})
