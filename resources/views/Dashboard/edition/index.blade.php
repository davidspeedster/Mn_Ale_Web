@extends('Dashboard.layouts.master-layouts')
@section('content')
<!-- Pre-loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">Loading...</div>
    </div>
</div>
<div class="dashboard-main-wrapper">

    <body>
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            @include('Dashboard.layouts.sidebar')

            <div class="dashboard-wrapper">
                @if (session()->has('message'))
                <div class="alert alert-info" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{session()->get('message')}}
                </div>
                @else
                <div class="alert alert-info" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>No new notifications</strong>
                </div>
                @endif

                <div class="container-fluid  dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Data Tables</h2>
                                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta,
                                    fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"
                                                    class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><a href="/Dashboard/edition/create"><button type="button"
                                            class="btn btn-info ">Register a new edition</button></a></h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Edition Title</th>
                                                    <th class="border-top-0">Release Date</th>
                                                    <th class="border-top-0">Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($editions as $edition )
                                                <tr>

                                                    <td>
                                                        {{$edition->title}}
                                                    </td>
                                                    <td>
                                                        {{$edition->date}}
                                                    </td>
                                                    <td>
                                                        <div class="card">
                                                            <img src="{{asset('storage/'. $edition->image)}}"
                                                                alt="edition Image" width="300"
                                                                class="rounded-circle avatar-sm" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="btn-group mb-2">

                                                            <a href="/Dashboard/edition/{{$edition->id}}/edit"><button
                                                                    type="button"
                                                                    class="btn btn-success waves-effect waves-light">Edit</button></a>

                                                            <form action="/Dashboard/edition/{{$edition->id}}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger waves-effect waves-light">Delete
                                                                    </>
                                                            </form>
                                                    </td>
                                    </div>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="border-top-0">Edition Title</th>
                                            <th class="border-top-0">Release Date</th>
                                            <th class="border-top-0">Image</th>
                                        </tr>
                                    </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                @endsection
