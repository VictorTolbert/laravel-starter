<template>
    <b-table :data="orders" narrowed striped>
        <template scope="props">
            <b-table-column field="expanded" label="" width="16">
                <a @click="props.row.expanded = !props.row.expanded">
                    <b-icon
                        :size="'is-small'"
                        :icon="(props.row.expanded) ? 'keyboard_arrow_down' : 'keyboard_arrow_right'"
                    ></b-icon>
                </a>
            </b-table-column>
            <b-table-column field="id" label="ID" width="40" sortable>
                {{ props.row.id }}
            </b-table-column>
            <b-table-column field="advertiser" label="Advertiser" sortable>
                {{ props.row.advertiser }}
            </b-table-column>
            <b-table-column field="agency" label="Agency" sortable>
                {{ props.row.agency }}
            </b-table-column>
            <b-table-column field="product" label="Product" sortable>
                {{ props.row.product }}
            </b-table-column>
            <b-table-column field="campaign" label="Campaign" sortable>
                {{ props.row.campaign }}
            </b-table-column>
            <b-table-column field="revenue" label="Revenue" sortable numeric>
                {{ props.row.revenue }}
            </b-table-column>
        </template>
    </b-table>
</template>

<script>
    export default {
        data () {
            return {
                orders: require('@/data/orders')
            }
        }
    }
</script>
