@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h3>DASHBOARD SEGMENTASI</h3>
    </div>

    <div style="display:flex;">
        <form action="/dashboardSegmentasi" class="row g-3" method="get">
            <div style="margin:20px 5px 15px 25px;">
                <!-- <select name="tahun" id="tahun" onchange="document.getElementById('my-form').submit()">
                    <option value="">Tahun</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select> -->
            </div>
            <div style="width:600px;">
                <input type="text" name="Kecamatan(Lokasi_Umkm)" class="form-control" placeholder="kecamatan">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn mb-2" style="background:#1e90ff; color:white">search</button>
            </div>
        </form>
    </div>
</div>

<div style="width: 100%; display: flex;">
    <div id="grafik1" style="flex: 1;"></div>
    <div id="grafik2" style="flex: 1;"></div>
</div>

<div style="width: 100%; display: flex;">
    <div id="grafik3" style="flex: 1;"></div>
    <div id="grafik4" style="flex: 1;"></div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart("grafik1", {
        chart: {
            type: "pie",
        },
        title: {
            text: "Penyebaran Jumlah UMKM Berdasarkan Kecamatan",
        },
        subtitle: {
            text: "Pekanbaru",
        },
        xAxis: {
            categories: {
            },
            crosshair: true,
        },
        yAxis: {
            min: 0,
            title: {
                text: "Jumlah UMKM",
            },
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            footerFormat: "</table>",
            shared: true,
            useHTML: true,
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: "pointer",
                dataLabels: {
                    enabled: true,
                    format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black",
                    },
                },
            },
        },
        series: [{
            name: "Total",
            data: {
            }.map((val, index) => ({
                name: {
                } [index],
                y: val,
            })),
        }, ],
    });

    Highcharts.chart("grafik2", {
        chart: {
            type: "pie",
        },
        title: {
            text: "Penyebaran Jumlah UMKM Berdasarkan Bidang Usaha",
        },
        tooltip: {
            pointFormat: "<b>{point.name}</b>: {point.y}",
        },
        series: [{
            name: "Bidang Usaha UMKM",
            data: {
            }.map((bidangUsaha, index) => ({
                name: bidangUsaha,
                y: {
                } [index],
            })),
        }, ],
    });

    Highcharts.chart("grafik3", {
        chart: {
            polar: true,
        },
        title: {
            text: "Penyebaran Jumlah UMKM Berdasarkan Kecamatan (Radar Chart)",
        },
        xAxis: {
            categories: {
            },
        },
        yAxis: {
            min: 0,
        },
        series: [{
            name: "Total",
            data: {
            },
            pointPlacement: "on",
        }, ],
    });

    Highcharts.chart("grafik4", {
        chart: {
            type: "bar",
        },
        title: {
            text: "Penyebaran Jumlah UMKM Berdasarkan Kecamatan",
        },
        subtitle: {
            text: "Pekanbaru",
        },
        xAxis: {
            categories: {
            },
        },
        yAxis: {
            min: 0,
            title: {
                text: "Jumlah UMKM",
            },
        },
        series: [{
            name: "Total",
            data: {
            },
        }, ],
    });
</script>

<br>

@endsection


<div style="display: flex;">
    <div id="chartdiv">
        <h4>
            Sebaran Pendaftar
        </h4>
        <!-- Styles -->
        <style>
            #chartdiv {
                width: 100%;
                height: 500px;
            }
        </style>

        <!-- Resources -->
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

        <!-- Chart code -->
        <script>
            am5.ready(function() {

                // Create root element
                // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                var root = am5.Root.new("chartdiv");

                // Set themes
                // https://www.amcharts.com/docs/v5/concepts/themes/
                root.setThemes([
                    am5themes_Animated.new(root)
                ]);

                // Create chart
                // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
                var chart = root.container.children.push(
                    am5percent.PieChart.new(root, {
                        endAngle: 270
                    })
                );

                // Create series
                // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
                var series = chart.series.push(
                    am5percent.PieSeries.new(root, {
                        valueField: "value",
                        categoryField: "category",
                        endAngle: 270
                    })
                );

                series.states.create("hidden", {
                    endAngle: -90
                });

                // Set data
                // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
                series.data.setAll([{
                    category: "Lithuania",
                    value: 501.9
                }, {
                    category: "Czechia",
                    value: 301.9
                }, {
                    category: "Ireland",
                    value: 201.1
                }, {
                    category: "Germany",
                    value: 165.8
                }, {
                    category: "Australia",
                    value: 139.9
                }, {
                    category: "Austria",
                    value: 128.3
                }, {
                    category: "UK",
                    value: 99
                }]);

                series.appear(1000, 100);

            }); // end am5.ready()
        </script>
    </div>
    <!-- HTML -->
    <div id="chartdiv1">
        <h4>
            Asal Sekolah
        </h4>
        <style>
            #chartdiv1 {
                width: 100%;
                height: 500px;
            }
        </style>

        <!-- Resources -->
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

        <!-- Chart code -->
        <script>
            am5.ready(function() {

                // Create root element
                // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                var root = am5.Root.new("chartdiv1");


                // Set themes
                // https://www.amcharts.com/docs/v5/concepts/themes/
                root.setThemes([
                    am5themes_Animated.new(root)
                ]);


                // Create chart
                // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
                var chart = root.container.children.push(am5percent.PieChart.new(root, {
                    layout: root.verticalLayout
                }));


                // Create series
                // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
                var series = chart.series.push(am5percent.PieSeries.new(root, {
                    valueField: "value",
                    categoryField: "category"
                }));


                // Set data
                // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
                series.data.setAll([{
                        value: 10,
                        category: "One"
                    },
                    {
                        value: 9,
                        category: "Two"
                    },
                    {
                        value: 6,
                        category: "Three"
                    },
                    {
                        value: 5,
                        category: "Four"
                    },
                    {
                        value: 4,
                        category: "Five"
                    },
                    {
                        value: 3,
                        category: "Six"
                    },
                    {
                        value: 1,
                        category: "Seven"
                    },
                ]);


                // Play initial series animation
                // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
                series.appear(1000, 100);

            }); // end am5.ready()
        </script>
    </div>
    <!-- HTML -->
    <div id="chartdiv3">
        <h4>
            Gender
        </h4>
        <!-- Styles -->
        <style>
            #chartdiv3 {
                width: 100%;
                height: 500px;
            }
        </style>

        <!-- Resources -->
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

        <!-- Chart code -->
        <script>
            am5.ready(function() {

                // Create root and chart
                var root = am5.Root.new("chartdiv3");

                root.setThemes([
                    am5themes_Animated.new(root)
                ]);

                var chart = root.container.children.push(
                    am5percent.PieChart.new(root, {
                        layout: root.verticalLayout
                    })
                );

                // Create series
                var series = chart.series.push(
                    am5percent.PieSeries.new(root, {
                        valueField: "percent",
                        categoryField: "type",
                        fillField: "color",
                        alignLabels: false
                    })
                );

                series.slices.template.set("templateField", "sliceSettings");
                series.labels.template.set("radius", 30);

                // Set up click events
                series.slices.template.events.on("click", function(event) {
                    console.log(event.target.dataItem.dataContext)
                    if (event.target.dataItem.dataContext.id != undefined) {
                        selected = event.target.dataItem.dataContext.id;
                    } else {
                        selected = undefined;
                    }
                    series.data.setAll(generateChartData());
                });

                // Define data
                var selected;
                var types = [{
                    type: "Fossil Energy",
                    percent: 70,
                    color: series.get("colors").getIndex(0),
                    subs: [{
                        type: "Oil",
                        percent: 15
                    }, {
                        type: "Coal",
                        percent: 35
                    }, {
                        type: "Nuclear",
                        percent: 20
                    }]
                }, {
                    type: "Green Energy",
                    percent: 30,
                    color: series.get("colors").getIndex(1),
                    subs: [{
                        type: "Hydro",
                        percent: 15
                    }, {
                        type: "Wind",
                        percent: 10
                    }, {
                        type: "Other",
                        percent: 5
                    }]
                }];
                series.data.setAll(generateChartData());


                function generateChartData() {
                    var chartData = [];
                    for (var i = 0; i < types.length; i++) {
                        if (i == selected) {
                            for (var x = 0; x < types[i].subs.length; x++) {
                                chartData.push({
                                    type: types[i].subs[x].type,
                                    percent: types[i].subs[x].percent,
                                    color: types[i].color,
                                    pulled: true,
                                    sliceSettings: {
                                        active: true
                                    }
                                });
                            }
                        } else {
                            chartData.push({
                                type: types[i].type,
                                percent: types[i].percent,
                                color: types[i].color,
                                id: i
                            });
                        }
                    }
                    return chartData;
                }

            }); // end am5.ready()
        </script>
    </div>
</div>