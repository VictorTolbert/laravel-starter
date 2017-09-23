<template>
    <div class="elements">
        <nav class="nav has-shadow">
            <div class="container">
                <div class="nav-left">
                    <router-link
                        v-for="(element, index) in elements"
                        :key="index"
                        :to="{name: element.name}"
                        class="nav-item is-tab"
                    >
                       {{element.label}}
                    </router-link>
                </div>
            </div>
        </nav>

        <section class="section">
            <router-view/>
        </section>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                elements: require('@/data/elements')
            }
        }
    }
</script>
