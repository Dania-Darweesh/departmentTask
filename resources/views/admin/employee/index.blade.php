@extends('admin.includes.master')

@section('content')


<!-- dd($employee); -->

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Employees list</h4>
                    <div class="add-product">
                        <a href="/admin/employee/create">Add employee</a>
                    </div>
                    <table class="table table-striped m-auto">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Department ID</th>
                                <th>Employee Name</th>
                                <th>Job Title</th>
                                <th>Salary</th>

                            </tr>
                        </thead>
                        @foreach ($employee as $emp)
                        <tr>
                            <td> {{$emp-> id}}</td>
                            <td> {{$emp-> dep_id}}</td>
                            <td> {{$emp-> name}}</td>
                            <td> {{$emp-> job_title}}</td>
                            <td> {{$emp-> salary}}</td>
                            <td>
                                <form action="{{route('employee.destroy',$emp->id)}}" method="post">
                                    <a href="{{route('employee.edit',$emp->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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