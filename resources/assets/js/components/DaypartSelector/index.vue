<template>
    <b-radio-group v-model="selectedDaypart">
        <b-radio-button v-for="(daypart, index) in dayparts" :key="index" :value="daypart">
            {{daypart}}
        </b-radio-button>
    </b-radio-group>
</template>

<script>
    export default {
        data () {
            return {
                selectedDaypart: 'Early Morning',
                dayparts: [
                    'Early Morning',
                    'Daytime',
                    'Early Fringe',
                    'Early News ',
                    'Prime Access',
                    'Prime/Specials',
                    'Sports',
                    'Late News',
                    'Late Fringe',
                    'Weekend',
                    'Overnight'
                ]
            }
        }
    }
</script>
