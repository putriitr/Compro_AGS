@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Member</p>
                                <h4 class="card-title">{{ $totalMembers }}</h4> <!-- Display the customer count -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Produk</p>
                                <h4 class="card-title">{{ $totalProducts }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Monitoring</p>
                                <h4 class="card-title">{{ $totalMonitoredProducts }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                <i class="fas fa-tasks"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Aktivitas</p>
                                <h4 class="card-title">{{ $totalActivities }}</h4> <!-- Display the order count -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Column for Daily Visits Chart -->
        <div class="col-md-8">
            <div class="card shadow-lg mb-4">
                <div class="card-header">
                    <h3 class="card-title">Riwayat Kunjungan Harian</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <canvas id="daily-visits-chart"></canvas>
                    </div>
                    <p class="text-muted">Grafik ini menunjukkan jumlah total kunjungan per hari pada website sehingga dapat
                        dianalisis dan dilacak keterlibatan pengunjung dari waktu ke waktu.</p>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-header">
                    <h3 class="card-title">Kategori Produk</h3>
                </div>
                <div class="card-body">
                    <!-- Doughnut Chart -->
                    <div class="text-center">
                        <canvas id="categoryDoughnutChart" width="150" height="150"></canvas>
                    </div>
                    <!-- Daftar Bullet di bawah Grafik -->
                    <div class="mt-3">
                        <ul class="list-unstyled">
                            <li class="category-item">
                                <span class="bullet" style="background-color: #FFE4E1;"></span>
                                <span class="category-name">Hidrolika</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #FFDAB9;"></span>
                                <span class="category-name">Semen</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #FFA07A;"></span>
                                <span class="category-name">Tanah</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #F88379;"></span>
                                <span class="category-name">Aspal</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #FFFFE0;"></span>
                                <span class="category-name">Bebatuan</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #EEE8AA;"></span>
                                <span class="category-name">Manajemen Konstruksi</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #F0E68C;"></span>
                                <span class="category-name">Kebumian</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #98FB98;"></span>
                                <span class="category-name">Listrik</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #90EE90;"></span>
                                <span class="category-name">Mekanik</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #3CB371;"></span>
                                <span class="category-name">Material</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #87CEFA;"></span>
                                <span class="category-name">Industri</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #00BFFF;"></span>
                                <span class="category-name">Kelautan</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #4169E1;"></span>
                                <span class="category-name">Perkapalan</span>
                                <span class="percentage">7%</span>
                            </li>
                            <li class="category-item">
                                <span class="bullet" style="background-color: #1E90FF;"></span>
                                <span class="category-name">Perkeretaapian</span>
                                <span class="percentage">7%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambahkan script untuk Chart.js jika belum ada -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('categoryDoughnutChart').getContext('2d');
            var categoryDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [
                        'Hidrolika', 'Semen', 'Tanah', 'Aspal', 'Bebatuan', 'Manajemen Konstruksi',
                        'Kebumian', 'Listrik', 'Mekanik', 'Material', 'Industri', 'Kelautan',
                        'Perkapalan', 'Perkeretaapian'
                    ],
                    datasets: [{
                        label: 'Jumlah Kategori',
                        data: [
                            7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7
                        ], // Total persentase 100%
                        backgroundColor: [
                            '#FFE4E1', '#FFDAB9', '#FFA07A', '#F88379', '#FFFFE0', '#EEE8AA',
                            '#F0E68C', '#98FB98', '#90EE90', '#3CB371', '#87CEFA', '#00BFFF',
                            '#1E90FF', '#4169E1'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false, // Menyembunyikan legend default Chart.js
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                                }
                            }
                        }
                    }
                }
            });
        </script>

        <!-- CSS untuk Bullet dan Item List -->
        <style>
            .bullet {
                display: inline-block;
                width: 12px;
                height: 12px;
                border-radius: 50%;
                margin-right: 8px;
            }

            ul.list-unstyled {
                padding-left: 0;
            }

            ul.list-unstyled li {
                margin-bottom: 8px;
                border-bottom: 1px solid #ddd;
                padding-bottom: 8px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .category-name {
                margin-left: 8px;
                flex: 1;
            }

            .percentage {
                font-weight: bold;
            }
        </style>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const ctx = document.getElementById('daily-visits-chart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: @json($dates),
                        datasets: [{
                            label: 'Jumlah Kunjungan (Harian)',
                            data: @json($visits),
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderWidth: 2,
                            tension: 0.1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return `Date: ${tooltipItem.label}, Visits: ${tooltipItem.raw}`;
                                    }
                                }
                            }
                        },
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Date'
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Number of Visits'
                                },
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
    @endsection
