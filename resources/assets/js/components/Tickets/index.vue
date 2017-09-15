<template>
    <section class="tickets section">
        <div class="container">
            <nav class="level">
                <div class="level-left">
                    <div class="level-item">
                        <h1 class="title">Tickets</h1>
                    </div>
                </div>
                <div class="level-right">
                    <div class="level-item">
                        <div class="field">
                            <router-link
                                class="button is-primary"
                                :to="{ name: 'create-ticket' }"
                                tag="button">
                                <span>Create New Ticket</span>
                            </router-link>
                        </div>
                    </div>
                </div>
            </nav>

            <hr class="is-marginless">

            <b-table
                :data="tickets"
                :bordered="isBordered"
                :striped="isStriped"
                :narrowed="isNarrowed"
                :paginated="isPaginated"
                :checkable="isCheckable"
                :mobile-cards="hasMobileCards"
                default-sort="priority"
                :selected.sync="selected"
                :checked-rows.sync="checkedRows">

                <template scope="props">
                    <b-table-column field="id" label="Number" width="40" numeric sortable>
                        <b><router-link
                            :to="{ name: 'ticket', params: { id: props.row.id } }"
                        >{{ props.row.id }}</router-link></b>
                    </b-table-column>

                    <b-table-column field="date_opened" label="Opened" sortable>
                        {{ props.row.date_opened }}
                    </b-table-column>

                    <b-table-column field="status" label="Status" width="40" sortable>
                        {{ props.row.status }}
                    </b-table-column>

                    <b-table-column field="priority" label="Priority" width="40" sortable>
                        {{ props.row.priority }}
                    </b-table-column>

                    <b-table-column field="subject" label="Subject" sortable>
                        {{ props.row.subject }}
                    </b-table-column>
                </template>
            </b-table>

        </div>
    </section>
</template>

<script>
    import axios from 'axios'
    import data from '@/assets/data_test.json'

    export default {
        name: 'tickets',
        data () {
            return {
                tickets: [],
                checkedRows: [],
                selected: {},
                isBordered: false,
                isStriped: true,
                isNarrowed: false,
                isCheckable: false,
                hasMobileCards: true,
                isPaginated: true,
                syncExample: {
                    data,
                    keepFirst: true,
                    name: '',
                    selected: null
                }
            }
        },
        methods: {
            clearSelected () {
                this.selected = {}
            },
            clearCheckedRows () {
                this.checkedRows = []
            }
        },
        computed: {
            filteredDataObj () {
                return this.syncExample.data.filter((option) => {
                    return option.user.first_name
                        .toString()
                        .toLowerCase()
                        .indexOf(this.syncExample.name.toLowerCase()) >= 0
                })
            }
        },
        created () {
            axios.get('/tickets')
                .then(({data}) => this.tickets = data)
        }
    }
</script>
