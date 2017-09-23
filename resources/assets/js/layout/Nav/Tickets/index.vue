<template>
    <nav class="nav is-primary">
        <div class="container">
            <div class="nav-left" style="overflow: visible">
                <a href="/" class="nav-item is-brand">
                    <!-- <vui-logo logo="UX Lab"></vui-logo> -->
                    <img src="/static/vectors/uxlab.svg" alt="UX Lab Logo" style="height: 3rem">
                </a>

                <!-- <router-link
                    class="nav-item is-tab"
                    v-for="item in items"
                    key="item.id"
                    :to="{ name: item.name, params: item.params }"
                >{{ item.label }}</router-link> -->
            </div>

            <span class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </span>

            <div class="nav-right nav-menu" style="overflow: visible">
                <b-dropdown v-model="prototypesNav" @change="onChange">
                    <a class="nav-item" slot="trigger">
                        <!-- <b-icon icon="web"></b-icon> -->
                        <span>Experiments</span>
                        <b-icon icon="arrow_drop_down"></b-icon>
                    </a>
                    <b-dropdown-option
                        v-for="(prototype, index) in prototypes"
                        :value="prototype.value"
                        :key="index">
                        {{prototype.name}}
                    </b-dropdown-option>
                </b-dropdown>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: 'tickets-nav',
        data () {
            return {
                isPublic: true,
                navigation: 'home',
                items: [
                    { id: 1, name: 'tickets', label: 'Tickets' }
                ],
                prototypes: require('@/data/prototypes'),
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
        }
    }
</script>
