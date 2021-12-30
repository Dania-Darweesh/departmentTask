@extends('admin/includes/master')
@section('content')


<div class="product-status mg-b-15">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can add department here</h4>
                    <div class="add-product">
                        <a href="/admin/department">Show departments</a>
                    </div>

                    <form method="post" style="padding: 50px 0 !important;" action="{{route('department.store')}}" class="dropzone dropzone-custom needsclick add-professors">
                        @csrf
                        <div class="row">
                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12 m-auto">
                                <div class="form-group">
                                    <label for="job_title" class="form-label">Name </label>
                                    <input name="dep_name" type="text" class="form-control">
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Add</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection