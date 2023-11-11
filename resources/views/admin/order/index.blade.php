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
                        <li class="breadcrumb-item active">Manage Order</li>
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
                <h2 class="card-title">Order Information</h2>
                <p class="  text-center success">{{Session('message')}}</p>

            </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>

                    <tr>
                        <th>SL No</th>
                        <th>Order Id</th>
                        <th>Customer Info</th>
                        <th>Order Date</th>
                        <th>Order Total</th>
                        <th>Order Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->id}}</td>
                            <td>
                                Name: {{$order->customer->name}}<br>
                                Email: {{$order->customer->email}}<br>
                                Phone: {{$order->customer->mobile}}

                            </td>
                            <td>{{$order->order_date}}</td>
                            <td>{{$order->order_total}}</td>
                            <td>{{$order->order_status}}</td>
                            <td>
                                <a href="{{route('admin.order-detail', ['id' => $order->id])}}" class="btn btn-info btn-sm" title="Order Detail Info">
                                    <i class="fa fa-info-circle"></i>
                                </a>

                                <a href="{{ route('admin.order-edit', ['id' => $order->id]) }}"
                                   class="btn btn-success btn-sm {{ $order->order_status == "complete" ? 'disabled' : '' }}"
                                   title="Order Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('admin.order-invoice', ['id' => $order->id])}}" class="btn btn-primary btn-sm" title="Order Invoice">
                                    <i class="fa fa-book"></i>
                                </a>
                                <a href="{{route('admin.download-order-invoice', ['id' => $order->id])}}" target="_blank" class="btn btn-warning btn-sm" title="Print Invoice">
                                    <i class="fa fa-print"></i>
                                </a>
                                <a href="{{ route('admin.order-delete', ['id' => $order->id]) }}"
                                   class="btn btn-danger btn-sm {{ $order->order_status == "cancel" ? 'btn btn-danger btn-sm' : 'disabled btn btn-danger btn-sm' }}"
                                   onclick="return confirm('Are you sure to delete this order')"
                                   title="Order Delete">
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
