<template>
    <div class="container">

        <div class="columns">
            <div class="column">
                <float-label>
                <b-field>
                    <b-autocomplete
                        v-model="example.name"
                        placeholder="Advertiser"
                        :keep-first="example.keepFirst"
                        :data="filteredDataObj"
                        field="user.first_name"
                        @select="option => example.selected = option"
                    >
                        </b-autocomplete>
                </b-field>
                </float-label>
            </div>
            <div class="column">
                <p class="content" v-if="example.selected">
                    <b>Selected:</b>
                    <pre>{{ example.selected }}</pre>
                </p>
            </div>
        </div>

    </div>
</template>

<script>
import data from '../../data/data_test.json'

export default {
    data () {
        return {
            example: {
                data,
                keepFirst: true,
                name: '',
                selected: null
            }
        }
    },
    computed: {
        filteredDataObj () {
            return this.example.data.filter((option) => {
                return option.user.first_name
                    .toString()
                    .toLowerCase()
                    .indexOf(this.example.name.toLowerCase()) >= 0
            })
        }
    }
}
</script>
