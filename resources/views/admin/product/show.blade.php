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
                        <li class="breadcrumb-item active">Show Product</li>
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
                <h2 class="card-title">Product Detail Information</h2>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body">

                <table id=" " class="table table-bordered dt-responsive  nowrap w-100">
                    <tr>
                        <th>Product Id</th>
                        <td>{{$product->id}}</td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td>{{$product->name}}</td>
                    </tr>
                    <tr>
                        <th>Product code</th>
                        <td>{{$product->code}}</td>
                    </tr>
                    <tr>
                        <th>Product Category</th>
                        <td>{{$product->category->name}}</td>
                    </tr>
                    <tr>
                        <th>Product Sub Category</th>
                        <td>{{$product->subCategory->name}}</td>
                    </tr>
                    <tr>
                        <th>Product Brand</th>
                        <td>{{$product->brand->name}}</td>
                    </tr>
                    <tr>
                        <th>Product Unit</th>
                        <td>{{$product->unit->name}}</td>
                    </tr>
                    <tr>
                        <th>Product Price</th>
                        <td><b>Regular Price</b> {{$product->regular_price}}, <b>Selling Price</b> {{$product->selling_price}} </td>
                    </tr>
                    <tr>
                        <th>Product Stock Amount</th>
                        <td>{{$product->stock_amount}}</td>
                    </tr>
                    <tr>
                        <th>Product Short Description</th>
                        <td>{{$product->short_description}}</td>
                    </tr>
                    <tr>
                        <th>Product Long Description</th>
                        <td>{!! $product->long_description !!}</td>
                    </tr>
                    <tr>
                        <th>Product Image</th>
                        <td><img src="{{asset($product->image)}}" alt="" height="150" width="180"></td>
                    </tr>
                    <tr>
                        <th>Product Trending Status</th>
                        <td>{{$product->trending_status}}</td>
                    </tr>
                    <tr>
                        <th>Product Sales Count</th>
                        <td>{{$product->sales_count}}</td>
                    </tr>
                    <tr>
                        <th>Product Total View</th>
                        <td>{{$product->hit_count}}</td>
                    </tr>
                    <tr>
                        <th>Product Publication Status</th>
                        <td>{{$product->status}}</td>
                    </tr>
                    <tr>
                        <th>Product Other Image</th>
                        <td>
                            @foreach($product->otherImages as $otherImage)
                                <img src="{{asset($otherImage->image)}}" alt="" height="150" width="180">
                            @endforeach
                        </td>
                    </tr>


                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection

