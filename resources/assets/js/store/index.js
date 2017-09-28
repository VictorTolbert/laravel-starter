import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        version: '0.1.0',
        debug: false,
        todos: [
            { body: 'Go to store.', done: false },
            { body: 'Buy eggs', done: true },
            { body: 'Finish tutorial', done: false },
        ]
    }
})

export default store
