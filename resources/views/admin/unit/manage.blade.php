@extends('layouts.app')

@section('body')

@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Unit Module</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Unit</a></li>
                        <li class="breadcrumb-item active">Manage Unit</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
@endsection

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Unit Information</h2>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>

                    <tr>
                        <th>SL No</th>
                        <th>Unit Name</th>
                        <th>Unit Code</th>
                        <th>Unit Description</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($units as $unit)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$unit->name}}</td>
                            <td>{{$unit->code}}</td>
                            <td>{{$unit->description}}</td>

                            <td>
                                <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('unit.delete', ['id' => $unit->id])}}" onclick="return confirm('Are you sure to delete this.')" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
