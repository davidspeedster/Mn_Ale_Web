@extends('Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
    @include('Dashboard.layouts.sidebar')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="basicform">
                        <h3 class="section-title">Register a new Edition</h3>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Input the following necessary information</h5>
                        <div class="card-body">
                            <form action="/Dashboard/edition" method="POST" enctype="multipart/form-data"
                                id="registrationForm">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title" class="col-form-label">Edition Title:</label>
                                    <input id="title" name="title" type="text" class="form-control"
                                        value="{{old('title')}}">
                                    <div class="text-danger">{{$errors->first('title')}}</div>
                                </div>

                                <div class="form-group">
                                    <label for="date" class="col-form-label">Release Date:</label>
                                    <input id="date" name="date" type="date" class="form-control"
                                        value="{{old('date')}}">
                                    <div class="text-danger">{{$errors->first('date')}}</div>
                                </div>

                                <div class="form-group">
                                    <label for="link" class="col-form-label">Edition Link:</label>
                                    <input id="link" name="link" type="text" class="form-control"
                                        value="{{old('link')}}">
                                    <div class="text-danger">{{$errors->first('link')}}</div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="btn btn-info" for="image"><strong>Click here to input main image
                                                for edition(This image will be the one displayed on the main slider of
                                                the home page if chosen to be so) :</strong></label>
                                        <div class="col-sm-7">
                                            <img src="#" id="image-prev" width="200px" alt="Uploaded-pic" />
                                            <!--for preview purpose -->
                                            <input type="file" id="image" name="image" class="form-control-file"
                                                value="{{old('image')}}" accept="image/x-png,image/gif,image/jpeg"
                                                onchange="document.getElementById('image-prev').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="text-danger">{{$errors->first('image')}}</div>
                                </div>
                                <div class="form-group mb-0 float-right ">
                                    <button type="submit" class="btn btn-success" value="Register">Register</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
