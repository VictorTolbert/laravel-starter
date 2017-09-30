module.exports = function () {
    const faker = require('faker')
    const _ = require('lodash')

    return {
        people: _.times(100, function (n) {
          return {
            id: n,
            name: faker.name.findName(),
            avatar: faker.internet.avatar()
          }
        }),
        avails: require('./avails'),
        barChart: require('./bar-chart'),
        colors: require('./colors'),
        demo: require('./demo'),
        clients: require('./clients'),
        clientColumns: require('./client-columns'),
        components: require('./components'),
        data: require('./data'),
        dayparts: require('./dayparts'),
        doughnutChart: require('./doughnut-chart'),
        elements: require('./elements'),
        form: require('./form'),
        grid: require('./grid'),
        icons: require('./icons'),
        images: require('./images'),
        layout: require('./layout'),
        lineChart: require('./line-chart'),
        logos: require('./logos'),
        markets: require('./markets'),
        navItems: require('./nav-items'),
        notices: require('./notices'),
        orderManagementMenu: require('./order-management-menu'),
        orders: require('./orders'),
        overview: require('./overview'),
        packages: require('./packages'),
        patterns: require('./patterns'),
        pieChart: require('./pie-chart'),
        priceGuide: require('./price-guide'),
        reportingMenu: require('./reporting-menu'),
        sections: require('./sections'),
        stationGroups: require('./station-groups'),
        stations: require('./stations'),
        tags: require('./tags'),
        team: require('./team'),
        tokens: require('./tokens'),
        productTeam: require('./product-team'),
        designTeam: require('./design-team'),
        tickets: require('./tickets'),
        typography: require('./typography'),
        vectors: require('./vectors'),
    }
}
