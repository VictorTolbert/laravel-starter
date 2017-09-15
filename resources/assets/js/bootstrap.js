import Vue from 'vue'
import VueRouter from 'vue-router'
import lodash from 'lodash'
import axios from 'axios'

// import BootstrapVue from 'bootstrap-vue'
import Buefy from 'buefy'

import InstantSearch from 'vue-instantsearch'
import Eagle from 'eagle.js'
import VueClipboard from 'vue-clipboard2'
import VueFlex from 'vue-flex'
import Tabs from 'vue-tabs-component'
import TableComponent from 'vue-table-component'
import Tooltip from 'vue-directive-tooltip'
import VueAwesomeSwiper from 'vue-awesome-swiper'
import VueFloatLabel from 'vue-float-label'

// import "bootstrap/dist/css/bootstrap.css"
// import "bootstrap-vue/dist/bootstrap-vue.css"
import 'vue-flex/dist/vue-flex.css'
import 'vue-directive-tooltip/css/index.css'
import 'swiper/dist/css/swiper.css'

Vue.prototype.authorize = function (handler) {
    // Additional admin privileges here.
    let user = window.App.user

    return user ? handler(user) : false
}

Vue.use(VueRouter)

// Vue.use(BootstrapVue)
Vue.use(Buefy)

Vue.use(InstantSearch)
Vue.use(Eagle)
Vue.use(VueClipboard)
Vue.use(VueFlex)
Vue.use(Tabs)
Vue.use(TableComponent)
Vue.use(Tooltip)
Vue.use(VueAwesomeSwiper)
Vue.use(VueFloatLabel)

window.Vue = Vue
window._ = lodash
window.axios = axios
window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
}

window.events = new Vue()

window.flash = function (message) {
    window.events.$emit('flash', message)
}

let token = document.head.querySelector('meta[name="csrf-token"]')

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}

Promise.delay = function (time) {
    return new Promise((resolve, reject) => {
        setTimeout(resolve, time)
    })
}

Promise.prototype.takeAtLeast = function (time) {
    return new Promise((resolve, reject) => {
        Promise.all([this, Promise.delay(time)]).then(([result]) => {
            resolve(result)
        }, reject)
    })
}

// window.Headroom = require('headroom.js')
// // construct an instance of Headroom, passing the element
// var headroom  = new Headroom(document.querySelector("header"));
// // initialise
// headroom.init();

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
