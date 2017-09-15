<template>
    <div>
        <h1 class="title">Vectors</h1>
        <hr>
        <div class="columns is-multiline">
            <div v-for="vector in vectors" class="column is-2">
                <figure class="image is-32x32">
                    <img :style="`color:${vector.color}`" :src="`/static/vectors/${vector.name}.svg`">
                </figure>
                <caption><code>{{vector.name}}</code></caption>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                vectors: require('@/data/vectors')
            }
        }
    }
</script>
