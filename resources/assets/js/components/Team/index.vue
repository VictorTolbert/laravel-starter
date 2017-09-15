<template>
    <section class="section">
        <div class="container">
            <h1 class="title">Product Team</h1>
            <!-- <h2 class="subtitle">Unicorns are lame. ..said no one ever!</h2> -->
            <hr>

<!--             <p class="content"><b>Selected:</b> {{ team.selected }}</p>
            <b-field label="Find a name">
                <b-autocomplete
                    v-model="team.name"
                    placeholder="e.g. Anne"
                    :keep-first="team.keepFirst"
                    :data="filteredDataObj"
                    field="name"
                    @select="option => team.selected = option">
                </b-autocomplete>
            </b-field> -->

            <div class="columns is-multiline">
                <div class="column is-2"
                    v-for="(person, index) in team.data"
                    :key="index">
                    <figure class="image">
                        <img :src="`/static/team/${person.name.toLowerCase()}.jpg`" alt="">
                    </figure>
                    {{person.name}}<br>
                    {{person.title}}
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data () {
            return {
                team: {
                    data: require('@/data/team'),
                    keepFirst: true,
                    name: '',
                    selected: null
                },
                template: `
                <div>
                    <p>Foo</p>
                </div>
                `
            }
        },
        computed: {
            filteredDataObj () {
                return this.team.data.filter((option) => {
                    return option.name
                        .toString()
                        .toLowerCase()
                        .indexOf(this.team.name.toLowerCase()) >= 0
                })
            }
        }
    }
</script>
