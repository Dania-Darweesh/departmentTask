@extends('admin.includes.master')

@section('content')


<!-- dd($employee); -->

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Department list</h4>
                    <div class="add-product">
                        <a href="/admin/department/create">Add department</a>
                    </div>
                    <table class="table table-striped m-auto">
                        <thead>
                            <tr>
                                <th>Department ID</th>
                                <th>Department Name</th>
                            </tr>
                        </thead>
                        @foreach ($department as $dep)
                        <tr>
                            <td> {{$dep-> id}}</td>
                            <td> {{$dep-> dep_name}}</td>

                            <td>
                                <form action="{{route('department.destroy',$dep->id)}}" method="post">
                                    <a href="{{route('department.edit',$dep->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection