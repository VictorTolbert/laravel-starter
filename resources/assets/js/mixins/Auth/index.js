// https://medium.com/@freekmurze/using-global-mixins-in-vue-js-68bf0623c554
export default {
    computed: {
        currentUser() {
            return window.App.foo;
        },
    },
};
