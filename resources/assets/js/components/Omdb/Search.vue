<template>
    <div class="field">
        <div class="control">
            <input class="input" type="text" name="haberSearch" placeholder="Enter Film Name"
                v-model="query" @keypress.enter="search">
        </div>
        <button class="button" @click="search">Search</button>
    </div>
</template>

<script>
export default {
    data () {
        return {
            query: ''
        }
    },

    methods: {
        search () {
            if (this.query == '') {
                this.$toast.open('You have to enter a movie name.')
            } else {
                this.$emit('search', this.query)
            }
        }
    }
}
</script>

<style>
    .search input {
        padding: 10px;
        width: 400px;
        border-radius: 10px;
    }

    .search button {
        padding: 10px;
        width: 100px;
        border-radius: 10px;
        background-color: #60e9ff;
        color: black;
    }
</style>
