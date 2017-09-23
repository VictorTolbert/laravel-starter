<template>
    <section class="hero is-dark" style="background-image: none">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">{{title}}</h1>
                <h2 class="subtitle" v-html="subtitle"></h2>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: {
            title: {
                type: String
            },
            subtitle: {
                type: String,
                default: ''
            },
            sections: {
                type: Array
            }
        }
    }
</script>
