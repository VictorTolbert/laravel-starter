import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        db,
        people,
        zipCode,
        tv,
        activeApp: 'prototypes',
        activeTab: 0,
        avails: db.avails,
        checkedRows: [],
        checkedRows: [db.avails[1], db.avails[3]],
        clients: db.clients,
        clientsColumns: db.clientColumns,
        dashed: false, // tooltip
        data: [],
        date: new Date(),
        debug: false,
        defaultSortDirection: 'asc',
        formProps: {
            email: 'evan@you.com',
            password: 'testing'
        },
        frameworks: [
            'Angular',
            'Angular 2',
            'Aurelia',
            'Backbone',
            'Ember',
            'jQuery',
            'Meteor',
            'Node.js',
            'Polymer',
            'React',
            'RxJS',
            'Vue.js'
        ],
        hasError: false,
        hasMobileCards: true,
        isActive: false,
        isBordered: true,
        isCheckable: true,
        isCollapsible: false,
        isComponentModalActive: false,
        isCustomizeDataModalActive: false,
        isEmpty: false,
        isFetching: false,
        isLoading: false,
        isNarrowed: true,
        isOpen: true,
        isPaginated: true,
        isPaginationSimple: true,
        isPublic: true,
        isStriped: false,
        keepFirst: false,
        label: '', // tooltip
        loading: false,
        movies: [],
        navigation: null,
        options: ['list', 'of', 'options'],
        page: 1,
        perPage: 5,
        position: '', // tooltip
        remember: true,
        selected: db.avails[1],
        selected: null,
        selected: {},
        selectedClient: null,
        selectedOptions: [],
        sortField: 'vote_count',
        sortOrder: 'desc',
        todos: [
            { body: 'Go to store.', done: false },
            { body: 'Buy eggs', done: true },
            { body: 'Finish tutorial', done: false },
        ]
        total: 0,
        value: null,
        version: '0.1.0',
    }
})

export default store
