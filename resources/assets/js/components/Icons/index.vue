<template>
    <div>
        <h1 class="title">Icons</h1>
        <h2 class="subtitle">Choose the icon you need from this page, then follow the implementation instructions on the <a>icon component page</a>.</h2>
        <hr>
        <div class="box">

        </div>
        <hr>
        <div class="columns is-multiline">
            <div class="column is-2 has-text-centered"
                v-for="(icon, index) in icons"
                :key="index">
                <b-icon
                    size="is-large"
                    :icon="icon.name"
                    :type="icon.type"></b-icon><br>
                <code>{{icon.label}}</code>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                icons: require('@/data/icons')
            }
        }
    }
</script>
