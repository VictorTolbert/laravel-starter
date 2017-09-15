function dynamicPropsFn (route) {
  const now = new Date()
  return {
    name: (now.getFullYear() + parseInt(route.params.years)) + '!'
  }
}

module.exports = [
  {
    path: '/sellers/order-management/pending-orders',
    name: 'sellers-order-management-pending-orders',
    component: require('@/pages/sellers/order-management/pending-orders'),
    props: { name: 'world' },
    meta: { helpId: 1421 }
  }, // static values
  {
    path: '/sellers/order-management/pending-orders/:id',
    name: 'sellers-order-management-pending-orders-id',
    component: require('@/pages/sellers/order-management/pending-orders/_id'),
    props: true,
    meta: { helpId: 1351 }
  }, // Pass route.params to props
  {
    path: '/sellers/order-management/pending-makegoods',
    name: 'sellers-order-management-pending-makegoods',
    component: require('@/pages/sellers/order-management/pending-makegoods'),
    meta: { helpId: 1262 }
  },
  {
    path: '/sellers/order-management/pending-makegoods/:id',
    name: 'sellers-order-management-pending-makegoods-id',
    component: require('@/pages/sellers/order-management/pending-makegoods/_id'),
    meta: { helpId: 1262 }
  },
  {
    path: '/sellers/order-management/pending-makegoods/:id/:offer',
    name: 'sellers-order-management-pending-makegoods-id-offer',
    component: require('@/pages/sellers/order-management/pending-makegoods/_id/offer'),
    meta: { helpId: 1017 }
  },
  {
    path: '/sellers/order-management/open-preempts',
    name: 'sellers-order-management-open-preempts',
    component: require('@/pages/sellers/order-management/open-preempts'),
    meta: { helpId: 1269 }
  },
  {
    path: '/sellers/order-management/order-search',
    name: 'sellers-order-management-order-search',
    component: require('@/pages/sellers/order-management/order-search'),
    meta: { helpId: 1274 }
  },
  {
    path: '/sellers/order-management/order-search/:id',
    name: 'sellers-order-management-order-search-id',
    component: require('@/pages/sellers/order-management/order-search/_id'),
    meta: { helpId: null }
  },
  {
    path: '/sellers/reporting/program-revenue',
    name: 'sellers-reporting-program-revenue',
    component: require('@/pages/sellers/reporting/program-revenue'),
    meta: { helpId: 1426 }
  },
  {
    path: '/sellers/reporting/account-performance',
    name: 'sellers-reporting-account-performance',
    component: require('@/pages/sellers/reporting/account-performance'),
    meta: { helpId: 1347 }
  },
  {
    path: '/sellers/reporting/order-reporting',
    name: 'sellers-reporting-order-reporting',
    component: require('@/pages/sellers/reporting/order-reporting'),
    meta: { helpId: 1055 }
  },
  {
    path: '/sellers/reporting/order-reporting/:id',
    name: 'sellers-reporting-order-reporting-id',
    component: require('@/pages/sellers/reporting/order-reporting/_id'),
    meta: { helpId: 1052 }
  },
  {
    path: '/sellers/price-guide',
    name: 'sellers-price-guide',
    component: require('@/pages/sellers/price-guide'),
    meta: { helpId: 1304 }
    // children: [
    //   {
    //     path: '',
    //     name: 'sellers-price-guide-id',
    //     component: require('@/pages/sellers/price-guide/_id'),
    //     props: dynamicPropsFn
    //   } // custom logic for mapping between route and props
    // ]
  },
  {
    path: '/sellers/avails',
    name: 'sellers-avails',
    component: require('@/pages/sellers/avails'),
    meta: { helpId: 1226 }
  },
  {
    path: '/sellers/avails/:id',
    name: 'sellers-avails-id',
    component: require('@/pages/sellers/avails/_id'),
    meta: { helpId: 1222 }
  },
  {
    path: '/sellers/avails/:id/edit',
    name: 'sellers-avails-id-edit',
    component: require('@/pages/sellers/avails/_id/edit'),
    meta: { helpId: null }
  },
  {
    path: '/sellers/campaign-performance',
    name: 'sellers-campaign-performance',
    component: require('@/pages/sellers/campaign-performance'),
    meta: { helpId: 1089 }
  },
  {
    path: '/sellers/campaign-performance/:id',
    name: 'sellers-campaign-performance-id',
    component: require('@/pages/sellers/campaign-performance/_id'),
    meta: { helpId: 1087 }
  },
  {
    path: '/settings',
    name: 'settings',
    component: require('@/pages/settings'),
    meta: { helpId: null },
    children: [
      {
        path: 'user',
        name: 'settings-user',
        component: require('@/pages/settings/user'),
        meta: { helpId: 1369 }
      },
      {
        path: 'specials',
        name: 'settings-specials',
        component: require('@/pages/settings/specials'),
        meta: { helpId: 1336 }
      },
      {
        path: 'premium-advertisers',
        name: 'settings-premium-advertisers',
        component: require('@/pages/settings/premium-advertisers'),
        meta: { helpId: null }
      },
      {
        path: 'reps',
        name: 'settings-reps',
        component: require('@/pages/settings/reps'),
        meta: { helpId: 1312 }
      },
      {
        path: 'display',
        name: 'settings-display',
        component: require('@/pages/settings/display'),
        meta: { helpId: 1376 }
      }
    ]
  }

]
