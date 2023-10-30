@extends('layouts.app')

@section('body')

@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Order Module</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Order</a></li>
                        <li class="breadcrumb-item active">Edit Order</li>
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
                <h3 class="card-title">Edit Order Form</h3>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body ">
                <div>
                    <form action="{{route('admin.update-order', ['id' => $order->id])}}" method="POST" >
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Order Total</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  name="order_total" value="{{$order->order_total}}" readonly>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Customer Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  name="name" value="{{$order->customer->name}}" readonly >
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label  class="col-md-3 ">Delivery Address</label>
                            <div class="col-md-9">
                                <textarea type="text" class="form-control m-0 p-0" name="delivery_address"  style="margin-left: 0;">
                                    {{$order->delivery_address}}
                                </textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Courier Info</label>
                            <div class="col-md-9">
                                <select class="form-control"required name="courier_id" id="">
                                    <option value="" disabled selected> -- Select Courier -- </option>
                                    <option value="1" {{$order->courier_id == 1? 'selected': ''}}>Sundarban Courier Service</option>
                                    <option value="2" {{$order->courier_id == 2? 'selected': ''}}>SA Paribahan</option>
                                    <option value="3" {{$order->courier_id == 3? 'selected': ''}}>RedX</option>
                                    <option value="4" {{$order->courier_id == 4? 'selected': ''}}>Pathao Courier</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-md-3 form-label">Order Status</label>
                            <div class="col-md-9">
                                <select class="form-control" required name="order_status" id="">
                                    <option value="" disabled selected> -- Select Order Status -- </option>
                                    <option value="pending" {{$order->order_status == 'pending'? 'selected': ''}}>Pending</option>
                                    <option value="processing" {{$order->order_status == 'processing'? 'selected': ''}} >Processing</option>
                                    <option value="cancel" {{$order->order_status == 'cancel'? 'selected': ''}}>Cancel</option>
                                    <option value="complete" {{$order->order_status == 'complete'? 'selected': ''}}>Complete</option>
                                </select>
                            </div>
                        </div>
                        <div class=" row mt-4">

                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary w-md">Update Order Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Layout -->


@endsection


