import VueRouter from 'vue-router'
import slideshows from './slideshows'

const routes = [
    {
        path: '/',
        component: require('./pages/Search.vue')
    },
    {
        path: '/faqs',
        component: require('./pages/Faqs.vue')
    },
    {
        path: '/parallax',
        component: require('./pages/Parallax.vue')
    },
    {
        path: '/test',
        component: require('./pages/Test.vue')
    },
    {
        path: '/home',
        component: require('./pages/Home.vue')
    },
    {
        path: '/icons',
        component: require('./pages/Icons.vue')
    },
    {
        path: '/about-us',
        component: require('./pages/AboutUs.vue')
    },
    {
        path: '/contact-information',
        component: require('./pages/ContactInformation.vue')
    },
    {
        path: '/georgia-seow',
        component: require('./pages/GeorgiaSeow.vue')
    },
    {
        path: '/spf-overview',
        component: require('./pages/SpfOverview.vue')
    },
    {
        path: '/training',
        component: require('./pages/Training.vue')
    },
    {
        path: '/calendar',
        component: require('./pages/Calendar.vue')
    },
    {
        path: '/resources',
        component: require('./pages/Resources.vue')
    }
]

slideshows.list.forEach(function (slideshow) {
    routes.push({
        path: '/' + slideshow.infos.path,
        component: slideshow
    })
})

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
})
