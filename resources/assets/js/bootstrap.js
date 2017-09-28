import Vue from 'vue'
import lodash from 'lodash'
import axios from 'axios'

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import "./plugins"

try {
    window.$ = window.jQuery = require('jquery')
} catch (e) {}

window._ = lodash
window.Vue = Vue
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
    console.error(
        'CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token'
    )
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

Vue.prototype.authorize = function (handler) {
    // Additional admin privileges here.
    let user = window.App.user

    return user ? handler(user) : false
}
