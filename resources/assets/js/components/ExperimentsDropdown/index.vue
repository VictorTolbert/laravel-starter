<template>
    <b-dropdown v-model="selectedItem" @change="onChange">
        <a class="nav-item" slot="trigger">
            <!-- <b-icon icon="web"></b-icon> -->
            <span>{{label}}</span>
            <b-icon icon="arrow_drop_down"></b-icon>
        </a>
        <b-dropdown-option
            v-for="(item, index) in items"
            :value="item.value"
            :key="index">
            {{item.name}}
        </b-dropdown-option>
    </b-dropdown>
</template>

<script>
    export default {
        name: 'dropdown',
        props: ['items', 'label'],
        data () {
            return {
                selectedItem: ''
            }
        },
        methods: {
            onChange (val) {
                this.$router.push({
                    name: val
                })
            }
        },
        created () {
            this.$on('change', this.onChange)
        }
    }
</script>
