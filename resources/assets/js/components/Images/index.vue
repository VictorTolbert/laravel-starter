<template>
    <div>
        <h1 class="title">Images</h1>
        <hr>
        <div class="columns">
            <div class="column"
                v-for="(image, index) in images"
                :key="index"
                >
                <figure class="image">
                    <img src="/static/placeholder-1280x960.png">
                </figure>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                images: require('@/data/images')
            }
        }
    }
</script>
