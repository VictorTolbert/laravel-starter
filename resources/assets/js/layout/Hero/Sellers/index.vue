<template>
    <section class="hero is-tertiary" style="background-image: url('/static/background.jpg')">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="level">
                            <div>
                                <h1 class="title">{{title}}</h1>
                                <h2 class="subtitle" v-html="subtitle"/>
                            </div>
                            <!-- <b-icon icon="help" type="is-light"></b-icon> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
            <nav class="tabs is-boxed">
                <div class="container">
                    <ul>
                        <router-link tag="li"
                            v-for="(section, index) in sections"
                            :key="index"
                            :to="{ name: section.name }">
                            <a>{{section.label}}</a>
                        </router-link>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'hero',
        props: {
            title: {
                type: String
            },
            subtitle: {
                type: String
            },
            sections: {
                type: Array
            }
        }
    }
</script>
<style>
    .hero-body {
        padding: 1.5rem 1.5rem;
    }
</style>
