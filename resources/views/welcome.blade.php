<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        {{--<script src="https://code.highcharts.com/stock/highstock.js"></script>
        <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/stock/modules/export-data.js"></script>--}}

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        {{--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>--}}

        <div id="container" style="height: 400px; min-width: 310px"></div>

        <br>
        <hr>

        <div id="container2" style="height: 400px; min-width: 310px"></div>

        <script>

            // Bad code:
            /*var options = new Object();

            options.chart = new Object();
            options.chart.renderTo = 'container';
            options.chart.type = 'bar';

            options.series = new Array();
            options.series[0] = new Object();
            options.series[0].name = 'Jane';
            options.series[0].data = new Array(1, 0, 4);
            options.series[1] = new Object();
            options.series[1].name = 'John';
            options.series[1].data = new Array(4, 3, 8);*/

            // Good code:
            /*var options = {
                chart: {
                    renderTo: 'container',
                    type: 'bar'
                },
                title: {
                    text: 'Bar Chart Title: Fruit Consumption'
                },
                xAxis: {
                    categories: ['Apples','Bananas','Oranges']
                },
                yAxis: {
                    title: {
                        text: 'y-axis title: Fruit eaten'
                    }
                },
                series: [{
                    name: 'Jane',
                    data: [1,0,4]
                }, {
                    name: 'John',
                    data: [5,7,3]
                }]
            };*/
            /*$(document).ready(function () {
               var chart = new Highcharts.Chart(options);
            });*/
            /*$(function () {
               var myChart =  new Highcharts.chart(options);
            });*/


            /* Set options globally */
            $(function () {
                Highcharts.setOptions({
                    chart: {
                        backgroundColor: {
                            linearGradient: [0,0,500,500],
                            stops: [
                                [0, 'rgb(255, 255, 255)'],
                                [1,'rgb(240,240,255)']
                            ]
                        },
                        borderWidth: 2,
                        plotBackgroundColor: 'rbga(255,255,255, .9)',
                        plotShadow: true,
                        plotBorderWidth: 1
                    }
                });

                var chart1 = new Highcharts.Chart({
                    chart: {
                        renderTo:'container',
                    },

                    xAxis: {
                        type: 'datetime'
                    },

                    series: [{
                        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
                        pointStart: Date.UTC(2018,1,5),
                        pointInterval: 9600 * 1000 // time interval
                    }]
                });

                var chart2 = new Highcharts.Chart({
                   chart: {
                       renderTo: 'container2',
                       type: 'column'
                   },
                   xAxis: {
                       type: 'datetime'
                   },
                   series: [{
                       data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
                       pointStart: Date.UTC(2010,0, 1),
                       pointInterval: 3600 * 1000 // one hour
                   }]
                });
            });
        </script>
    </body>
</html>
