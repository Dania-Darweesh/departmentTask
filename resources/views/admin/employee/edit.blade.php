@extends('admin/includes/master')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can update employee here</h4>

                    <form method="post" action="{{route('employee.update',$empEdit->id)}}" class="dropzone dropzone-custom needsclick add-professors" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12 m-auto">

                                <div class="form-group">
                                    <label for="dep_id" class="form-label">Dep ID</label>
                                    <input name="dep_id" type="number" class="form-control" value="{{$empEdit->dep_id}}">
                                </div>



                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" value="{{$empEdit->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="job_title" class="form-label">Job Title </label>
                                    <input name="job_title" type="text" class="form-control" value="{{$empEdit->job_title}}">
                                </div>
                                <div class="form-group">
                                    <label for="salary" class="form-label">Salary</label>
                                    <input name="salary" type="number" class="form-control" value="{{$empEdit->salary}}">
                                </div>

                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection