import Vue from 'vue'
// import router from './routes'

// FIXME: -- need to figure this out (to annotate problems)
// TODO: -- need to implement (to annotate solutions to problems)

require('./bootstrap')

Vue.component('flash', require('./components/Flash'))
Vue.component('paginator', require('./components/Paginator'))
Vue.component('quick-links', require('./components/QuickLinks'))
Vue.component('scan-view', require('./components/scan-view'))
Vue.component('multi-index', require('./components/MultiIndex'))
Vue.component('autocomplete', require('./components/Autocomplete'))
Vue.component('accordion-menu', require('./components/AccordionMenu'))
Vue.component('notification', require('./components/Notification'))
Vue.component('publish-button', require('./components/PublishButton'))
Vue.component('subscribe-button', require('./components/SubscribeButton'))
Vue.component(
    'cover-image-upload',
    require('./components/CoverImageUpload')
)
Vue.component('account-performance', require('./components/AccountPerformance'))
Vue.component('avails', require('./components/Avails'))
Vue.component('publish-button', require('./components/PublishButton'))
Vue.component('subscribe-button', require('./components/SubscribeButton'))
Vue.component(
    'cover-image-upload',
    require('./components/CoverImageUpload')
)

const app = new Vue({
    el: '#app'
    // router,
})
