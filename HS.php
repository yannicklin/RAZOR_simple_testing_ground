<?php
    $PageTitle="High Stock";

    function customPageHeader(){
        ?>
        <script src="http://code.highcharts.com/stock/highstock.js"></script>
        <script src="http://code.highcharts.com/stock/modules/exporting.js"></script>
    <?php
    }

    include_once('head.php');
    ?>
        <div id="HS_Container" style="min-width: 310px; height: 400px; margin: 0 auto; background-color: #fff;"></div>
        <!-- High Stock Script -->
        <script>
            $(function() {
                var seriesOptions = [],
                    yAxisOptions = [],
                    seriesCounter = 0,
                    names = ['MSFT', 'AAPL', 'GOOG'],
                    colors = Highcharts.getOptions().colors;

                $.each(names, function(i, name) {

                    $.getJSON('http://www.highcharts.com/samples/data/jsonp.php?filename='+ name.toLowerCase() +'-c.json&callback=?',	function(data) {

                        seriesOptions[i] = {
                            name: name,
                            data: data
                        };

                        // As we're loading the data asynchronously, we don't know what order it will arrive. So
                        // we keep a counter and create the chart when all the data is loaded.
                        seriesCounter++;

                        if (seriesCounter == names.length) {
                            createChart();
                        }
                    });
                });

                // create the chart when all data is loaded
                function createChart() {

                    $('#HS_Container').highcharts('StockChart', {

                        rangeSelector: {
                            inputEnabled: $('#HS_Container').width() > 480,
                            selected: 4
                        },

                        yAxis: {
                            labels: {
                                formatter: function() {
                                    return (this.value > 0 ? '+' : '') + this.value + '%';
                                }
                            },
                            plotLines: [{
                                value: 0,
                                width: 2,
                                color: 'silver'
                            }]
                        },

                        plotOptions: {
                            series: {
                                compare: 'percent'
                            }
                        },

                        tooltip: {
                            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
                            valueDecimals: 2
                        },

                        series: seriesOptions
                    });
                }

            });

            /**
             * Grid-light theme for Highcharts JS
             * @author Torstein Honsi
             */

            // Load the fonts
            Highcharts.createElement('link', {
                href: 'http://fonts.googleapis.com/css?family=Dosis:400,600',
                rel: 'stylesheet',
                type: 'text/css'
            }, null, document.getElementsByTagName('head')[0]);

            Highcharts.theme = {
                colors: ["#7cb5ec", "#f7a35c", "#90ee7e", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
                    "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
                chart: {
                    backgroundColor: null,
                    style: {
                        fontFamily: "Dosis, sans-serif"
                    }
                },
                title: {
                    style: {
                        fontSize: '16px',
                        fontWeight: 'bold',
                        textTransform: 'uppercase'
                    }
                },
                tooltip: {
                    borderWidth: 0,
                    backgroundColor: 'rgba(219,219,216,0.8)',
                    shadow: false
                },
                legend: {
                    itemStyle: {
                        fontWeight: 'bold',
                        fontSize: '13px'
                    }
                },
                xAxis: {
                    gridLineWidth: 1,
                    labels: {
                        style: {
                            fontSize: '12px'
                        }
                    }
                },
                yAxis: {
                    minorTickInterval: 'auto',
                    title: {
                        style: {
                            textTransform: 'uppercase'
                        }
                    },
                    labels: {
                        style: {
                            fontSize: '12px'
                        }
                    }
                },
                plotOptions: {
                    candlestick: {
                        lineColor: '#404048'
                    }
                },


                // General
                background2: '#F0F0EA'

            };

            // Apply the theme
            Highcharts.setOptions(Highcharts.theme);
         </script>
    <?php
    include_once('foot.php');
?>