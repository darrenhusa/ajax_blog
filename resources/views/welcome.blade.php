<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
    </head>
    <body>
        <h1>Chart.js Bar chart</h1>

        <canvas id="myChart" width="400" height="300"></canvas>
        
<script>
    var chartData = <?php echo json_encode($chart_data)?>;
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: this.chartData.labels,
        datasets: [{
            // label: this.labelText,
            data: this.chartData.values,
            backgroundColor: [
                'rgba(255, 99, 132, 1)', // red
                'rgba(54, 162, 235, 1)', // blue
                'rgba(255, 206, 86, 1)', // yellow
                // 'rgba(75, 192, 192, 1)',  // green or teal?
                // 'rgba(153, 102, 255, 1)', // purple
                // 'rgba(255, 159, 64, 1)'   // orange
            ],
            // borderColor: [
            //     'rgba(255, 99, 132, 1)',
            //     'rgba(54, 162, 235, 1)',
            //     'rgba(255, 206, 86, 1)',
            //     'rgba(75, 192, 192, 1)',
            //     'rgba(153, 102, 255, 1)',
            //     'rgba(255, 159, 64, 1)'
            // ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        responsive: false,
        plugins: {
            legend: {
                display: false,
            },
            title: {
                display: true,
                text: this.chartData.title
            },
            subtitle: {
                display: true,
                text: this.chartData.subtitle
            }
        }
    }
});
</script>

    </body>
</html>
