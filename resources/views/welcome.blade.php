<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

       {{-- <script src="https://code.highcharts.com/highcharts.js"></script>

        <script src="https://code.highcharts.com/modules/drilldown.js"></script>

        <script src="https://code.highcharts.com/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>--}}

        {{--Billboard script--}}
        <script src="https://d3js.org/d3.v5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css">
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
        {{--<div id="container" style="height: 400px; min-width: 310px"></div>--}}
        {{--<button id="large">Large</button>
        <button id="small">Small</button>--}}
        {{--<script>

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
            /*$(function () {
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
            });*/


            /*DrillDown*/
            /*Highcharts.chart('container',{
               chart: {
                   type: 'column'
               } ,
                title: {
                   text: 'Basic drilldown'
                },
                xAxis: {
                   type: 'category'
                },

                legend: {
                   enabled: false
                },
                plotOptions: {
                   series: {
                       borderWidth: 0,
                       dataLabels: {
                           enabled: false
                       }
                   }
                },

                series: [
                    {
                        name: 'Things',
                        colorByPoint: true,
                        data: [{
                            name: 'Animals',
                            y: 5,
                            drilldown: 'animals'
                        },{
                            name: 'Fruits',
                            y: 2,
                            drilldown: 'fruits'
                        }, {
                            name: 'Cars',
                            y: 4,
                            drilldown: 'cars'
                        }]
                    }],
                    drilldown: {
                        series: [{
                            id: 'animals',
                            data: [
                                ['Cats',4],
                                ['Dogs',2],
                                ['Cows', 1],
                                ['Sheep', 2],
                                ['Pigs', 1]
                            ]
                        },{
                            id: 'fruits',
                            data: [
                                ['Apples', 4],
                                ['Oranges', 2]
                            ]
                        },{
                            id: 'cars',
                            data: [
                                ['Toyota', 4],
                                ['Opel', 2],
                                ['Volkswagen', 2]
                            ]
                        }]
                    }
            });*/

            /* DrillDown Async*/
            /*Highcharts.chart('container', {
                chart: {
                    type: 'column',
                    events: {
                        drilldown: function (e) {
                            if(!e.seriesOptions) {

                                var chart = this,
                                    drilldowns = {
                                    'Animals': {
                                        name: 'Animals',
                                        data: [
                                            ['Cows', 2],
                                            ['Sheep', 3],
                                        ]
                                    },
                                        'Fruits' : {
                                            name: 'Fruits',
                                            data : [
                                                ['Apples', 5],
                                                ['Oranges', 7],
                                                ['Bananas', 2]
                                            ]
                                        },
                                        'Cars': {
                                            name: 'Cars',
                                            data: [
                                                ['Toyota', 1],
                                                ['Volkswagen', 2],
                                                ['Opel', 5]
                                            ]
                                        }
                                    },
                                    series = drilldowns[e.point.name];

                                // Show the loading label
                                chart.showLoading('Simulating Ajax ...');

                                setTimeout(function () {
                                    chart.hideLoading();
                                    chart.addSeriesAsDrilldown(e.point,series);
                                }, 1000);
                            }
                        }
                    }
                },
                title: {
                    text: 'Async drilldown'
                },
                xAxis: {
                    type:'category'
                },
                legend: {
                    enabled: false
                },

                plotOptions: {
                    series: {
                        borderWidth:0,
                        dataLabels:{
                            enabled:true
                        }
                    }
                },

                series: [{
                    name: 'Things',
                    colorByPoint:true,
                    data: [{
                        name: 'Animals',
                        y: 5,
                        drilldown: true
                    }, {
                        name: 'Fruits',
                        y: 2,
                        drilldown: true
                    }, {
                        name: 'Cars',
                        y: 4,
                        drilldown: true
                    }]
                }],

                drilldown: {
                    series: []
                }
            });*/

            /* Responsive charts */
            /*var chart = Highcharts.chart('container', {
               chart: {
                   type: 'column'
               },
               title: {
                   text: 'Highcharts responsive chart'
               },
               subtitle: {
                   text: 'Resize the frame to see the legend position change'
               },
                legend: {
                   align: 'right',
                    verticalAlign: 'middle',
                    layout: 'vertical'
                },
                xAxis: {
                   categories: ['Apples','Oranges','Bananas']
                },

                yAxis: {
                   title: {
                       text: 'Amount'
                   }
                },

                series: [{
                   name: 'Christmas Eve',
                    data: [1,4,3]
                }, {
                   name: 'Christmas Day before dinner',
                    data: [6,4,2]
                },{
                   name: 'Christmas Day after dinner',
                    data: [8,4,3]
                }],

                responsive: {
                   rules: [{
                       condition: {
                           maxWidth: 500
                       },
                       chartOptions: {
                           legend: {
                               align: 'center',
                               verticalAlign: 'bottom',
                               layout:'horizontal'
                           }
                       }
                   }]
                }
            });

            $('#small').click(function () {
                chart.setSize(400,300);
            });

            $('#large').click(function () {
                chart.setSize(600,300);
            });*/


            /* Mixed charts*/
            /*Highcharts.chart('container', {
               title: {
                   text: 'Title: Combination chart'
               },
                xAxis: {
                   categories: ['Apples','Oranges','Pears','Bananas','Plums']
                },
                labels: {
                   items: [{
                       html: 'Title: Total fruit consumption',
                       style: {
                           left: '80px',
                           top: '18px',
                           color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                       }
                   }]
                },
                series: [{
                   type: 'column',
                    name: 'Jane',
                    data: [3,2,1,3,4]
                }, {
                   type: 'column',
                    name: 'john',
                    data: [2,3,5,7,6]
                }, {
                   type: 'column',
                    name: 'Joe',
                    data: [4,3,3,9,0]
                }, {
                   type: 'spline',
                    name: 'Average',
                    data: [3,2.67,3,6.33,3.33],
                    marker: {
                       lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[9],
                        fillColor: 'red'
                    }
                }, {
                   type: 'pie',
                    name: 'Total consumption',
                    data: [{
                       name: 'Jane',
                        y: 13,
                        color: Highcharts.getOptions().colors[0] //jane's
                    }, {
                       name: 'John',
                        y: 23,
                        color: Highcharts.getOptions().colors[1] // John's
                    }, {
                       name: 'Joe',
                        y: 19,
                        color: Highcharts.getOptions().colors[2] // Joe's color
                    }],
                    center: [100,80],
                    size: 100,
                    showInLegend: false,
                    dataLabels: {
                       enabled: false
                    }
                }]
            });*/



        </script>--}}



        {{--Billboard.js--}}

        {{--<div id="chart"></div>--}}

        {{--<div id="AreaChart"></div>--}}

        <div id="AreaRangeChart"></div>

    <script>
        /*var chart = bb.generate({
           bindto: "#chart",
           data: {
               type: "bar",
               columns: [
                   ["data1",30,200,100,170,150,250],
                   ["data2",130,100,140,35, 110,50]
               ]
           }
        });*/

        // AreaChart
        /*var chart = bb.generate({
           data: {
               columns: [
                   ["data1",300, 350, 300, 0,0,0],
                   ["data2", 130, 100, 140, 200, 150, 50]
               ],
               types: {
                   data1: "area",
                   data2: "area-spline"
               }
           },
            bindto: "#AreaChart"
        });*/

        // AreaRangeChart
        var chart = bb.generate({
           data: {
               x: "x",
               columns: [
                   ["x","2013-01-01","2013-01-02","2013-01-03","2013-01-04","2013-01-05","2013-01-06"],
                   ["data1", [150, 140, 110],
                   [155,130,115],
                   [160,135,120],
                   [135,120,110],
                   [180,150,130],
                   [199,160,125]
                   ],
                        ["data2", 130,340,200,500,250,350]
               ],
               types: {
                   data1: "area-line-range"
               }
           },
            axis: {
               x: {
                   type:"timeseries",
                   tick: {
                       format: "%Y-%m-%d"
                   }
               }
            },
            bindto: "#AreaRangeChart"
        });

        setTimeout(function () {
            chart.load({
                columns: [
                    ["data3",[220,215,205],[240,225,215],[260,235,225],[280,245,235],[280,245,235],[270,255,225],[240,225,215]],
                ],
                types: {
                    data3: "area-spline-range"
                }
            });
        },1000);

        setTimeout(function () {
           chart.load({
               columns: [
                   ["data4",
                       {high: 155, low:145, mid: 150},
                       {high: 200, mid: 190, low: 150},
                       {high: 230, mid: 215, low: 200},
                       {high: 210, mid: 200, low: 180},
                       {high: 220, mid: 210, low: 190},
                       {high: 200, mid: 180, low: 160}
                   ]
               ],
               types: {
                   data4: "area-spline-range"
               }
           });
        },1500);


    </script>


    </body>
</html>
