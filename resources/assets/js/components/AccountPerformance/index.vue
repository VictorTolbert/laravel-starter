<template>
    <b-table :data="accounts"
        :loading="false"
        :checkable="isCheckable"
        :selected.sync="selected"
        :paginated="isPaginated"
        :per-page="perPage"
        :pagination-simple="isPaginationSimple">
        <template scope="props">
            <b-table-column field="count" label="Count" sortable>
                {{ props.row.count }}
            </b-table-column>

            <b-table-column field="advertiser" label="Advertiser" sortable>
                {{ props.row.advertiser }}
            </b-table-column>

            <b-table-column field="agency" label="Agency" sortable>
                {{ props.row.agency }}
            </b-table-column>

            <b-table-column field="revenue" label="Revenue" sortable>
                {{ props.row.revenue }}
            </b-table-column>

            <b-table-column field="spot_volume" label="Spot Volume" sortable numeric>
                <a>{{ props.row.spot_volume }}</a>
            </b-table-column>
        </template>
    </b-table>
</template>

<script>
export default {
    data () {
        return {
            activeTab: 0,
            isPaginated: true,
            isPaginationSimple: true,
            isCheckable: true,
            checkedRows: [],
            selected: {},
            perPage: 20,
            accounts: require('../../data/accounts')
        }
    }
}
</script>
