<template>
    <div>
        <nav class="nav has-shadow">
            <div class="container">
                <div class="nav-left">
                    <router-link
                        v-for="(item, index) in layout"
                        :key="index"
                        :to="{name: item.name}"
                        class="nav-item is-tab"
                    >
                       {{item.label}}
                    </router-link>
                </div>
            </div>
        </nav>

        <router-view/>

        </section>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                layout: require('@/data/layout')
            }
        }
    }
</script>
