<template>
    <div class="ticket">
        <h1 class="title">Ticket: {{ id }}</h1>
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
                    <b-table-column field="updated_at" label="Created" sortable>
                        {{ props.row.created_at }}
                    </b-table-column>
                    <b-table-column field="updated_at" label="Last Updated" sortable>
                        {{ props.row.updated_at }}
                    </b-table-column>
                    <b-table-column field="comment" label="Comment" sortable>
                        {{ props.row.comment }}
                    </b-table-column>
                </template>
            </b-table>
        </div>

        <router-view></router-view>
    </div>
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
