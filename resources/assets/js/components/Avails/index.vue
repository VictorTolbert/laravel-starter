<template>
    <div>

    <b-field>
        <b-input
            expanded
            placeholder="Search..."
            icon="search"
        >
            </b-input>
    </b-field>

    <hr>

        <div class="level">
            <div class="level-left">
                <div class="level-item">

                    <b-field>
                        <b-input
                            expanded
                            placeholder="Search..."
                            icon="search"
                        >
                            </b-input>
                    </b-field>

                </div>
                <div class="level-item">

                    <button
                        v-tooltip.top="{ html: 'tooltipContent' }"
                        class="button is-link"
                    >
                        Multiline (default)
                        </button>

                        <div id="tooltipContent">
                            <div class="content">
                                <p>Hello
                                    <b>There</b> Maecenas sed diam eget risus varius blandit sit amet non
                                    magna.</p>
                            </div>
                        </div>

                </div>

            </div>
            <div class="level-right">
                <div class="level-item">
                    <b-field>
                        <b-select placeholder="Select columns">
                            <option value="flint">All</option>
                            <option value="flint">Advertiser</option>
                        </b-select>
                    </b-field>
                </div>
                <div class="level-item">
                    <b-field>
                        <b-select
                            v-model="perPage"
                            :disabled="!isPaginated"
                        >
                            <option value="5">5 per page</option>
                            <option value="10">10 per page</option>
                            <option value="15">15 per page</option>
                            <option value="20">20 per page</option>
                        </b-select>
                    </b-field>

                </div>
            </div>
        </div>

        <b-table :data="avails"
            striped
            checkable
            bordered
            detailed
            :paginated="avails.length > perPage"
            :per-page="perPage"
            :pagination-simple="isPaginationSimple"
            :default-sort-direction="defaultSortDirection"
            default-sort=""
            >

            <template scope="props">
                <b-table-column field="id" label="Number" sortable>
                    <a style="text-decoration: underline" @click="alert">{{ props.row.id }}</a>
                </b-table-column>
                <b-table-column field="status" label="Status" sortable>
                    <span class="tag is-rounded is-uppercase" :class="props.row.status == 'active' ? 'is-success' : 'is-info'">{{ props.row.status }}</span>
                </b-table-column>
                <b-table-column field="releasedDate" label="Released" sortable>
                    {{ props.row.releasedDate }}
                </b-table-column>
                <b-table-column field="advertiser" width="450" label="Advertiser" sortable>
                    {{ props.row.advertiser }}
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
                <b-table-column field="revenue" label="Revenue" >
                    {{ props.row.revenue }}
                </b-table-column>
            </template>

            <template
                slot="detail"
                scope="props"
            >
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
                                <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Proin ornare magna eros, eu pellentesque tortor vestibulum ut.
                                Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                            </p>
                        </div>
                    </div>
                </article>
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
export default {
    data () {
        return {
            avails: require('../../data/avails'),
            isPaginated: true,
            isPaginationSimple: true,
            defaultSortDirection: 'asc',
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
