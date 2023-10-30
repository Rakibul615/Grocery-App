@extends('layouts.app')

@section('body')
@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Brand Module</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Brand</a></li>
                        <li class="breadcrumb-item active">Manage Brand</li>
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
                <h2 class="card-title">Brand Information</h2>

            </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Brand Name</th>
                        <th>Brand Description</th>
                        <th>Brand Image</th>
                        <th>Action</th>

                    </tr>
                    </thead>


                    <tbody>
                    @foreach($brands as $brand)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$brand->name}}</td>
                        <td>{{$brand->description}}</td>
                        <td>
                            <img src="{{asset($brand->image)}}" alt="" height="60" width="80">
                        </td>
                        <td>
                            <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('brand.delete', ['id' => $brand->id])}}" onclick="return confirm('Are You sure to delete this')" class="btn btn-danger btn-sm">
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
