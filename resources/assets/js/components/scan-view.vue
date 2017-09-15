<template>

        <!-- https://zaengle.com/blog/layers-of-a-laravel-vue-application -->
        <ais-index
            app-id="WTEU7RU64C"
            api-key="84cd67fa388e3c50b3a0a1710fae55ad"
            index-name="resources"
            :cache="true"
            :auto-search="true"
        >
            <div class="container">
                <div class="columns">

                    <div class="column is-2">

                        <aside>

    <p :class="$style.red">
        This should be red
    </p>

                            <current-query></current-query>

                            <b-field>
                                <b-datepicker
                                    :first-day-of-week="1"
                                    placeholder="Click to select..."
                                    icon="today"
                                >
                                    </b-datepicker>
                            </b-field>

                            <ais-refinement-list
                                attribute-name="category"
                                :sort-by="['name:asc']"
                            >
                                <template slot="header">
                                    <p class="menu-label">
                                        Category
                                    </p>
                                </template>

                                <template scope="props">
                                    <span
                                        class="ais-refinement-list__value"
                                        v-text="seriesName(props.value)"
                                    ></span>
                                        <span
                                            class="tag is-rounded is-dark ais-refinement-list__count"

                                            v-text="props.count"
                                        ></span>
                                </template>

                                </ais-refinement-list>
                        </aside>

                        <aside>
                            <ais-refinement-list
                                attribute-name="filetype"
                                :sort-by="['count:desc']"
                            >
                                <template slot="header">
                                    <p class="menu-label">
                                        File Type
                                    </p>
                                </template>

                                <template scope="props">
                                    <span
                                        class="ais-refinement-list__value"
                                        v-text="seriesName(props.value)"
                                    ></span>
                                        <span
                                            class="tag is-rounded is-dark ais-refinement-list__count"

                                            v-text="props.count"
                                        ></span>
                                </template>
                                </ais-refinement-list>
                        </aside>
                    </div>

                    <div class="column is-8">

                        <div class="field">
                            <!-- <label class="label">Search</label> -->
                            <div class="control has-icons-left">
                                <ais-input
                                    type="text"
                                    class="input"
                                ></ais-input>
                                    <span class="icon is-small is-left">
                                        <i
                                            class="fa fa-search"
                                            aria-hidden="true"
                                        ></i>
                                    </span>
                            </div>
                            <!-- <p class="help">This is a help text</p> -->
                        </div>
                        <ais-powered-by class="has-text-right"></ais-powered-by>

                        <hr>

                        <ais-no-results></ais-no-results>

                        <ais-results>
                            <template scope="{ result }">
                                <article class="media">
                                    <figure class="media-left">
                                        <p class="image is-64x64">
                                            <img src="http://bulma.io/images/placeholders/128x128.png">
                                        </p>
                                    </figure>
                                    <div class="media-content">
                                        <div class="content">
                                            <h5>
                                                <a :href="result.url">
                                                    <ais-highlight
                                                        :result="result"
                                                        attribute-name="title"
                                                    ></ais-highlight>
                                                </a>
                                            </h5>

                                            <p>{{ result.description }}</p>

                                            <p class="lesson-list in-caps fs-smaller is-bold mbt-1 is-hidden-mobile">
                                                <a
                                                    href="#"
                                                    class="tag is-rounded is-small color-white"

                                                    :style="{ background: colors[result.filetype] }"

                                                    v-text="result.filetype"
                                                >
                                                    </a>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </template>
                        </ais-results>

                        <hr>

                        <nav
                            class="pagination"
                            role="navigation"
                            aria-label="pagination"
                        >
                            <ais-pagination class="pagination-list">
                                <template slot="first">
                                    First Page
                                </template>
                                <template
                                    class="pagination-previous"
                                    slot="previous"
                                >
                                    Previous Page
                                    </template>
                                    <template
                                        class="pagination-link"
                                        scope="props"
                                    >
                                        {{ props.value }}
                                        </template>
                                        <template
                                            class="pagination-next"
                                            slot="next"
                                        >
                                            Next Page
                                            </template>
                                            <template slot="last">
                                                Last Page
                                            </template>
                            </ais-pagination>
                        </nav>
                    </div>
                    <div class="column is-2">
                        <div class="box">
                            <accordion-menu :contents="contents"></accordion-menu>
                        </div>
                    </div>
                </div>
            </div>
        </ais-index>
</template>

<script>

import moment from 'moment'
import Multiselect from 'vue-multiselect'
import CurrentQuery from './CurrentQuery.vue'

export default {
    props: ['query'],

    components: { CurrentQuery, Multiselect },

    data () {
        return {
            user: window.App.user,
            value: [
                { name: 'Vue.js', language: 'JavaScript' }
            ],
            options: [
                { name: 'Vue.js', language: 'JavaScript' },
                { name: 'Adonis', language: 'JavaScript' },
                { name: 'Rails', language: 'Ruby' },
                { name: 'Sinatra', language: 'Ruby' },
                { name: 'Laravel', language: 'PHP' },
                { name: 'Phoenix', language: 'Elixir' }
            ],
            contents: [
                {
                    title: 'How are you?',
                    msg: 'Test for fun!'
                },
                {
                    title: 'Who let the dog out?',
                    msg: 'I do not know, dude.'
                },
                {
                    title: '肚子好餓?',
                    msg: '吃芭樂啦！'
                },
                {
                    title: 'Find hotels?',
                    msg: 'Trivago！'
                }
            ],
            colors: {
                laravel: '#333'
            }
        }
    },

    methods: {
        publishDate (date) {
            return moment(date).format('LL')
        },

        videoType (type) {
            type = type.replace(/^(.)|\+s(.)/g, $1 => {
                return $1.toUpperCase()
            })

            if (type === 'Lesson') {
                type = 'Standalone Lesson'
            }

            return type
        },

        seriesName (name) {
            return name
        }
    }
}
</script>
<style module>
    .red {
        color: red;
    }

    .bold {
        font-weight: bold;
    }
</style>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style>
    .ais-highlight em {
        background-color: #ff9;
        font-style: normal;
    }
    .tile {
        outline: 1px dotted red;
    }

    .ais-refinement-list {
        margin-bottom: 2rem;
    }

    .ais-refinement-list__item {
        margin-bottom: 0.5rem;
    }

    .ais-refinement-list__label {
        display: flex;
    }

    .ais-refinement-list__checkbox {
        margin-right: 0.5rem;
    }

    .ais-refinement-list__value {
        flex-grow: 1;
    }

    form[role="search"] {}
        input.ais-input {}
        button.ais-search-box__submit {}
            svg {}
        button.ais-clear.ais-clear--disabled
            svg {}
</style>
