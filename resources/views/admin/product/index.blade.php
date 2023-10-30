@extends('layouts.app')

@section('body')

@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Product Module</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                        <li class="breadcrumb-item active">Manage Product</li>
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
                <h2 class="card-title">All Product Information</h2>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>

                    <tr>
                        <th>SL No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Stock Amount</th>
                        <th >Action</th>

                    </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" alt="" height="50" width="70">
                                </td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->stock_amount}}</td>
                                <td >
                                    <a href="{{route('product.show', $product->id)}}" class="btn btn-info btn-sm">
                                        <i class="fa fa-book"></i>
                                    </a>
                                    <a href="{{route('product.edit', $product->id)}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route('product.destroy', $product->id)}}" method="POST" id="deleteForm{{$product->id}}"  >
                                        @csrf
                                        @method('DELETE')
                                        <button data-id="{{$product->id}}"  type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
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
