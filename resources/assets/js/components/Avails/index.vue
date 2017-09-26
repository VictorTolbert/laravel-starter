<template>
    <div>
        <!-- data is great--insights are better -->
        <!-- TODO - [ ] Use generic `items` array as the prop when componentized -->
        <b-table
            :data="isEmpty ? [] : avails"
            :selected.sync="selected"
            :checkable="isCheckable"
            :checked-rows.sync="checkedRows"
            :detailed="hasDetails"
            @details-open="(row, index) => $toast.open(`Expanded ${row.advertiser}`)"
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

                <!-- <b-table-column field="status" label="Status" sortable>
                    <span class="tag is-uppercase" :class="props.row.status == 'active' ? 'is-success' : 'is-info'">
                        {{ props.row.status }}
                    </span>
                </b-table-column> -->

                <b-table-column field="id" meta="Internal ID" label="Videa Order" sortable>
                    <a style="text-decoration: underline" @click="$toast.open(`${props.row.advertiser}, ${props.row.agency}`)">
                        {{ props.row.id }}
                    </a>
                </b-table-column>

                <b-table-column field="stationOrderNumber" label="Station Order" sortable>
                    {{ props.row.stationOrderNumber }}
                </b-table-column>

<!--                 <b-table-column field="currency" label="Currency" sortable>
                    {{ props.row.currency }}
                </b-table-column>
 -->
                <b-table-column field="advertiser" label="Advertiser" sortable>
                    <a style="text-decoration: underline" @click="$toast.open(props.row.advertiser)">
                        {{ props.row.advertiser }}
                    </a>
                </b-table-column>

                <b-table-column field="agency" label="Agency" sortable>
                    {{ props.row.agency }}
                </b-table-column>

               <b-table-column field="product" label="Product" sortable>
                    {{ props.row.product }}
                </b-table-column>

                <b-table-column field="demo" label="Demo" sortable>
                    {{ props.row.demo }}
                </b-table-column>

                <b-table-column field="campaign" label="Campaign" sortable>
                    {{ props.row.campaign }}
                </b-table-column>
                <!--
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
                </b-table-column> -->
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

        <hr class="is-marginless">

        <b-tabs size="is-small">
            <b-tab-item label="HTML">
                <pre><code v-text="code"></code></pre>
            </b-tab-item>
<!--             <b-tab-item label="Handlebars"></b-tab-item>
            <b-tab-item label="Nunjucks"></b-tab-item>
            <b-tab-item label="Pug"></b-tab-item>
            <b-tab-item label="Angular"></b-tab-item>
            <b-tab-item label="React"></b-tab-item>
            <b-tab-item label="Vue"></b-tab-item> -->
<!--             <b-tab-item label="Props"></b-tab-item>
            <b-tab-item label="Events"></b-tab-item> -->
        </b-tabs>

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
            checkedRows: [],
            checkedRows: [avails[1], avails[3]],
            code: `<table class="table is-checkable is-striped is-narrowed">
    ...
</table>`,
            columnsTemplate: [
                { title: 'ID', field: 'id', visible: true },
                { title: 'First Name', field: 'first_name', visible: true },
                { title: 'Last Name', field: 'last_name', visible: true },
                { title: 'Date', field: 'date', visible: true },
                { title: 'Gender', field: 'gender', visible: true }
            ],
            date: null,
            defaultSortDirection: 'asc',
            hasDetails: true,
            hasMobileCards: true,
            isActive: false,
            isBordered: false,
            isCheckable: true,
            isEmpty: false,
            isLoading: false,
            isNarrowed: true,
            isPaginated: false,
            isPaginationSimple: false,
            isStriped: true,
            options: ['list', 'of', 'options'],
            perPage: 20,
            selected: avails[1],
            selected: {},
            value: null
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
