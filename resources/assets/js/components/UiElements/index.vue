<template>
    <section class="">
        <div class="container">
            <h1 class="title">UI elements, layout helpers and Vue components</h1>
            <h2 class="subtitle">This toolkit has the entire Bulma's core and Buefy's Vue components built in. You can use any feature from Bulma, plus all the components Buefy offers</h2>
            <hr>
            <div class="">
                <b-tabs v-model="activeTab">
                    <b-tab-item label="Bulma">
                        <div class="content">
                            <ul>
                                <li><a href="http://bulma.io/documentation/grid/columns/" target="_blank">Grid system</a></li>
                                <li><a href="http://bulma.io/documentation/grid/tiles/" target="_blank">Tile system</a></li>
                                <li><a href="http://bulma.io/documentation/elements/button/" target="_blank">Button</a></li>
                                <li><a href="http://bulma.io/documentation/components/card/" target="_blank">Card</a></li>
                                <li><a href="http://bulma.io/documentation/components/nav/" target="_blank" class="">Nav</a></li>
                                <li><a href="http://bulma.io/documentation/layout/container/" target="_blank">Container</a></li>
                                <li><a href="http://bulma.io/documentation/layout/hero/" target="_blank">Hero</a></li>
                                <li><a href="http://bulma.io/documentation/layout/section/" target="_blank">Section</a></li>
                                <li><a href="http://bulma.io/documentation/layout/footer/" target="_blank">Footer</a></li>
                            </ul>
                        </div>

                    </b-tab-item>

                    <b-tab-item label="Buefy">

                    </b-tab-item>
                </b-tabs>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data () {
            return {
                activeTab: 0
            }
        }
    }
</script>
