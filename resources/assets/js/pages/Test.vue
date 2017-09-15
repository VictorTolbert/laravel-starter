<template>
<section class="section" style="background-color: whitesmoke">

    <div class="container">

        <div class="content">
            <h1>Sandbox</h1>
            <hr>

            <div class="container">
                <!-- https://alligator.io/js/copying-to-clipboard/ -->
                <input type="text" v-model="message">
                <button type="button" v-clipboard:copy="message" v-clipboard:success="onCopy" v-clipboard:error="onError">Copy!</button>
                <p v-if="copySucceeded">Copied!</p>
            </div>

            <hr>

            <div class="alligator-information">
                <p>There are {{numberOfHappy}} happy alligators.</p>
                <div v-for="alligator of alligators">
                    <p>Name: {{alligator.name}}</p>
                    <p>Weight: {{alligator.weight}}</p>
                </div>
            </div>

            <table-component :data="[
                          { firstName: 'John', lastName: 'Lennon', instrument: 'Guitar', birthday: '04/10/1940', songs: 72 },
                          { firstName: 'Paul', lastName: 'McCartney', instrument: 'Bass', birthday: '18/06/1942', songs: 70 },
                          { firstName: 'George', lastName: 'Harrison', instrument: 'Guitar', birthday: '25/02/1943', songs: 22 },
                          { firstName: 'Ringo', lastName: 'Starr', instrument: 'Drums', birthday: '07/07/1940', songs: 2 }]" sort-by="songs" sort-order="asc" table-class="table is-bordered is-striped is-narrow is-fullwidth" filter-input-class="input" :show-filter="false" :show-caption="false">
                <table-column show="firstName" label="First name"></table-column>
                <table-column show="lastName" label="Last name"></table-column>
                <table-column show="instrument" label="Instrument"></table-column>
                <table-column show="songs" label="Songs" data-type="numeric"></table-column>
                <table-column show="birthday" label="Birthday" data-type="date:DD/MM/YYYY"></table-column>
                <table-column label="" :sortable="false" :filterable="false">
                    <template scope="row">
                        <a :href="`#${row.firstName}`">Edit</a>
                    </template>
                </table-column>
            </table-component>
    <div>
    <tabs>
        <tab name="First tab">
            This is the content of the first tab
        </tab>
        <tab name="Second tab">
            This is the content of the second tab
        </tab>
        <tab id="oh-hi-mark" name="Custom fragment">
            The fragment that is appended to the url can be customized
        </tab>
        <tab prefix="<span class='glyphicon glyphicon-star'></span> "
             name="Prefix and suffix"
             suffix=" <span class='badge'>4</span>">
            A prefix and a suffix can be added
        </tab>
    </tabs>
</div>

    <intersect @enter="msg = 'Intersected'" @leave="msg = 'Not intersected'">
        <div>{{ msg }}</div>
    </intersect>

        </div>
    </div>

</section>

</template>

<script>
import axios from 'axios'
import Intersect from 'vue-intersect'

import Auth from '../mixins/Auth'
import { filter, countBy } from 'vue-computed-helpers'

export default {
    mixins: [Auth],
    components: { Intersect },
    data: () => ({
        msg: 'I will change',
        copySucceeded: null,
        message: 'Copy These Text',

        alligators: [
            {
                name: 'Betty',
                weight: 850,
                isHappy: true
            },
            {
                name: 'Thompson',
                weight: 792,
                isHappy: false
            },
            {
                name: 'Hubert',
                weight: 927,
                isHappy: true
            }
        ]
    }),
    methods: {
        formatter (value, columnProperties) {
            return `Hi, I am ${value}`
        },
        onCopy: function (e) {
            this.copySucceeded = true
            // alert('You just copied: ' + e.text)
        },
        onError: function (e) {
            alert('Failed to copy texts')
        }
    },
    computed: {
        // happyAlligators: filter('alligators', 'isHappy', true),
        // It's easy to build chains!
        numberOfHappy: countBy('alligators', 'isHappy', true)
    },
    created () {
        // Let's use the function provided by the mixin.
        console.log(`${this.currentUser} is currently logged in.`)
    }
}
</script>
