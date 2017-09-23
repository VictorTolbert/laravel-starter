<template>
    <div class="container">
        <p v-if="loading">Loading...</p>
        <data-table
            :headerTitle="'Data Driven For Lyfe'"
            :columns="columns"
            :data="data"
            :clickRow="clickRow"
            v-if="!loading"></data-table>
    </div>
</template>

<script>
    import Api from '@/Api'
    import DataTable from '@/components/DataTable'

    export default {
        name: 'data-driven',
        components: {
            DataTable
        },
        data () {
            return {
                data: [],
                loading: true,
                columns: ['id', 'name', 'username', 'email', 'phone', 'website']
            }
        },
        created () {
            Api.getUsers().then(response => {
                this.loading = false
                this.data = response.data
            }, error => {
                this.loading = false
                console.error(error)
            })
        },
        methods: {
            clickRow (el) {
                console.log(`You clicked row ${el.target.parentElement.id}!`)
            }
        }
    }
</script>
