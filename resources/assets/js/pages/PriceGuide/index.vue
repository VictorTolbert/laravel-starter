<template>
    <section class="section">
        <div class="container">

<!--             <h1 class="title">Price Guide</h1>
            <h2 class="subtitle">Use the Price Guide to review your rates and to either accept the Videa rates or override the Videa rates. The price is set prior to avail in the price guide. If you accept the Videa rates, know that Videa updates the rates every Sunday.</h2>
 -->           <!--  <b-message type="is-success" has-icon>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
            </b-message> -->
            <div class="columns">
                <div class="column is-2">
                    <div class="field">
                        <label for="daypart-selector" class="label">Select Daypart</label>
                        <p class="control">
                            <span class="select">
                                <select name="" id="daypart-selector" v-model="selectedDaypart">
                                    <option
                                        v-for="(daypart, index) in dayparts"
                                        :key="daypart.id"
                                        :value="daypart.name">
                                        {{daypart.name}}
                                    </option>
                                </select>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="column is-2">
                    <div class="field">
                        <label class="label">Quarter</label>
                        <p class="control">
                            <span class="select">
                                <select>
                                    <option>2017</option>
                                </select>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <hr class="is-marginless">
            <b-table :data="programs"
                :checkable="isCheckable"
                :selected.sync="selected"
                :paginated="isPaginated"
                :per-page="perPage"
                :pagination-simple="isPaginationSimple">
                <template scope="props">
                    <b-table-column field="name" label="Program" sortable>
                        {{ props.row.name }}
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
        </div>
    </section>
</template>

<script>
    export default {
        data () {
            return {
                activeTab: 0,
                isPaginated: true,
                isPaginationSimple: true,
                isCheckable: false,
                checkedRows: [],
                selected: {},
                perPage: 20,
                accounts: require('@/data/accounts'),
                dayparts: require('@/data/dayparts'),
                selectedDaypart: 'Daytime',
                programs: require('@/data/price-guide')[0].programs
            }
        }
    }
</script>
