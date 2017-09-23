<template>
    <nav class="nav is-primary">
        <div class="container">
            <div class="nav-left" style="overflow: visible">
                <a href="/" class="nav-item is-brand">
                     <!-- <img src="/static/vectors/vuejs-logo.svg" alt="" style="height: 3rem"> -->
                     <!-- <img src="/static/vectors/ecco.svg" alt="" style="height: 3rem"> -->
                    <!-- <img src="/static/videa.png" alt="Videa Logo"> -->
                    <!-- <img src="/static/vectors/vti-logo.svg" alt="" style="height: 3rem"> -->
                    <img src="/static/vectors/uxlab.svg" alt="" style="height: 3rem">
                    <!-- <img src="/static/oxagile.png" alt=""> -->
                    <!--<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/5248/uxlab.svg" style="height: 4rem;">-->
                    <!-- <span style="font-size: 1.5rem"><strong>ui</strong> toolkit</span> -->
                </a>
            </div>

            <span class="nav-toggle" :class="{ 'is-active': isMenuActive }" @click="isMenuActive = !isMenuActive">
                <span></span>
                <span></span>
                <span></span>
            </span>

            <div class="nav-right nav-menu" style="overflow: visible" :class="{ 'is-active': isMenuActive }">
                <!-- <a class="nav-item">
                    <img src="/static/vectors/vuejs-logo.svg" style="height: 4rem">
                    <img src="/static/vectors/git-icon.svg" style="height: 1.25rem">
                </a> -->
                <!--
                <b-dropdown v-model="isPublic">
                    <button class="button is-white" type="button" slot="trigger">
                        <template v-if="isPublic">
                            <span>Public</span>
                        </template>
                        <template v-else>
                            <span>Friends</span>
                        </template>
                        <b-icon icon="arrow_drop_down"></b-icon>
                    </button>

                    <b-dropdown-option :value="true">
                        <div class="media">
                            <b-icon class="media-left" icon="public"></b-icon>
                            <div class="media-content">
                                <h3>Public</h3>
                                <small>Everyone can see</small>
                            </div>
                        </div>
                    </b-dropdown-option>

                    <b-dropdown-option :value="false">
                        <div class="media">
                            <b-icon class="media-left" icon="people"></b-icon>
                            <div class="media-content">
                                <h3>Friends</h3>
                                <small>Only friends can see</small>
                            </div>
                        </div>
                    </b-dropdown-option>
                </b-dropdown>
                -->

                <router-link
                    class="nav-item is-tab"
                    v-for="item in navItems"
                    :key="item.id"
                    :to="{ name: item.name, params: item.params }">
                    <!-- <b-icon pack="fa" :icon="item.icon"></b-icon> -->
                    {{ item.label }}
                    </router-link>

                <b-dropdown v-model="prototypesNav" @change="onChange" class="is-hidden-mobile">
                    <a class="nav-item" slot="trigger">
                        <!-- <b-icon icon="web"></b-icon> -->
                        <span>🗑️ Experiments</span>
                        <b-icon icon="arrow_drop_down"></b-icon>
                    </a>
                    <b-dropdown-option
                        v-for="(prototype, index) in prototypes"
                        :value="prototype.value"
                        :key="index">
                        {{prototype.name}}
                    </b-dropdown-option>
                </b-dropdown>

                <!-- <a class="nav-item">
                    <b-icon icon="format_size" type="is-primary"></b-icon>
                </a> -->

                <!-- <a class="nav-item">
                    <img src="/static/vectors/gravatar.svg" class="is-1">
                </a> -->
                <!--
                <b-dropdown v-model="helpNav">
                    <a class="nav-item" slot="trigger">
                        <b-icon icon="more_vert"></b-icon>
                    </a>
                    <b-dropdown-option value="settings">
                        <b-icon icon="settings"></b-icon>
                        Settings
                    </b-dropdown-option>
                </b-dropdown>
                -->

                <!--
                <b-dropdown v-model="helpNav">
                    <a class="nav-item" slot="trigger">
                        <b-icon icon="account_circle"></b-icon>
                        <span>Account</span>
                        <b-icon icon="arrow_drop_down"></b-icon>
                    </a>
                    <b-dropdown-option subheader>
                        Logged as <b>John Doe</b>
                    </b-dropdown-option>
                    <b-dropdown-option separator />
                    <b-dropdown-option value="help">
                        <b-icon icon="help"></b-icon>
                        Help
                    </b-dropdown-option>
                    <b-dropdown-option separator />
                    <b-dropdown-option value="settings">
                        <b-icon icon="settings"></b-icon>
                        Settings
                    </b-dropdown-option>
                    <b-dropdown-option value="logout">
                        <b-icon icon="exit_to_app"></b-icon>
                        Logout
                    </b-dropdown-option>
                </b-dropdown>
                -->
            </div>
        </div>
    </nav>
</template>

<script>
    import { EventBus } from '@/main'

    export default {
        name: 'nav',
        data () {
            return {
                isMenuActive: false,
                isPublic: true,
                navigation: 'home',
                navItems: require('@/data/nav-items'),
                prototypes: require('@/data/prototypes'),
                helpNav: '',
                prototypesNav: ''
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

            EventBus.$on('routeBeforeEach', (to, from) => {
                this.isMenuActive = false
            })
        }
    }
</script>
