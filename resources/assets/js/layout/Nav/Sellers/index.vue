<template>
    <nav class="nav is-primary">
        <div class="container">
            <div class="nav-left" style="overflow: visible">
                <a href="/" class="nav-item is-brand">
                    <img src="/static/vectors/uxlab.svg" alt="" style="height: 3rem">
                </a>
                <!--
                <b-dropdown v-model="selectedOrderManagementMenuItem" @change="onChange">
                    <a class="nav-item is-hidden-touch" slot="trigger">
                        <span>Order Management</span>
                        <b-icon icon="arrow_drop_down"></b-icon>
                    </a>
                    <b-dropdown-option
                        v-for="(item, index) in orderManagementMenu"
                        :value="item.value"
                        :key="index">
                        {{item.name}}
                    </b-dropdown-option>
                </b-dropdown>

                <b-dropdown v-model="selectedReportingMenuItem" @change="onChange">
                    <a class="nav-item is-hidden-touch" slot="trigger">
                        <span>Reporting</span>
                        <b-icon icon="arrow_drop_down"></b-icon>
                    </a>
                    <b-dropdown-option
                        v-for="(item, index) in reportingMenu"
                        :value="item.value"
                        :key="index">
                        {{item.name}}
                    </b-dropdown-option>
                </b-dropdown>

                <router-link
                    class="nav-item is-hidden-touch is-tab"
                    v-for="item in navItems"
                    key="item.id"
                    :to="{ name: item.name, params: item.params }"
                >{{ item.label }}</router-link>
                -->
            </div>

            <span class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </span>

            <div class="nav-right nav-menu" style="overflow: visible">
                <b-dropdown v-model="selectedPrototypesMenuItem" @change="onChange">
                    <a class="nav-item" slot="trigger">
                        <!-- <b-icon icon="web"></b-icon> -->
                        <span>Experiments</span>
                        <b-icon icon="keyboard_arrow_down" size="is-small"></b-icon>
                    </a>
                    <b-dropdown-option
                        v-for="(item, index) in prototypesMenu"
                        :value="item.value"
                        :key="index">
                        {{item.name}}
                    </b-dropdown-option>
                </b-dropdown>
                <!--
                <div class="nav-item">
                    <div class="field is-grouped">
                      <p class="control">
                        <a class="button is-white">
                          Login
                        </a>
                      </p>
                      <p class="control">
                        <a class="button is-secondary">
                          Sign Up
                        </a>
                      </p>
                    </div>
                </div>
                -->
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: 'sellers-nav',
        data () {
            return {
                isPublic: true,
                navigation: 'home',
                navItems: [
                    { id: 1, name: 'price-guide', label: 'Price Guide' },
                    { id: 2, name: 'avails', label: 'Avails' },
                    { id: 3, name: 'campaign-performance', label: 'Campaign Performance' }
                ],
                selectedPrototypesMenuItem: '',
                selectedOrderManagementMenuItem: '',
                selectedReportingMenuItem: '',
                prototypesMenu: require('@/data/prototypes'),
                orderManagementMenu: require('@/data/order-management-menu'),
                reportingMenu: require('@/data/reporting-menu')
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
