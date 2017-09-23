import Vue from 'vue'
import axios from 'axios'
import moment from 'moment'

window.Vue = Vue
window.axios = axios
window.moment = moment
// Object.defineProperty(Vue.prototype, '$http', { value: axios })
// Object.defineProperty(Vue.prototype, '$moment', { value: moment })

window.axios.defaults.baseURL = 'https://api.videa.design'
window.axios.defaults.headers.common = { 'X-Requested-With': 'XMLHttpRequest' }

import App from './App'

import { sync } from 'vuex-router-sync'
import store from './store'
import router from './router'
sync(store, router)

// import VuiVue from "vui-vue"
// import "vui-vue/dist/vui-vue.css"
// Vue.use(VuiVue)

import Buefy from 'buefy'
import VueClipboard from 'vue-clipboard2'
import VueProgressBar from 'vue-progressbar'
import hljs from 'highlight.js'

import 'chart.js'
import 'hchs-vue-charts'
Vue.use(window.VueCharts)

import { TableComponent, TableColumn } from 'vue-table-component'
import { EditorWindow, BrowserWindow } from 'vue-windows'

import VueAnalytics from 'vue-analytics'
Vue.use(VueAnalytics, {
  id: 'UA-91055240-1',
  router
})

Vue.config.productionTip = false

Vue.use(Buefy)
Vue.use(VueClipboard)
Vue.use(VueProgressBar, {
    color: '#7957d5',
    failedColor: '#ff3860',
    transition: {
        speed: '0.2s',
        opacity: '0.1s'
    }
})

Vue.directive('highlight', {
    deep: true,
    bind (el, binding) {
        // on first bind, highlight all targets
        const targets = el.querySelectorAll('code')
        for (const target of Array.from(targets)) {
            // if a value is directly assigned to the directive, use this
            // instead of the element content.
            if (binding.value) {
                target.innerHTML = binding.value
            }
            hljs.highlightBlock(target)
        }
    },
    componentUpdated (el, binding) {
        // after an update, re-fill the content and then highlight
        const targets = el.querySelectorAll('code')
        for (const target of Array.from(targets)) {
            if (binding.value) {
                target.innerHTML = binding.value
                hljs.highlightBlock(target)
            }
        }
    }
})

Vue.filter('pre', (text) => {
    if (!text) return

    // Remove first blank line
    text = text.replace(/^\s*[\r\n]/g, '')

    // Find how many whitespaces before the first character of the first line
    const whitespaces = /^[ \t]*./.exec(text).toString().slice(0, -1)

    // Replace first occurrance of whitespace on each line
    let newText = []
    text.split(/\r\n|\r|\n/).forEach((line) => {
        newText.push(line.replace(whitespaces, ''))
    })
    newText = newText.join('\r\n')

    return newText
})

Vue.component('MenuList', require('@/components/MenuList'))
Vue.component('Card', require('@/components/Card'))
Vue.component('Help', require('@/components/Help'))
Vue.component('Hero', require('@/components/Hero'))
Vue.component('ImagePlaceholder', require('@/components/ImagePlaceholder'))
Vue.component('DaypartSelector', require('@/components/DaypartSelector'))
Vue.component('FeaturesTable', require('@/components/FeaturesTable'))
Vue.component('Datepicker', require('vuejs-datepicker'))
Vue.component('Device', require('@/components/Device'))
Vue.component('HelpLink', require('@/components/HelpLink'))
Vue.component('EditorWindow', EditorWindow)
Vue.component('BrowserWindow', BrowserWindow)
Vue.component('table-component', TableComponent)
Vue.component('table-column', TableColumn)

Vue.component('Orders', require('@/components/Orders'))

Vue.component('PendingOrders', require('@/components/PendingOrders'))
Vue.component('PendingMakegoods', require('@/components/PendingMakegoods'))
Vue.component('OpenPreempts', require('@/components/OpenPreempts'))
Vue.component('OrderSearch', require('@/components/OrderSearch'))

Vue.component('AccountPerformance', require('@/components/AccountPerformance'))
Vue.component('OrderReporting', require('@/components/OrderReporting'))
Vue.component('ProgramRevenue', require('@/components/ProgramRevenue'))

Vue.component('Avails', require('@/components/Avails'))
Vue.component('CampaignPerformance', require('@/components/CampaignPerformance'))
Vue.component('PriceGuide', require('@/components/PriceGuide'))

// import * as filters from './util/filters'
// // register global utility filters.
// Object.keys(filters).forEach(key => {
//   Vue.filter(key, filters[key])
// })

Vue.filter('formatRating', require('@/filters/format-rating'))
Vue.filter('decimalToPercent', require('@/filters/decimal-to-percent'))
Vue.filter('currency', require('@/filters/currency'))

export const EventBus = new Vue()

router.beforeEach((to, from, next) => {
    EventBus.$emit('routeBeforeEach', to, from)
    next()
})

/**
 * Since Google Analytics's default tracking code doesn't play nice with
 * single-page-applications, we're gonna use this one. What it does
 * is simple running after after navigating to the new routes.
 */
// router.afterEach((to, from) => {
//     (function(i, s, o, g, r, a, m) {
//         i['GoogleAnalyticsObject'] = r;
//         i[r] = i[r] || function() {
//             (i[r].q = i[r].q || []).push(arguments)
//         }, i[r].l = 1 * new Date();
//         a = s.createElement(o),
//             m = s.getElementsByTagName(o)[0];
//         a.async = 1;
//         a.src = g;
//         m.parentNode.insertBefore(a, m)
//     })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

//    ga('create', 'UA-89431807-1', 'auto');

//    ga('set', 'page', to.path);
//    ga('send', 'pageview');
// })

/* eslint-disable no-new */
new Vue({
    el: '#app',
    router,
    store,
    template: '<App/>',
    components: { App }
})
