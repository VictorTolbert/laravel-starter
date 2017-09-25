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
Vue.component('cover-image-upload', require('./components/CoverImageUpload'))
Vue.component('account-performance', require('./components/AccountPerformance'))
Vue.component('avails', require('./components/Avails'))
Vue.component('publish-button', require('./components/PublishButton'))
Vue.component('subscribe-button', require('./components/SubscribeButton'))
Vue.component('cover-image-upload', require('./components/CoverImageUpload'))
Vue.component('steps', require('./components/Steps'))
Vue.component('imdb', require('./components/Imdb'))
Vue.component('register', require('./components/Register'))
Vue.component('device', require('./components/Device'))
Vue.component('window', require('./components/Window'))

// Vue.component('omdb', require('./components/Omdb'))

const db = require('./data')()

import people from './data/people.json'
import tv from './data/tv.json'
import zipCode from './data/zip-code.json'
import debounce from 'lodash/debounce'
import ModalForm from './components/ModalForm'

// import logo from './/assets/buefy.png'

// const template = require('./template')

const clients = [
    {
        id: 1,
        first_name: 'Jesse',
        last_name: 'Simmons',
        date: '2016-10-15 13:43:27',
        gender: 'Male'
    },
    {
        id: 2,
        first_name: 'John',
        last_name: 'Jacobs',
        date: '2016-12-15 06:00:53',
        gender: 'Male'
    },
    {
        id: 3,
        first_name: 'Tina',
        last_name: 'Gilbert',
        date: '2016-04-26 06:26:28',
        gender: 'Female'
    },
    {
        id: 4,
        first_name: 'Clarence',
        last_name: 'Flores',
        date: '2016-04-10 10:28:46',
        gender: 'Male'
    },
    {
        id: 5,
        first_name: 'Anne',
        last_name: 'Lee',
        date: '2016-12-06 14:38:38',
        gender: 'Female'
    }
]

const avails = require('./data/avails')

const app = new Vue({
    el: '#app',
    // router,
    components: {
        ModalForm
    },
    data () {
        return {
            db,
            avails: db.avails,
            clients,
            // logo,
            people,
            activeTab: 0,
            checkedRows: [],
            checkedRows: [avails[1], avails[3]],
            clientsColumns: [
                {
                    title: 'ID',
                    field: 'id',
                    meta: { icon: null },
                    width: '',
                    isVisible: true,
                    isSortable: true,
                    isNumeric: true,
                    isCentered: false
                },
                {
                    title: 'First Name',
                    field: 'first_name',
                    meta: { icon: null },
                    width: '',
                    isVisible: true,
                    isSortable: true,
                    isNumeric: false,
                    isCentered: false
                },
                {
                    title: 'Last Name',
                    field: 'last_name',
                    meta: { icon: null },
                    width: '',
                    isVisible: true,
                    isSortable: true,
                    isNumeric: false,
                    isCentered: false
                },
                {
                    title: 'Date',
                    field: 'date',
                    meta: { icon: null },
                    width: '200',
                    isVisible: true,
                    isSortable: true,
                    isNumeric: false,
                    isCentered: false
                },
                {
                    title: 'Gender',
                    field: 'gender',
                    meta: { icon: null },
                    width: '50',
                    isVisible: true,
                    isSortable: true,
                    isNumeric: false,
                    isCentered: false
                }
            ],
            // data: [],
            date: new Date(),
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
            loading: false,
            movies: [],
            name: '',
            navigation: null,
            options: ['list', 'of', 'options'],
            page: 1,
            perPage: 5,
            remember: true,
            selected: avails[1],
            selected: null,
            selected: {},
            selectedClient: null,
            selectedOptions: [],
            sortField: 'vote_count',
            sortOrder: 'desc',
            total: 0,
            value: null
        }
    },
    methods: {
        openLoading () {
            const loadingComponent = this.$loading.open()
            setTimeout(() => loadingComponent.close(), 3 * 1000)
        },

        // openLoading () {
        //     const vm = this
        //     vm.isLoading = true
        //     setTimeout(() => {
        //         vm.isLoading = false
        //     }, 3 * 1000)
        // },

        /*
        * Load async data
        */
        loadAsyncData () {
            this.loading = true
            this.$http
                .get(
                    `https://api.themoviedb.org/3/discover/movie?api_key=bb6f51bef07465653c3e553d6ab161a8&language=en-US&include_adult=false&include_video=false&sort_by=${this
                        .sortField}.${this.sortOrder}&page=${this.page}`
                )
                .then(
                    ({ data }) => {
                        // api.themoviedb.org manage max 1000 pages
                        this.data = []
                        let currentTotal = data.total_results
                        if (data.total_results / this.perPage > 1000) {
                            currentTotal = this.perPage * 1000
                        }
                        this.total = currentTotal
                        data.results.forEach(item => this.data.push(item))
                        this.loading = false
                    },
                    response => {
                        this.data = []
                        this.total = 0
                        this.loading = false
                    }
                )
        },
        /*
        * Handle page-change event
        */
        onPageChange (page) {
            this.page = page
            this.loadAsyncData()
        },
        /*
        * Handle sort event
        */
        onSort (field, order) {
            this.sortField = field
            this.sortOrder = order
            this.loadAsyncData()
        },
        /*
        * Type style in relation to the value
        */
        type (value) {
            const number = parseFloat(value)
            if (number < 6) {
                return 'is-danger'
            } else if (number >= 6 && number < 8) {
                return 'is-warning'
            } else if (number >= 8) {
                return 'is-success'
            }
        },

        alert () {
            this.$dialog.alert('Everything looks fine!')
        },

        alertCustom () {
            this.$dialog.alert({
                title: 'Title Alert',
                message: 'I have a title, a custom button and <b>HTML</b>!',
                confirmText: 'Cool!'
            })
        },

        confirm () {
            this.$dialog.confirm({
                message: 'Continue on this task?',
                onConfirm: () => this.$toast.open('User confirmed')
            })
        },

        confirmCustom () {
            this.$dialog.confirm({
                title: 'Privacy Politics',
                message: `Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Fusce id fermentum quam. Proin sagittis,
                    nibh id hendrerit imperdiet, elit sapien laoreet elit,
                    ac scelerisque diam velit in nisl. Nunc maximus ex non
                    laoreet semper. Nunc scelerisque, libero sit amet pretium dignissim,
                    augue purus placerat justo,
                    sit amet porttitor dui metus in nisl.
                    Nulla non leo placerat, porta metus eu, laoreet risus.
                    Etiam lacinia, purus eu luctus maximus, elit ex viverra tellus,
                    sit amet sodales quam dui nec odio.
                    Nullam porta mollis est. Quisque aliquet malesuada fringilla.
                    Pellentesque volutpat lacus at ante posuere,
                    non pulvinar ante porta. Proin viverra eu massa nec porta.
                    Aliquam rhoncus velit quis sem hendrerit,
                    ut dictum nisl accumsan. Maecenas erat enim, scelerisque non ligula ac,
                    eleifend venenatis ligula.
                    Praesent molestie mauris sed elit posuere, non malesuada libero gravida.
                    In hac habitasse platea dictumst.
                    Pellentesque habitant morbi tristique senectus
                    et netus et malesuada fames ac turpis egestas.`,
                cancelText: 'Disagree',
                confirmText: 'Agree',
                type: 'is-success',
                onConfirm: () => this.$toast.open('User agreed')
            })
        },

        confirmCustomDelete () {
            this.$dialog.confirm({
                title: 'Deleting account',
                message:
                    'Are you sure you want to <b>delete</b> your account? This action cannot be undone.',
                confirmText: 'Delete Account',
                type: 'is-danger',
                hasIcon: true,
                onConfirm: () => this.$toast.open('Account deleted!')
            })
        },

        prompt () {
            this.$dialog.prompt({
                message: `What's your name?`,
                inputMaxlength: 20,
                inputPlaceholder: 'e.g. John Doe',
                onConfirm: value => this.$toast.open('Your name is: ' + value)
            })
        },

        // You have to install and import debounce to use it,
        // it's not mandatory though.
        getMovies: debounce(function () {
            this.movies = []
            this.isFetching = true
            this.$http
                .get(
                    `https://api.themoviedb.org/3/search/movie?api_key=bb6f51bef07465653c3e553d6ab161a8&query=${this
                        .name}`
                )
                .then(
                    ({ data }) => {
                        data.results.forEach(item => this.movies.push(item))
                        this.isFetching = false
                    },
                    response => {
                        this.isFetching = false
                    }
                )
        }, 500)
    },

    computed: {
        filteredPeople () {
            return this.people.filter(option => {
                return (
                    option.user.first_name
                        .toString()
                        .toLowerCase()
                        .indexOf(this.name.toLowerCase()) >= 0
                )
            })
        },

        filteredFrameworks () {
            return this.frameworks.filter(option => {
                return (
                    option
                        .toString()
                        .toLowerCase()
                        .indexOf(this.name.toLowerCase()) >= 0
                )
            })
        }
    },

    filters: {
        /**
         * Filter to truncate string, accepts a length parameter
         */
        truncate (value, length) {
            return value.length > length
                ? value.substr(0, length) + '...'
                : value
        }
    },
    mounted () {
        // this.loadAsyncData()
        // console.log(template)

        $('#clickme').click(function () {
            $('#uploadme').click()
        })

        $('#reset').click(function () {
            $('#filename').html('')
            $('#uploadbutton').hide()
        })

        $('input[type=file]').change(function () {
            var val = $(this).val()
            $('#filename').html(val.slice(12))
            $('#uploadbutton').show()
        })

        var $button = Array.prototype.slice.call(
            document.querySelectorAll('#showPageloader'),
            0
        )
        var $pageloader = Array.prototype.slice.call(
            document.querySelectorAll('.pageloader'),
            0
        )

        // Check if there are any nav burgers
        if ($button.length > 0 && $pageloader.length > 0) {
            // Add a click event on each of them
            $button.forEach(function ($el) {
                $el.addEventListener('click', () => {
                    $pageloader[0].classList.toggle('is-active')
                    var pageloaderTimeout = setTimeout(function () {
                        $pageloader[0].classList.toggle('is-active')
                        clearTimeout(pageloaderTimeout)
                    }, 3000)
                })
            })
        }
        function closest (el, selector) {
            var matchesFn

            // find vendor prefix
            ;[
                'matches',
                'webkitMatchesSelector',
                'mozMatchesSelector',
                'msMatchesSelector',
                'oMatchesSelector'
            ].some(function (fn) {
                if (typeof document.body[fn] === 'function') {
                    matchesFn = fn
                    return true
                }
                return false
            })

            var parent

            // traverse parents
            while (el) {
                parent = el.parentElement
                if (parent && parent[matchesFn](selector)) {
                    return parent
                }
                el = parent
            }

            return null
        }

        document.addEventListener('DOMContentLoaded', function () {

            // // Get all "navbar-burger" elements
            // var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0)

            // // Check if there are any navbar burgers
            // if ($navbarBurgers.length > 0) {

            //     // Add a click event on each of them
            //     $navbarBurgers.forEach(function ($el) {
            //         $el.addEventListener('click', function () {

            //             // Get the target from the "data-target" attribute
            //             var target = $el.dataset.target
            //             var $target = document.getElementById(target)

            //             // Toggle the class on both the "navbar-burger" and the "navbar-menu"
            //             $el.classList.toggle('is-active')
            //             $target.classList.toggle('is-active')
            //         })
            //     })
            // }

            // Get all document sliders
            var showQuickview = document.querySelectorAll(
                '[data-show="quickview"]'
            )
            ;[].forEach.call(showQuickview, function (show) {
                var quickview = document.getElementById(show.dataset['target'])
                if (quickview) {
                    // Add event listener to update output when slider value change
                    show.addEventListener('click', function (event) {
                        quickview.classList.add('is-active')
                    })
                }
            })

            // Get all document sliders
            var dismissQuickView = document.querySelectorAll(
                '[data-dismiss="quickview"]'
            )
            ;[].forEach.call(dismissQuickView, function (dismiss) {
                var quickview = closest(dismiss, '.quickview')
                if (quickview) {
                    // Add event listener to update output when slider value change
                    dismiss.addEventListener('click', function (event) {
                        quickview.classList.remove('is-active')
                    })
                }
            })
        })
    }
})
