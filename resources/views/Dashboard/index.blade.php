@extends('Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    @include('Dashboard.layouts.sidebar')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Dashboard</h2>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="ecommerce-widget">
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- new editions  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card border-3 border-top border-top-primary">
                                <div class="card-body">
                                    <h5 class="text-muted">Editions</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{$editions->count()}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end new editions  -->
                        <!-- ============================================================== -->
                    </div>

                    <div class="row">
                        <!-- ============================================================== -->

                                      <!-- Editions List  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Projects<a href="Dashboard/edition" class=" btn btn-info float-right">Manage</a></h5>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table first">
                                            <thead class="bg-light">
                                                <tr class="border-0">
                                                    <th class="border-0">Image</th>
                                                    <th class="border-0">Edition Name</th>
                                                    <th class="border-0">Release Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($editions as $edition)
                                                <tr>
                                                    <td>
                                                        <div class="m-r-10"><img src="{{asset('storage/'.$edition->image)}}" alt="edition image" class="rounded" width="45"></div>
                                                    </td>
                                                    <td>{{$edition->title}}</td>
                                                    <td>{{$edition->date}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->

                        <!-- End Editions List  -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>
        </div>
        @include('Dashboard.layouts.footer')
    </div>
</div>
@endsection
