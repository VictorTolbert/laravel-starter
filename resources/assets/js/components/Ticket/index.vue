<template>
    <section class="ticket section">
        <div class="container">
            <div class="level">
                <h1 class="title">Ticket <strong>{{ id }}</strong> Details</h1>
                <router-link :to="{ name: 'tickets' }">Back to Tickets</router-link>
            </div>
            <div class="content">
                <div class="box">
                    <div class="label">Subject</div>
                    <p class="subtitle">{{ ticket.subject }}</p>
                    <div class="label">Status</div>
                    <p>{{ ticket.status }}<p>
                    <div class="label">Priority</div>
                    <p>{{ ticket.priority }}</p>
                </div>
                <h2 class="subtitle">Comments</h2>

                <b-table :data="ticket.comments">
                    <template scope="props">
                        <b-table-column field="created_at" label="Created" sortable>
                            {{ props.row.created_at }}
                        </b-table-column>
                        <b-table-column field="updated_at" label="Last Updated" sortable>
                            {{ props.row.updated_at }}
                        </b-table-column>
                        <b-table-column field="created_by" label="Created By">
                            {{ props.row.created_by }}
                        </b-table-column>
                        <b-table-column field="comment" label="Comment">
                            <strong>{{ props.row.created_by }}</strong><br>
                            {{ props.row.comment }}
                        </b-table-column>
                    </template>
                </b-table>
            </div>
            <router-view></router-view>
        </div>
    </section>
</template>

<script>
    import axios from 'axios'
    axios.defaults.baseURL = 'http://localhost:3000'

    export default {
        props: ['id'],
        data () {
            return {
                ticket: {}
            }
        },

        created () {
            axios.get(`/tickets/${this.id}`)
                .then(({data}) => this.ticket = data)
        }
    }
</script>
