<template>
    <div>
        <h1 class="title">Assets</h1>
        <h2 class="subtitle">Icons, Logos and Image Assets</h2>
        <hr>
        <div class="columns">
            <div class="column is-2">

                <aside class="menu">
                    <p class="menu-label">
                        Menu
                    </p>
                    <ul class="menu-list">
                        <router-link
                            v-for="(asset, index) in assets"
                            tag="li"
                            :key="index"
                            :to="{name: asset.name}"><a>{{asset.label}}</a></router-link>
                      </ul>
                </aside>

            </div>
            <div class="column">
                <router-view />
                <div class="example">

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                assets: require('../../data/assets')
            }
        }
    }
</script>
