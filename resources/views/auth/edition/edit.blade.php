@extends('Dashboard.layouts.master-layouts')
@section('content')
<div class="dashboard-main-wrapper">
    @include('Dashboard.layouts.sidebar')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="basicform">
                        <h3 class="section-title">Edit details of {{$edition->title}}</h3>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Input the following necessary information</h5>
                        <div class="card-body">
                            <form action="/Dashboard/edition/{{$edition->id}}" method="POST" id="editForm"
                                data-parsley-validate="" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="title" class="col-form-label">Edition Title:</label>
                                    <input id="title" name="title" type="text" class="form-control"
                                        value="{{old('title')??$edition->title}}">
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
                                <div class="card-body border-top">
                                    <h4>Main Picture</h4>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="card">
                                                <img class="card-img-top img-fluid"
                                                    src="{{asset('storage/'. $edition->image)}}" alt="main-picture">
                                                <div class="card-body">
                                                    <h3 class="card-title">Main Picture</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="btn btn-info" for="image">Change Picture </label>
                                            <input type="file" id="image" name="image" class="form-control-file"
                                                value="{{old('image')}}" accept="image/x-png,image/gif,image/jpeg">
                                            <div class="text-danger">{{$errors->first('image')}}</div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 float-right ">
                                    <button type="submit" class="btn btn-success" value="save">Save</button>
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
</div>
@endsection
