@extends('layouts.main')

@push('css')
     <link rel="stylesheet" href="/Report.css">
@push('title')
   <title>Report</title>

@section('container')
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
      .MainHead{
         text-align: center;
         font-size: 28px;
         font-family: poppins,sans-serif;
         border-bottom: 1px solid #1c1c1c;
         width: 90%;
         padding: 12px;
         margin: 10px auto;
      }
    </style>
</head>
<body>
   <h2 class="MainHead">Member Overview</h2>
    <canvas id="myChart" width="200" height="75"></canvas>
    <!-- <canvas id="myChart2" width="80" height="25"></canvas> -->
    <script>
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
    </script>
</body>
</html>

@endsection