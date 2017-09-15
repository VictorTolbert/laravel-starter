<template>
    <b-table :data="orders" striped narrowed :paginated="orders.length > perPage" :per-page="perPage">
        <template scope="props">
            <b-table-column field="id" label="Number" sortable>
                <b><a>{{ props.row.id }}</a></b>
            </b-table-column>

            <b-table-column field="status" label="Status" sortable>
                <span :class="['tag', props.row.status == 'new' ? 'is-success' : 'is-info' ]">{{ props.row.status }}</span>
            </b-table-column>

            <b-table-column field="type" label="Type" sortable>
                {{ props.row.type }}
            </b-table-column>

            <b-table-column field="advertiser" label="Advertiser" sortable>
                {{ props.row.advertiser }}
            </b-table-column>

            <b-table-column field="agency" label="Agency" sortable>
                {{ props.row.agency }}
            </b-table-column>

            <b-table-column field="cpe" label="CPE" sortable>
                {{ props.row.cpe }}
            </b-table-column>

            <b-table-column field="flightStartDate" label="Flight Start">
                {{ props.row.flightStartDate }}
            </b-table-column>

            <b-table-column field="flightEndDate" label="Flight End">
                {{ props.row.flightEndDate }}
            </b-table-column>

            <b-table-column field="revenue" label="Revenue" numeric>
                {{ props.row.revenue.toLocaleString('en-us', { style: 'currency', currency: 'USD' }) }}
            </b-table-column>

            <b-table-column field="currency" label="Currency">
                {{ props.row.currency }}
            </b-table-column>

            <b-table-column field="share" label="Share" numeric>
                {{ props.row.share | decimalToPercent }}
            </b-table-column>
        </template>
    </b-table>
</template>

<script>
    export default {
        data () {
            return {
                isPaginated: true,
                perPage: 10,
                orders: require('@/data/orders')
            }
        }
    }
</script>
