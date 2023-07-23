@extends('masteradmin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pendaftar Per Tahun</h4>
                        <canvas id="santriPerYearChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pendaftar Per Hari</h4>
                        <canvas id="santriPerDayChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Peserta Lulus Pertahun</h4>
                        <canvas id="santriLulusChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/skydash/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/skydash/js/chart.js') }}"></script>
    <!-- End custom js for this page-->
    <script>
        $(function() {
            /* ChartJS
             * -------
             * Data and config for chartjs
             */
            'use strict';
            var data = {
                labels: {!! json_encode($data['santriPerHari']['labels']) !!},
                datasets: [{
                    label: 'Pendaftar',
                    data: {!! json_encode($data['santriPerHari']['data']) !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1,
                    fill: false
                }]
            };
            var dataSantriPertahun = {
                labels: {!! json_encode($data['santriPerTahun']['labels']) !!},
                datasets: [{
                    label: 'Pendaftar',
                    data: {!! json_encode($data['santriPerTahun']['data']) !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1,
                    fill: false
                }]
            };
            var dataSantriLulus = {
                labels: {!! json_encode($data['santriLulus']['labels']) !!},
                datasets: [{
                    label: 'Pendaftar',
                    data: {!! json_encode($data['santriLulus']['data']) !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1,
                    fill: false
                }]
            };
            var options = {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                legend: {
                    display: false
                },
                elements: {
                    point: {
                        radius: 0
                    }
                }

            };
            // Get context with jQuery - using jQuery's .get() method.
            if ($("#santriPerDayChart").length) {
                var santriPerDayChartCanvas = $("#santriPerDayChart").get(0).getContext("2d");
                // This will get the first returned node in the jQuery collection.
                var santriPerDayChart = new Chart(santriPerDayChartCanvas, {
                    type: 'bar',
                    data: data,
                    options: options
                });
            }
            if ($("#santriPerYearChart").length) {
                var santriPerYearChartCanvas = $("#santriPerYearChart").get(0).getContext("2d");
                // This will get the first returned node in the jQuery collection.
                var santriPerYearChart = new Chart(santriPerYearChartCanvas, {
                    type: 'bar',
                    data: dataSantriPertahun,
                    options: options
                });
            }
            if ($("#santriLulusChart").length) {
                var santriPerYearChartCanvas = $("#santriLulusChart").get(0).getContext("2d");
                // This will get the first returned node in the jQuery collection.
                var santriPerYearChart = new Chart(santriPerYearChartCanvas, {
                    type: 'bar',
                    data: dataSantriLulus,
                    options: options
                });
            }

        });
    </script>
@endpush
