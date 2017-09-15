<template>
    <div>
        <h1 class="title">Chart</h1>
        <h2 class="subtitle">Chart...</h2>
        <hr>
        <!-- <img src="/static/vectors/chartjs-logo.svg" style="height: 3rem"> -->

        <div class="columns">
            <div class="column">
                <div class="box">
                    <bar-chart :chart-data="barChart.data" :options="barChart.options"></bar-chart>
                </div>
            </div>

            <div class="column">
                <div class="box">
                    <line-chart :chart-data="lineChart.data" :options="lineChart.options"></line-chart>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="box">
                    <pie-chart :chart-data="pieChart.data" :options="pieChart.options"></pie-chart>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <doughnut-chart :chart-data="doughnutChart.data" :options="doughnutChart.options"></doughnut-chart>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="box">
                    <pie-chart :chart-data="genderData"  :options="pieChart.options"></pie-chart>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import BarChart from '@/components/BarChart'
    import PieChart from '@/components/PieChart'
    import LineChart from '@/components/LineChart'
    import DoughnutChart from '@/components/DoughnutChart'

    export default {
        components: {
            DoughnutChart,
            BarChart,
            PieChart,
            LineChart
        },
        data () {
            return {
                doughnutChart: require('@/data/doughnut-chart'),
                barChart: require('@/data/bar-chart'),
                lineChart: require('@/data/line-chart'),
                pieChart: require('@/data/pie-chart'),
                genderData: {
                    labels: ['Male', 'Female'],
                        datasets: [{
                            backgroundColor: [
                                'hsla(2, 58%, 48%, 1)',
                                'hsla(196, 99%, 32%, 1)'
                            ],
                            borderWidth: 0,
                            data: [59, 41]
                        }]
                    }
            }
        }
    }
</script>
