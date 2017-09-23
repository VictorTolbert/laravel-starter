<template>
    <div>
        <nav class="nav is-primary">
            <div class="container">
                <div class="nav-left" style="overflow: visible">
                    <a href="/" class="nav-item is-brand">
                        <!-- <img src="/static/vectors/us.svg" alt="" style="height: 3rem"> -->
                        <!-- <img src="/static/vectors/ecco.svg" alt="" style="height: 3rem"> -->
                        <!-- <img src="/static/progroup.jpg" alt="" style="height: 3rem"> -->

                        <!-- <img src="/static/videa.png" alt="Videa Logo"> -->
                        <!-- <img src="/static/vectors/vti-logo.svg" alt="" style="height: 3rem"> -->
                        <!--<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/5248/uxlab.svg" style="height: 4rem;">-->
                        <span style="font-size: 1.5rem"><strong>ui</strong> toolkit</span>
                    </a>
                </div>

                <span class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>

<!--                 <b-select class="select" placeholder="Sort By: Popularity" @change="sortSelect">
                    <option v-for="option in options" :value="option">{{ option }}</option>
                </b-select> -->

                <div class="nav-right nav-menu" style="overflow: visible">
                    <a class="nav-item" @click="isComponentModalActive = true">Login</a>
                </div>
            </div>
        </nav>
        <b-modal
            :active.sync="isComponentModalActive"
            :component="ModalForm"
            :props="formProps"
            :width="380">
        </b-modal>
    </div>

</template>

<script>
    import ModalForm from '@/components/ModalForm'

    export default {
        name: 'login-nav',
        data () {
            return {
                isPublic: true,
                isComponentModalActive: false,
                ModalForm,
                formProps: {
                    email: 'demo@videa.tv',
                    password: 'password1'
                }
            }
        },
        methods: {
            onChange (val) {
                this.$router.push({
                    name: val
                })
            }
        },
        created () {
            this.$on('change', this.onChange)
        }
    }
</script>
