<template>
    <div>
        <!-- https://archive-2_1_4.lightningdesignsystem.com/components/data-tables -->

        <!-- <h2 class="is-size-3">Avails</h2> -->

        <!-- <hr> -->

<!--         <div class="control">
            <b-switch v-model="hasMobileCards">Mobile cards
                <small>(collapsed rows)</small>
            </b-switch>
        </div>

        <div class="control">
            <button class="button field is-outlined" @click="selected = {}" :disabled="!Object.keys(selected).length">
                <b-icon icon="clear" size="is-small"></b-icon>
                <span>Clear selected</span>
            </button>
        </div>

        <div class="control">
            <button class="button field" @click="checkedRows = []" :disabled="!checkedRows.length">
                <b-icon icon="clear" size="is-small"></b-icon>
                <span>Clear checked</span>
            </button>
        </div>

        <hr> -->

        <div class="level">
            <div class="level-left">
                <div class="level-item">
                    <imdb></imdb>
                </div>
                <div class="level-item">
                    <b-field grouped group-multiline>
                        <div class="field">
                            <input id="switch-bordered" type="checkbox" name="switch-bordered" class="switch is-success" checked="checked" v-model="isBordered">
                            <label for="switch-bordered">Bordered</label>
                        </div>

                        <div class="field">
                            <input id="switch-striped" type="checkbox" name="switch-striped" class="switch is-success" checked="checked" v-model="isStriped">
                            <label for="switch-striped">Striped</label>
                        </div>

                        <div class="field">
                            <input id="switch-narrowed" type="checkbox" name="switch-narrowed" class="switch is-success" checked="checked" v-model="isNarrowed">
                            <label for="switch-narrowed">Narrowed</label>
                        </div>

                        <div class="field">
                            <input id="switch-loading" type="checkbox" name="switch-loading" class="switch is-success" checked="checked" v-model="isLoading">
                            <label for="switch-loading">Loading state</label>
                        </div>

                        <div class="field">
                            <input id="switch-empty" type="checkbox" name="switch-empty" class="switch is-success" checked="checked" v-model="isEmpty">
                            <label for="switch-empty">Empty</label>
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
                    <a class="button">Edit Table</a>
                </div>
                <div class="level-item">
                    <a class="button">
                        <b-icon icon="file_download" size="is-small">
                        </b-icon>
                    </a>
                </div>
                <div class="level-item">
                    <a class="button">
                    <b-icon icon="sliders" pack="fa">
                        </b-icon>
                    </a>
                </div>
            </div>
        </div>

        <b-table
            :data="isEmpty ? [] : avails"
            :selected.sync="selected"
            checkable
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
                <b-table-column field="id" meta="Internal ID" label="Number" sortable>
                    <a style="text-decoration: underline" @click="$toast.open(`${props.row.advertiser}, ${props.row.agency}`)">{{ props.row.id }}</a>
                </b-table-column>
                <b-table-column field="status" label="Status" sortable>
                    <span class="tag is-uppercase" :class="props.row.status == 'active' ? 'is-success' : 'is-info'">{{ props.row.status }}</span>
                </b-table-column>
                <b-table-column field="releasedDate" label="Released" sortable>
                    {{ props.row.releasedDate }}
                </b-table-column>
                <b-table-column field="advertiser" width="450" label="Advertiser" sortable>
                    <a style="text-decoration: underline" @click="$toast.open(props.row.advertiser)">{{ props.row.advertiser }}</a>
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
