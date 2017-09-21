<template>
    <div id="omdb">
        <search @search="search"></search>
        <film :films="films"></film>
    </div>
</template>

<script>
import Search from './Search'
import Film from './Film'

export default {
    name: 'app',
    components: { Search, Film },
    data () {
        return {
            films: []
        }
    },
    methods: {
        search (query) {
            this.films = []
            fetch('/movies.json?t=' + query)
                .then((res) => { return res.json() })
                .then((res) => {
                    this.films = res
                    console.log(this.films.Error)
                })
        }
    },
    created () {
        fetch('/movies.json/?t=Fast')
            .then((res) => { return res.json() })
            .then((res) => {
                this.films = res
                console.log(this.films.Error)
            })
    }
}
</script>
