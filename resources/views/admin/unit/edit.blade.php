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
                        <li class="breadcrumb-item active">Edit Unit</li>
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
                <h3 class="card-title">Edit Unit Form</h3>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body ">
                <div>
                    <form action="{{route('unit.update', ['id' => $unit->id])}}" method="POST" >
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  name="name" value="{{$unit->name}}" id="horizontal-firstname-input" placeholder="Unit Name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Unit code</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  name="code" value="{{$unit->code}}" id="horizontal-firstname-input" placeholder="Unit code">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-md-3 form-label">Unit Description</label>
                            <div class="col-md-9">
                                <textarea  class="form-control" id="horizontal-email-input" name="description" placeholder="Unit Description">
                                    {{$unit->description}}
                                </textarea>
                            </div>
                        </div>



                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Update Unit Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Layout -->


@endsection


