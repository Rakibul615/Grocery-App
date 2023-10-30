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
                        <li class="breadcrumb-item active">Add Product</li>
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
                <h3 class="card-title">Add Product Form</h3>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body ">
                <div>
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" class="form-control" id="" onchange="getSubCategoryByCategory(this.value)">
                                     <option value=""> -- Select Product Category -- </option>
                                    @foreach($categories as $category)
                                     <option value="{{$category->id}}">{{$category->name}}</option>
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
                                    <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
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
                                    <option value=" {{$brand->id}}">{{$brand->name}}</option>
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
                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  name="name" id="" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Product Code</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  name="code" id="" placeholder="Product Code">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="regular_price" placeholder="Regular Price">
                                        <input type="text" class="form-control" name="selling_price" placeholder="Selling Price">
                                    </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for=" " class="col-md-3 form-label">Stock Amount</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control"  name="stock_amount" id="" placeholder="Stock Amount">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea  class="form-control" id="" name="short_description" placeholder="Short Description"></textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea  class="form-control" id="ckeditor-classic" name="long_description" placeholder="Long Description"></textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Feature Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="" name="image" >
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Other Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="" multiple name="other_image[]" >
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Create New Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Layout -->


@endsection
