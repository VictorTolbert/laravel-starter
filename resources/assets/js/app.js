import Vue from 'vue'
// import router from './routes'

// FIXME: -- need to figure this out (to annotate problems)
// TODO: -- need to implement (to annotate solutions to problems)

require('./bootstrap')

Vue.component('flash', require('./components/Flash.vue'))
Vue.component('paginator', require('./components/Paginator.vue'))
Vue.component('quick-links', require('./components/QuickLinks.vue'))
Vue.component('scan-view', require('./components/scan-view.vue'))
Vue.component('multi-index', require('./components/MultiIndex.vue'))
Vue.component('autocomplete', require('./components/Autocomplete'))
Vue.component('accordion-menu', require('./components/AccordionMenu'))
Vue.component('notification', require('./components/Notification'))

Vue.component('account-performance', require('./components/AccountPerformance'))
Vue.component('avails', require('./components/Avails'))

const app = new Vue({
    el: '#app'
    // router,
})
