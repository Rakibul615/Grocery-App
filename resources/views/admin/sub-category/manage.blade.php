@extends('layouts.app')

@section('body')
@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Subcategory Module</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Subcategory</a></li>
                        <li class="breadcrumb-item active">Add Subcategory</li>
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
                <h2 class="card-title">Subcategory Information</h2>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Category Name</th>
                        <th>Subcategory Name</th>
                        <th>Subcategory Description</th>
                        <th>Subcategory Image</th>
                        <th>Action</th>

                    </tr>
                    </thead>


                    <tbody>
                    @foreach($sub_categories as $sub_category)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$sub_category->category->name}}</td>
                        <td>{{$sub_category->name}}</td>
                        <td>{{$sub_category->description}}</td>
                        <td>
                            <img src="{{asset($sub_category->image)}}" alt="" height="60" width="80">
                        </td>
                        <td>
                            <a href="{{route('sub-category.edit', ['id' => $sub_category->id])}}" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('sub-category.delete', ['id' => $sub_category->id])}}" onclick="return confirm('Are you sure to delete this.')" class="btn btn-danger btn-sm">
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
