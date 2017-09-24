<template>
    <div>
        <!-- data is great--insights are better -->
        <h2 class="is-size-3">Data Tables</h2>

        <hr>
        <pre><code>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit
            Temporibus ipsum dolorem voluptate repudiandae soluta
            amet iste vero quo dolor sit tempore neque ut sint
        </code></pre>
        <hr>
        <div class="level is-hidden-touch">
            <div class="level-left">

                <div class="level-item">
                    <multiselect v-model="value" :options="options"></multiselect>
                </div>

                <div class="level-item">
                    <imdb></imdb>
                </div>

                <div class="level-item">
                    <b-field grouped group-multiline>
                        <div class="field">
                            <input id="switch-narrowed" type="checkbox" name="switch-narrowed" class="switch is-success" checked="checked" v-model="isNarrowed">
                            <label for="switch-narrowed">Narrowed</label>
                        </div>

                        <div class="field">
                            <input id="switch-checkable" type="checkbox" name="switch-checkable" class="switch is-success" checked="checked" v-model="isCheckable">
                            <label for="switch-checkable">Checkable</label>
                        </div>

                        <div class="field">
                            <input id="switch-bordered" type="checkbox" name="switch-bordered" class="switch is-success" checked="checked" v-model="isBordered">
                            <label for="switch-bordered">Bordered</label>
                        </div>

                        <div class="field">
                            <input id="switch-striped" type="checkbox" name="switch-striped" class="switch is-success" checked="checked" v-model="isStriped">
                            <label for="switch-striped">Striped</label>
                        </div>

                        <div class="field">
                            <input id="switch-empty" type="checkbox" name="switch-empty" class="switch is-success" checked="checked" v-model="isEmpty">
                            <label for="switch-empty">Empty</label>
                        </div>

                        <div class="field">
                            <input id="switch-loading" type="checkbox" name="switch-loading" class="switch is-success" checked="checked" v-model="isLoading">
                            <label for="switch-loading">Loading state</label>
                        </div>

                        <div class="field">
                            <input id="switch-mobile-cards" type="checkbox" name="switch-mobile-cards" class="switch is-success" checked="checked" v-model="hasMobileCards">
                            <label for="switch-mobile-cards">Mobile cards</label>
                        </div>
                    </b-field>
                </div>

                <div class="level-item">
                    <div class="field">
                        <p class="control">
                            <button class="button is-link">Advanced Search</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="level-right">
                <div class="level-item">
                    <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <div class="select is-fullwidth">
                                        <select v-model="perPage">
                                            <option value="5">5 per page</option>
                                            <option value="10">10 per page</option>
                                            <option value="25">25 per page</option>
                                            <option value="50">50 per page</option>
                                            <option value="100">100 per page</option>
                                            <option value="250">250 per page</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="level-item">
                    <a class="button">
                        Edit Table
                    </a>
                </div>

                <div class="level-item">
                    <a class="button">
                        <b-icon icon="file_download" size="is-small"></b-icon>
                    </a>
                </div>

                <div class="level-item">
                    <a class="button">
                        <b-icon icon="sliders" pack="fa"></b-icon>
                    </a>
                </div>

                <div class="level-item">
                    <a class="button">
                        <b-icon icon="format_size" size="is-small"></b-icon>
                    </a>
                </div>
            </div>
        </div>

        <!-- TODO - [ ] Use generic `items` array as the prop when componentized -->
        <b-table
            :data="isEmpty ? [] : $parent.db.avails"
            :selected.sync="selected"
            :checkable="isCheckable"
            :checked-rows.sync="checkedRows"
            detailed
            @details-open="(row, index) => $snackbar.open(`Expanded ${row.advertiser}`)"
            :row-class="(row, index) => row.id === 1 ? 'is-warning' : ''"
            :bordered="isBordered"
            :striped="isStriped"
            :narrowed="isNarrowed"
            :loading="isLoading"
            :mobile-cards="hasMobileCards"
            :paginated="avails.length > perPage"
            :per-page="perPage"
            :pagination-simple="isPaginationSimple"
            :default-sort-direction="defaultSortDirection"
            default-sort="">

            <template scope="props">
                <!-- TODO - [ ] Loop over columnConfig object [h1] -->
                <b-table-column field="id" meta="Internal ID" label="Number" sortable>
                    <a style="text-decoration: underline" @click="$toast.open(`${props.row.advertiser}, ${props.row.agency}`)">
                        {{ props.row.id }}
                    </a>
                </b-table-column>

                <b-table-column field="stationOrderNumber" label="Station Order #" sortable>
                    {{ props.row.stationOrderNumber }}
                </b-table-column>

                <b-table-column field="currency" numeric label="Currency" sortable>
                    {{ props.row.currency }}
                </b-table-column>

                <b-table-column field="status" label="Status" sortable>
                    <span class="tag is-uppercase" :class="props.row.status == 'active' ? 'is-success' : 'is-info'">
                        {{ props.row.status }}
                    </span>
                </b-table-column>

                <b-table-column field="advertiser" label="Advertiser" sortable>
                    <a style="text-decoration: underline" @click="$toast.open(props.row.advertiser)">
                        {{ props.row.advertiser }}
                    </a>
                </b-table-column>

                <b-table-column field="demo" label="Demo" sortable>
                    {{ props.row.demo }}
                </b-table-column>

                <b-table-column field="agency" label="Agency" sortable>
                    {{ props.row.agency }}
                </b-table-column>

                <b-table-column field="product" label="Product" numeric sortable>
                    {{ props.row.product }}
                </b-table-column>

                <b-table-column field="campaign" label="Campaign" sortable>
                    {{ props.row.campaign }}
                </b-table-column>

                <b-table-column field="cpe" label="Cpe"  sortable>
                    {{ props.row.cpe }}
                </b-table-column>

                <b-table-column field="estimate" label="Estimate" numeric sortable>
                    {{ props.row.estimate }}
                </b-table-column>

                <b-table-column field="flightStart" label="Start" sortable>
                    {{ props.row.flightStart }}
                </b-table-column>

                <b-table-column field="flightEnd" label="End" sortable>
                    {{ props.row.flightEnd }}
                </b-table-column>

                <b-table-column field="spots" label="Spots" sortable>
                    {{ props.row.spots }}
                </b-table-column>

                <b-table-column field="ordered" label="Ordered" sortable>
                    {{ props.row.ordered }}
                </b-table-column>

                <b-table-column field="released" label="Released" sortable>
                    {{ props.row.released }}
                </b-table-column>

                <b-table-column field="budget" numeric label="Budget" sortable>
                    {{ props.row.budget }}
                </b-table-column>

                <b-table-column field="revenue" numeric label="Reveue" sortable>
                    {{ props.row.revenue }}
                </b-table-column>

                <b-table-column field="type" label="Type" sortable>
                    {{ props.row.type }}
                </b-table-column>

                <b-table-column field="share" numeric label="Share" sortable>
                    {{ props.row.share }}
                </b-table-column>
            </template>

            <!-- TODO - [ ] Build out detail example -->
            <template slot="detail" scope="props">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <img src="/images/placeholder-128x128.png">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>{{ props.row.advertiser }} {{ props.row.agency }}</strong>
                                <small>@{{ props.row.first_name }}</small>
                                <small>31m</small>
                                <br> Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Proin ornare magna eros, eu pellentesque tortor
                                vestibulum ut. Maecenas non massa sem. Etiam finibus
                                odio quis feugiat facilisis.
                            </p>
                        </div>
                    </div>
                </article>
            </template>

            <!-- TODO - [ ] Can component be used as scoped slot template  -->
            <template slot="empty">
                <section class="section">
                    <div class="content has-text-grey has-text-centered">
                        <p>
                            <b-icon icon="info" size="is-medium"></b-icon>
                        </p>
                        <p>No results messaging</p>
                    </div>
                </section>
            </template>
        </b-table>

        <!-- TODO - [ ] Consider how to use Modal components -->
        <div class="modal" :class="isActive ? 'is-active' : ''">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Modal title</p>
                    <button class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    <!-- Content ... -->
                </section>
                <footer class="modal-card-foot">
                    <button class="button is-success">Save changes</button>
                    <button class="button">Cancel</button>
                </footer>
            </div>
        </div>
    </div>
</template>

<script>

const avails = require('../../data/orders')

import Multiselect from 'vue-multiselect'

export default {
    name: 'avails',
    components: { Multiselect },
    data () {
        return {
            avails,
            date: null,
            selected: avails[1],
            selected: {},
            checkedRows: [avails[1], avails[3]],
            checkedRows: [],
            isEmpty: false,
            isCheckable: false,
            isBordered: false,
            isPaginated: true,
            isPaginationSimple: true,
            defaultSortDirection: 'asc',
            isStriped: false,
            isNarrowed: false,
            isLoading: false,
            hasMobileCards: true,
            isActive: false,
            perPage: 5,
            options: ['list', 'of', 'options'],
            value: null,
            columnsTemplate: [
                { title: 'ID', field: 'id', visible: true },
                { title: 'First Name', field: 'first_name', visible: true },
                { title: 'Last Name', field: 'last_name', visible: true },
                { title: 'Date', field: 'date', visible: true },
                { title: 'Gender', field: 'gender', visible: true }
            ]
        }
    },
    methods: {
        alert () {
            this.$dialog.alert('Everything looks fine!')
        },
        alertCustom () {
            this.$dialog.alert({
                title: 'Title Alert',
                message: 'I have a title, a custom button and <b>HTML</b>!',
                confirmText: 'Cool!'
            })
        }
    }
}
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
