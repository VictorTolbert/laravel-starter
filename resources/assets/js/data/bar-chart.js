module.exports = {
    data: {
        labels: ['1st Qtr', '2nd Qtr', '3rd Qtr', '4th Qtr'],
        datasets: [{
            label: '2016',
            backgroundColor: [
                '#83C8BC',
                '#64B1BC',
                '#4296b4',
                '#276092'
            ],
            borderColor: [
                'rgba(0, 0, 0, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(0, 0, 0, 1)'
            ],
            borderWidth: 1,
            data: [40, 20, 12, 39]
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Quarterly Revenue ',
            position: 'top'
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
                    display: false
                },
                categoryPercentage: 0.9,
                barPercentage: 0.8
            }]
        },
        responsive: true,
        maintainAspectRatio: false
    }
}
