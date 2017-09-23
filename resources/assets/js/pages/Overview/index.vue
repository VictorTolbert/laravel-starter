<template>
    <div class="overview">
        <nav class="nav has-shadow">
            <div class="container">
                <div class="nav-left">
                    <router-link
                        v-for="(item, index) in overview"
                        :key="index"
                        :to="{name: item.name}"
                        class="nav-item is-tab"
                    >
                       {{item.label}}
                    </router-link>
                </div>
            </div>
        </nav>
        <section class="section">
            <div class="container">
                <router-view/>
            </div>
        </section>
    </div>
</template>


<script>
    export default {
        data () {
            return {
                overview: require('@/data/overview')
            }
        }
    }
</script>
