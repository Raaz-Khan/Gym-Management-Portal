document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($dataPoints->pluck('label')) !!},
            datasets: [{
                label: 'Values',
                data: {!! json_encode($dataPoints->pluck('value')) !!},
                backgroundColor: 'rgba(227, 106, 59, 1)',
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
// document.addEventListener('DOMContentLoaded', function () {
//     var ctx = document.getElementById('myChart2').getContext('2d');
//     var myChart = new Chart(ctx, {
//         type: 'pie',
//         data: {
//             labels: {!! json_encode($dataPoints->pluck('label')) !!},
//             datasets: [{
//                 label: 'Values',
//                 data: {!! json_encode($dataPoints->pluck('value')) !!},
//                 backgroundColor: 'rgba(227, 106, 59, 1)',
//             }]
//         },
//         options: {
//             scales: {
//                 y: {
//                     beginAtZero: true
//                 }
//             }
//         }
//     });
// });