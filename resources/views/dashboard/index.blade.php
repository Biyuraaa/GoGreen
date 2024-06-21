@extends('dashboard.layouts.template')

@section('content')
    <div class="content">
        <h1 class="mb-4">Dashboard</h1>
        <p>Welcome to the admin dashboard</p>

        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total Users</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$users->count()}}</h5>
                        <p class="card-text">Registered users</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Total Blogs</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$blogs->count()}}</h5>
                        <p class="card-text">Published blogs</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Total Donations</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$totalDonations}}</h5>
                        <p class="card-text">Donations made</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Total Revenue</div>
                    <div class="card-body">
                        <h5 class="card-title">Rp. {{$totalRevenue}}</h5>
                        <p class="card-text">Total earnings</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-7">
                <h2>Registered Users per Month</h2>
                <div id="usersChart"></div>
            </div>
            <div class="col-md-5">
                <h2>Latest Users</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Registered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($latestUsers as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('d M Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5">
                <h2>Active Users</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comments Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($activeUsers as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->comments_count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-7">
                <h2>Popular Blogs by Comments</h2>
                <div id="popularBlogChart"></div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Blog Categories</h2>
                <div id="categoryChart"></div>
            </div>
            <div class="col-md-6">
                <h2>Latest Blogs</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Published At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($latestBlogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->user->name }}</td>
                                <td>{{ $blog->created_at->format('d M Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5">
                <h2>Top Donors</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Total Donated (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($topDonors as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->total_donated }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-7">
                <h2>Total Donations per Month</h2>
                <div id="donationsChart"></div>
            </div>
        </div>
    </div>
   <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Grafik Pengguna Terdaftar per Bulan
            var userOptions = {
                chart: {
                    type: 'area',
                    height: 350,
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                series: [{
                    name: 'New Users',
                    data: {!! json_encode($userChartData) !!}
                }],
                xaxis: {
                    categories: {!! json_encode($userChartLabels) !!}
                },
                yaxis: {
                    title: {
                        text: 'Number of Users'
                    }
                },
                tooltip: {
                    x: {
                        format: 'yyyy-MM'
                    }
                }
            };

            var userChart = new ApexCharts(document.querySelector("#usersChart"), userOptions);
            userChart.render();

            // Grafik Donasi per Bulan
            var donationOptions = {
                chart: {
                    type: 'line',
                    height: 350,
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                series: [{
                    name: 'Total Donations',
                    data: {!! json_encode($donationChartData) !!}
                }],
                xaxis: {
                    categories: {!! json_encode($donationChartLabels) !!}
                },
                yaxis: {
                    title: {
                        text: 'Total Donations (Rp)'
                    }
                },
                tooltip: {
                    x: {
                        format: 'yyyy-MM'
                    }
                }
            };

            var donationChart = new ApexCharts(document.querySelector("#donationsChart"), donationOptions);
            donationChart.render();

            var categoryOptions = {
                chart: {
                    type: 'pie',
                    height: 350
                },
                labels: {!! json_encode($categoryChartLabels) !!},
                series: {!! json_encode($categoryChartData) !!},
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var categoryChart = new ApexCharts(document.querySelector("#categoryChart"), categoryOptions);
            categoryChart.render();

            // Grafik Blog Terpopuler Berdasarkan Banyaknya Komentar
            var popularBlogOptions = {
                chart: {
                    type: 'bar',
                    height: 350
                },
                dataLabels: {
                    enabled: false
                },
                series: [{
                    name: 'Comments',
                    data: {!! json_encode($popularBlogData) !!}
                }],
                xaxis: {
                    categories: {!! json_encode($popularBlogLabels) !!}
                },
                yaxis: {
                    title: {
                        text: 'Number of Comments'
                    }
                }
            };

            var popularBlogChart = new ApexCharts(document.querySelector("#popularBlogChart"), popularBlogOptions);
            popularBlogChart.render();
        });
    </script>
@endsection

