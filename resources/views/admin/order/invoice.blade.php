@extends('layouts.app')

@section('body')

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
@section('page-title')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Order Module</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Order</a></li>
                        <li class="breadcrumb-item active">Order Invoice</li>
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
                <h2 class="card-title">Order Invoice Information</h2>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>

            <div class="mt-5 mb-5">
                <div class="invoice-box">
                    <table cellpadding="0" cellspacing="0">
                        <tr class="top">
                            <td colspan="4">
                                <table>
                                    <tr>
                                        <td class="title">
                                            <img
                                                src="{{asset('/')}}website/assets/images/icons/logo-2.png"
                                                style="width: 100%; max-width: 300px"
                                            />
                                        </td>

                                        <td>
                                            Invoice #: {{$order->id}}<br />
                                            Order Date: {{$order->order_date}}<br />
                                            Invoice Date: {{date('Y-m-d')}}
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr class="information">
                            <td colspan="4">
                                <table>
                                    <tr>
                                        <td>
                                            <h4>Delivery Information</h4>
                                            {{$order->customer->name}}<br />
                                            {{$order->customer->mobile}}<br />
                                            {{$order->customer->email}}}<br />
                                            {{$order->delivery_address}}
                                        </td>

                                        <td>
                                            <h4>Company Information</h4>
                                            Acme Corp.<br />
                                            John Doe<br />
                                            john@example.com
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr class="heading">
                            <td>Payment Method</td>

                            <td colspan="3">Check #</td>
                        </tr>

                        <tr class="details">
                            <td>{{$order->payment_method}}</td>

                            <td colspan="3">{{$order->order_total}}</td>
                        </tr>

                        <tr class="heading">
                            <td>Item</td>
                            <td style="text-align: center">Quantity</td>
                            <td style="text-align: center">Price</td>
                            <td style="text-align: right">Total Price</td>
                        </tr>
                        @php($sum =0)

                        @foreach($order->orderDetail as $orderDetail)
                            <tr class="item">
                                <td>{{$orderDetail->product_name}}</td>
                                <td style="text-align: center">Tk. {{$orderDetail->product_qty}}</td>
                                <td style="text-align: center">Tk. {{$orderDetail->product_price}}</td>
                                <td style="text-align: right">Tk. {{$subTotal = $orderDetail->product_price * $orderDetail->product_qty}}</td>
                            </tr>
                            @php($sum = $sum + $subTotal)
                        @endforeach

                        <tr class="">
                            <td></td>

                            <td colspan="3">Sub Total: {{$sum}}</td>
                        </tr>
                        <tr class="">
                            <td></td>

                            <td colspan="3">Tax Amount(15%): {{$order->tax_total}}</td>
                        </tr>
                        <tr class="">
                            <td></td>

                            <td colspan="3">Shipping Cost: {{$order->shipping_total}}</td>
                        </tr>
                        <tr class="">
                            <td></td>

                            <td colspan="3">Total Payable: Tk. {{$order->order_total}}</td>
                        </tr>
                    </table>
                </div>


            </div>

        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection

