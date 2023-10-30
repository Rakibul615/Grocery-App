@extends('layouts.app')

@section('body')

@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Category Module</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
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
                <h3 class="card-title">Edit Category Form</h3>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body ">
                <div>
                    <form action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  name="name" value="{{$category->name}}" id="horizontal-firstname-input" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-md-3 form-label">Category Description</label>
                            <div class="col-md-9">
                                <textarea  class="form-control" id="horizontal-email-input" name="description" placeholder="Category Description">
                                    {{$category->description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Category Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="horizontal-password-input"name="image" >
                                <img src="{{asset($category->image)}}" alt="" height="100" width="130">
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Update Category Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Layout -->


@endsection

