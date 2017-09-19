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

const app = new Vue({
    el: '#app',
    // router,
    data () {
        return {
            isActive: true,
            isLoading: false,
            selectedOptions: []
        }
    },
    methods: {
        openLoading() {
            const vm = this
            vm.isLoading = true
            setTimeout(() => {
                vm.isLoading = false
            }, 3 * 1000)
        }
    },
    mounted () {
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

        var ham = document.getElementById('ham')
        ham.onclick = function () {
            ham.classList.toggle('clicked')
        }

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
