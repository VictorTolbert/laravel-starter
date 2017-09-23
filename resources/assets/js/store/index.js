import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        version: '0.1.0',
        debug: false
    }
})

export default store
