<template>
    <div>
        <b-table :data="isEmpty ? [] : avails" :selected.sync="selected" checkable :checked-rows.sync="checkedRows"
            detailed @details-open="(row, index) => $snackbar.open(`Expanded ${row.advertiser}`)"
            :row-class="(row, index) => row.id === 1 ? 'is-warning' : ''" :bordered="isBordered"
            :striped="isStriped" :narrowed="isNarrowed" :loading="isLoading" :mobile-cards="hasMobileCards"
            :paginated="avails.length > perPage" :per-page="perPage" :pagination-simple="isPaginationSimple"
            :default-sort-direction="defaultSortDirection" default-sort="">
            <template scope="props">
                <b-table-column field="id" meta="Internal ID" label="Number" sortable>
                    <a style="text-decoration: underline" @click="alert">{{ props.row.id }}</a>
                </b-table-column>
                <b-table-column field="status" label="Status" sortable>
                    <span class="tag is-uppercase" :class="props.row.status == 'active' ? 'is-success' : 'is-info'">{{ props.row.status }}</span>
                </b-table-column>
                <b-table-column field="releasedDate" label="Released" sortable>
                    {{ props.row.releasedDate }}
                </b-table-column>
                <b-table-column field="advertiser" width="450" label="Advertiser" sortable>
                    {{ props.row.advertiser }}
                </b-table-column>
                <b-table-column field="agency" width="450" label="Agency" sortable>
                    {{ props.row.agency }}
                </b-table-column>
                <b-table-column field="estimateNumber" label="Estimate" numeric sortable>
                    {{ props.row.estimateNumber }}
                </b-table-column>
                <b-table-column field="flightStartDate" label="Start">
                    {{ props.row.flightStartDate }}
                </b-table-column>
                <b-table-column field="flightEndDate" label="End">
                    {{ props.row.flightEndDate }}
                </b-table-column>
                <b-table-column field="revenue" label="Revenue">
                    {{ props.row.revenue }}
                </b-table-column>
            </template>

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

            <template slot="empty">
                <section class="section">
                    <div class="content has-text-grey has-text-centered">
                        <p>
                            <b-icon icon="sentiment_very_dissatisfied" size="is-large">
                            </b-icon>
                        </p>
                        <p>Nothing here.</p>
                    </div>
                </section>
            </template>
        </b-table>
        <b-field grouped group-multiline>
            <div class="control">
                <b-switch v-model="isBordered">Bordered</b-switch>
            </div>
            <div class="control">
                <b-switch v-model="isStriped">Striped</b-switch>
            </div>
            <div class="control">
                <b-switch v-model="isNarrowed">Narrowed</b-switch>
            </div>
            <div class="control">
                <b-switch v-model="isLoading">Loading state</b-switch>
            </div>
            <div class="control">
                <b-switch v-model="isEmpty">Empty</b-switch>
            </div>
            <div class="control">
                <b-switch v-model="hasMobileCards">Mobile cards
                    <small>(collapsed rows)</small>
                </b-switch>
            </div>
        </b-field>

        <button class="button field is-danger" @click="selected = {}" :disabled="!Object.keys(selected).length">
            <b-icon icon="clear"></b-icon>
            <span>Clear selected</span>
        </button>

        <button class="button field is-danger" @click="checkedRows = []" :disabled="!checkedRows.length">
            <b-icon icon="clear"></b-icon>
            <span>Clear checked</span>
        </button>
        <div class="modal" :class="isActive ? 'is-active' : 'w'">
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
const avails = require('../../data/avails')

export default {
    data () {
        return {
            avails,
            date: null,
            selected: avails[1],
            selected: {},
            checkedRows: [avails[1], avails[3]],
            checkedRows: [],
            isEmpty: false,
            isBordered: true,
            isPaginated: true,
            isPaginationSimple: true,
            defaultSortDirection: 'asc',
            isStriped: true,
            isNarrowed: true,
            isLoading: false,
            hasMobileCards: true,
            isActive: false,
            perPage: 5,
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
