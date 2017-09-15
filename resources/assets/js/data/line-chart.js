module.exports = {
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Data One',
            borderColor: '#FC2525',
            pointBackgroundColor: '#FC2525',
            borderWidth: 1,
            pointBorderColor: 'white',
            backgroundColor: 'hsla(153, 94%, 27%, 0.2)',
            data: [40, 39, 10, 40, 39, 80, 40]
        }, {
            label: 'Data Two',
            borderColor: '#05CBE1',
            pointBackgroundColor: '#05CBE1',
            pointBorderColor: 'white',
            backgroundColor: 'hsla(153, 94%, 27%, 0.2)',
            borderWidth: 1,
            data: [60, 55, 32, 10, 2, 12, 53]
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
