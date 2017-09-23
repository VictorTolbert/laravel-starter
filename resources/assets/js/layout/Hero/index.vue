<template>
    <section class="hero is-dark" style="background-image: url('/static/background.jpg')">
        <div class="hero-body">
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <div class="block">
                            <h1 class="title">{{title}}</h1>
                            <h2 class="subtitle" v-html="subtitle"></h2>
                        </div>
                    </div>
                    <div class="level-right">
                         <div class="level-item">
                            <!-- <b-switch size="is-small" v-model="$store.state.debug">Debug {{ $store.state.debug ? 'on' : 'off' }}</b-switch> -->
                            <!-- <browser-window url="https://videa.tv">
                                  browser window body
                            </browser-window> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
            <!-- <nav class="tabs is-boxed">
                <div class="container">
                    <ul>
                        <li v-for="tab in tabs"
                            :key="tab.title"
                            :class="{ 'is-active': currentTab === tab.component }">
                            <a @click="currentTab = tab.component">
                                {{ tab.title }}
                            </a>
                        </li>
                    </ul>
                </div>
            </nav> -->
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

<!--         <div class="hero-foot">
            <nav class="tabs is-boxed">
                <div class="container">
                    <ul>
                        <li v-for="tab in tabs"
                            :key="tab.title"
                            :class="{ 'is-active': currentTab === tab.component }">
                            <a @click="currentTab = tab.component">
                                {{ tab.title }}
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> -->

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
                type: String,
                default: 'Everything you need to <strong><em>rapidly</em> create dynamic HTML prototypes</strong>'
            },
            sections: {
                type: Array
            },
            debug: {
                type: Boolean,
                default: false
            }
        }
    }
</script>
