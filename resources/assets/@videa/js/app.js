import Vue from 'vue'
import App from './App.vue'

require('./bootstrap')

const app = new Vue({
    el: '#app',
    template: '<App/>',
    components: { App }
})
