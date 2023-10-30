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
                        <li class="breadcrumb-item active">Add Unit</li>
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
                <h3 class="card-title">Add Unit Form</h3>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body ">
                <div>
                    <form action="{{route('unit.create')}}" method="POST" >
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  name="name" id="horizontal-firstname-input" placeholder="Unit Name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-md-3 form-label">Unit Code</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  name="code" id="horizontal-firstname-input" placeholder="Unit code">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-md-3 form-label">Unit Description</label>
                            <div class="col-md-9">
                                <textarea  class="form-control" id="horizontal-email-input" name="description" placeholder="Unit Description"></textarea>
                            </div>
                        </div>


                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Create New Unit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Layout -->


@endsection
