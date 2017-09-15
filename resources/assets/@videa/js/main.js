import Vue from 'vue'
import axios from 'axios'
import moment from 'moment'

window.Vue = Vue
window.axios = axios
window.moment = moment

window.EventBus = new Vue()

window.axios.defaults.baseURL = 'http://localhost:3000'
window.axios.defaults.headers.common = { 'X-Requested-With': 'XMLHttpRequest' }

import Components from '@/components'
Components.registerAllGlobalComponents()

import Filters from '@/filters'
Filters.registerAllGlobalFilters()

Vue.config.productionTip = false

import router from './router'
import store from './store'
import App from './App'

import VueHighcharts from 'vue-highcharts'
Vue.use(VueHighcharts)

import Toasted from 'vue-toasted'
Vue.use(Toasted)

import vMediaQuery from 'v-media-query'
Vue.use(vMediaQuery)

import vueBemCn from 'vue-bem-cn'
const bemConfig = {ns: '', el: '__', mod: '--', modValue: '-'}
Vue.use(vueBemCn, bemConfig)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  store,
  router,
  template: '<App/>',
  components: { App }
})
