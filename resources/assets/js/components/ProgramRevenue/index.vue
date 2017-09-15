<template>
    <b-table :data="programs"
        :checkable="isCheckable"
        :selected.sync="selected"
        :paginated="isPaginated"
        :striped="isStriped"
        :narrowed="isNarrowed"
        :per-page="perPage"
        :pagination-simple="isPaginationSimple">
        <template scope="props">
            <b-table-column field="program" label="Program" sortable>
                {{ props.row.program }}
            </b-table-column>

            <b-table-column field="air" label="Air" sortable>
                {{ props.row.air }}
            </b-table-column>

            <b-table-column field="aur_this_year" label="AUR This Year" sortable numeric>
                {{ props.row.aur_this_year }}
            </b-table-column>

            <b-table-column field="aur_last_year" label="AUR Last Year" sortable numeric>
                {{ props.row.aur_last_year }}
            </b-table-column>

            <b-table-column field="revenue_this_year" label="Revenue This Year" sortable numeric>
                {{ props.row.revenue_this_year }}
            </b-table-column>

            <b-table-column field="revenue_last_year" label="Revenue Last Year" sortable numeric>
                {{ props.row.revenue_last_year }}
            </b-table-column>

            <b-table-column field="spot_count" label="Spot Count" sortable numeric>
                <a>{{ props.row.spot_count }}</a>
            </b-table-column>
        </template>
    </b-table>
</template>

<script>
    export default {
        data () {
            return {
                isPaginated: true,
                isPaginationSimple: true,
                isNarrowed: true,
                isStriped: true,
                isCheckable: false,
                checkedRows: [],
                selected: {},
                perPage: 20,
                programs: require('@/data/programs')
            }
        }
    }
</script>
