<template>
    <div class="components">
        <nav class="nav has-shadow">
            <div class="container">
                <div class="nav-left">
                    <router-link
                        v-for="(component, index) in components"
                        :key="index"
                        :to="{name: component.name}"
                        class="nav-item is-tab"
                    >
                       {{component.label}}
                    </router-link>
                </div>
            </div>
        </nav>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                components: require('@/data/components')
            }
        }
    }
</script>
