module.exports = {
    data: {
        labels: ['1st Qtr', '2nd Qtr', '3rd Qtr', '4th Qtr'],
        datasets: [{
            backgroundColor: [
                '#83C8BC',
                '#64B1BC',
                '#4296b4',
                '#276092'
            ],
            borderWidth: 0,
            data: [40, 20, 80, 10]
        }]
    },
    options: {
        title: {
            display: false,
            text: 'Custom Chart Title',
            position: 'left'
        },
        events: ['click'],
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        tooltips: {
            mode: 'point'
        },
        legend: {
            display: false,
            position: 'left',
            labels: {
                fontFamily: '"Operator Mono"',
                fontColor: 'rgb(255, 99, 132)',
                fontSize: 16,
                fontStyle: 'bold'
            }
        },
        scales: {
            yAxes: [{
                stacked: false,
                ticks: {
                    beginAtZero: true
                },
                gridLines: {
                    display: true
                }
            }],
            xAxes: [{
                stacked: false,
                gridLines: {
                    display: true
                },
                categoryPercentage: 0.9,
                barPercentage: 0.8
            }]
        },
        responsive: true,
        maintainAspectRatio: false
    }
}
