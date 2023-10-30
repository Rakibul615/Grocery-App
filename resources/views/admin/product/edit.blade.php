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
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
@endsection


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Edit Product Form</h3>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body ">
                <div>
                    <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" class="form-control" id="" onchange="getSubCategoryByCategory(this.value)">
                                    <option value=""> -- Select Product Category -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Sub Category Name</label>
                            <div class="col-md-9">
                                <select name="sub_category_id" class="form-control" id="subCategoryId">
                                    <option value=""> -- Select Sub Product Category -- </option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{$sub_category->id}}" {{$product->sub_category_id == $sub_category->id ? 'selected' : ''}}>{{$sub_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <select name="brand_id" class="form-control" id="">
                                    <option value=""> -- Select Product Brand -- </option>
                                    @foreach($brands as $brand)
                                        <option value=" {{$brand->id}}" {{$product->brand_id == $brand->id ? 'selected' : ''}}>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <select name="unit_id" class="form-control" id="">
                                    <option value=""> -- Select Product Unit -- </option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}" {{$product->unit_id == $unit->id ? 'selected' : ''}}>{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$product->name}}"  name="name" id="" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Product Code</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$product->code}}" name="code" id="" placeholder="Product Code">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{$product->regular_price}}" name="regular_price" placeholder="Regular Price">
                                    <input type="text" class="form-control" value="{{$product->selling_price}}" name="selling_price" placeholder="Selling Price">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for=" " class="col-md-3 form-label">Stock Amount</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" value="{{$product->stock_amount}}" name="stock_amount" id="" placeholder="Stock Amount">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea  class="form-control" id="" name="short_description" placeholder="Short Description">
                                    {{$product->short_description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea  class="form-control" id="ckeditor-classic" name="long_description" placeholder="Long Description">
                                      {{$product->long_description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Feature Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="" name="image" >
                                <img src="{{asset($product->image)}}" alt="" height="100" width="130">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Other Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="" multiple name="other_image[]" >
                                @foreach($product->otherImages as $otherImage)
                                    <img src="{{asset($otherImage->image)}}" alt=""  height="100" width="130">
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Update Product Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Layout -->


@endsection


