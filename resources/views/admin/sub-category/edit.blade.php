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
                        <li class="breadcrumb-item active">Edit Subcategory</li>
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
                <h3 class="card-title">Edit Subcategory Form</h3>
                <p class="text-muted">{{Session('message')}}</p>

            </div>
            <div class="card-body ">
                <div>
                    <form action="{{route('sub-category.update', ['id' => $sub_category->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id" id="">
                                    <option value=""> -- Select Category -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id == $sub_category->category_id ? 'selected': ' ' }}>{{$category->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input"  class="col-md-3 form-label">Subcategory Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$sub_category->name}}"  name="name" id="horizontal-firstname-input" placeholder="Subcategory Name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-md-3 form-label">Subcategory Description</label>
                            <div class="col-md-9">
                                <textarea  class="form-control" id="horizontal-email-input" name="description" placeholder="Subcategory Description">
                                    {{$sub_category->description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Subcategory Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="horizontal-password-input"name="image" >
                                <img src="{{asset($sub_category->image)}}" alt="" height="100" width="130">
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Update Subcategory Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Layout -->

@endsection

