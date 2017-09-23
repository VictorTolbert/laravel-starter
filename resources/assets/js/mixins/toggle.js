export const toggle = {
    data () {
        return {
            isShowing: false
        }
    },
    methods: {
        toggleShow () {
            this.isShowing = !this.isShowing
        }
    },
    mounted () {
        console.log('hello from toggle mixin!')
    }
}
