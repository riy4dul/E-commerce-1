@extends('backend.layouts.master')
@section('content')
{{-- {{$order}}
{{$customer}}
{{$shipping}}
{{$payment}} 
{{$orderDetails}}--}}
<style>
.static-info .value
{
font-size: 14px;
font-weight: 600;
}
.textright{
                text-align: right;
            }
</style>
<div class="m-content">
    <div class="row">
        <div class="col-md-6">
            {{-- <div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered"> --}}
                {{-- <div class="m-portlet m-portlet--responsive-mobile m-portlet--focus m-portlet--head-solid-bg m-portlet--bordered"> --}}
                    {{-- <div class="m-portlet m-portlet--responsive-mobile m-portlet--accent m-portlet--head-solid-bg m-portlet--bordered"> --}}
                        {{-- <div class="m-portlet m-portlet--responsive-mobile m-portlet--light m-portlet--head-solid-bg m-portlet--bordered"> --}}
                            {{-- <div class="m-portlet m-portlet--responsive-mobile m-portlet--metal m-portlet--head-solid-bg m-portlet--bordered"> --}}
                                {{-- <div class="m-portlet m-portlet--responsive-mobile m-portlet--brand m-portlet--head-solid-bg m-portlet--bordered"> --}}
                                    <div class="m-portlet m-portlet--responsive-mobile m-portlet--danger m-portlet--head-solid-bg m-portlet--bordered">
                                        <div class="m-portlet__head">
                                            <div class="m-portlet__head-caption">
                                                <div class="m-portlet__head-title">
                                                    <span class="m-portlet__head-icon">
                                                        <i class="flaticon-technology"></i>
                                                    </span>
                                                    <h3 class="m-portlet__head-text">
                                                    Order Details
                                                    </h3>
                                                </div>
                                            </div>
                                            {{-- <div class="m-portlet__head-tools">
                                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                    <button type="button" class="m-btn btn btn-secondary">
                                                    <i class="la la-file-text-o"></i>
                                                    </button>
                                                    <button type="button" class="m-btn btn btn-secondary">
                                                    <i class="la la-floppy-o"></i>
                                                    </button>
                                                    <button type="button" class="m-btn btn btn-secondary">
                                                    <i class="la la-header"></i>
                                                    </button>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                            <a class="dropdown-item" href="#">
                                                                Dropdown link
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                Dropdown link
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                Dropdown link
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                Dropdown link
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="m-portlet__body">
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Order #: </div>
                                                <div class="col-md-7 value">{{$order->id}}</div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Order Date & Time: </div>
                                                <div class="col-md-7 value">{{$order->created_at->format('d M Y - h:m')}}</div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Order Status: </div>
                                                <div class="col-md-7 value">
                                                    <span class="label label-success">{{$order->order_status }}</span>
                                                </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Grand Total: </div>
                                                @php($delevary_Charge=50)
                                                <div class="col-md-7 value"> {{ number_format($order->order_total+$delevary_Charge, 2, ',', ',') }} ৳</div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Payment Information: </div>
                                                <div class="col-md-7 value"> {{$payment->payment_type }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet m-portlet--responsive-mobile m-portlet--success m-portlet--head-solid-bg m-portlet--bordered">
                                        <div class="m-portlet__head">
                                            <div class="m-portlet__head-caption">
                                                <div class="m-portlet__head-title">
                                                    <span class="m-portlet__head-icon">
                                                        <i class="flaticon-technology"></i>
                                                    </span>
                                                    <h3 class="m-portlet__head-text">
                                                    Billing Address
                                                    </h3>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="m-portlet__body">
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Name: </div>
                                                <div class="col-md-7 value"> {{$customer->customer_name}} </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Email: </div>
                                                <div class="col-md-7 value"> {{$customer->email_address}} </div>
                                            </div>
                                            <div class="row static-info">
                                                <div class="col-md-5 name"> Phone Number: </div>
                                                <div class="col-md-7 value"> {{$customer->phone_number}} </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-md-6">
                                    <!--begin::Portlet-->
                                    
                                    <!--begin::Portlet-->
                                    {{-- <div class="m-portlet m-portlet--brand m-portlet--head-solid-bg m-portlet--bordered"> --}}
                                        <div class="m-portlet m-portlet--responsive-mobile m-portlet--info m-portlet--head-solid-bg m-portlet--bordered">
                                            <div class="m-portlet__head">
                                                <div class="m-portlet__head-caption">
                                                    <div class="m-portlet__head-title">
                                                        <span class="m-portlet__head-icon">
                                                            <i class="flaticon-placeholder-2"></i>
                                                        </span>
                                                        <h3 class="m-portlet__head-text">
                                                        Customer Information
                                                        </h3>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="m-portlet__body">
                                                <div class="row static-info">
                                                    <div class="col-md-5 name"> Customer Name: </div>
                                                    <div class="col-md-7 value"> {{$customer->customer_name}} </div>
                                                </div>
                                                <div class="row static-info">
                                                    <div class="col-md-5 name"> Email: </div>
                                                    <div class="col-md-7 value"> {{$customer->email_address}} </div>
                                                </div>
                                                {{-- <div class="row static-info">
                                                    <div class="col-md-5 name"> State: </div>
                                                    <div class="col-md-7 value"> New York </div>
                                                </div> --}}
                                                <div class="row static-info">
                                                    <div class="col-md-5 name"> Phone Number: </div>
                                                    <div class="col-md-7 value"> {{$customer->phone_number}} </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Portlet-->
                                        <!--begin::Portlet-->
                                        
                                        <!--begin::Portlet-->
                                        <div class="m-portlet m-portlet--brand m-portlet--head-solid-bg m-portlet--bordered">
                                            <div class="m-portlet__head">
                                                <div class="m-portlet__head-caption">
                                                    <div class="m-portlet__head-title">
                                                        <span class="m-portlet__head-icon">
                                                            <i class="flaticon-cogwheel-2"></i>
                                                        </span>
                                                        <h3 class="m-portlet__head-text">
                                                        Shipping Address
                                                        </h3>
                                                    </div>
                                                </div>
                                                {{-- <div class="m-portlet__head-tools">
                                                    <div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group" aria-label="...">
                                                        <button type="button" class="m-btn btn btn-outline-light">
                                                        <i class="la la-file-text-o"></i>
                                                        </button>
                                                        <button type="button" class="m-btn btn btn-outline-light">
                                                        <i class="la la-bold"></i>
                                                        </button>
                                                        <button type="button" class="m-btn btn btn-outline-light">
                                                        <i class="la la-paperclip"></i>
                                                        </button>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            
                                            <div class="m-portlet__body">
                                                <div class="row static-info">
                                                    <div class="col-md-5 name"> Name </div>
                                                    <div class="col-md-7 value"> {{$shipping->name}} </div>
                                                </div>
                                                <div class="row static-info">
                                                    <div class="col-md-5 name"> Address </div>
                                                    <div class="col-md-7 value"> {{$shipping->address}} </div>
                                                </div>
                                                <div class="row static-info">
                                                    <div class="col-md-5 name"> Telephone </div>
                                                    <div class="col-md-7 value">{{$shipping->telephone}} </div>
                                                </div>
                                                <div class="row static-info">
                                                    <div class="col-md-5 name"> Email </div>
                                                    <div class="col-md-7 value"> {{$shipping->email}} </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Portlet-->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
                                            <div class="m-portlet__head">
                                                <div class="m-portlet__head-caption">
                                                    <div class="m-portlet__head-title">
                                                        <span class="m-portlet__head-icon">
                                                            <i class="flaticon-placeholder-2"></i>
                                                        </span>
                                                        <h3 class="m-portlet__head-text">
                                                        Shopping Cart
                                                        </h3>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="m-portlet__body">
                                                <div class="table-responsive">
                                                    {{-- <table class="table table-hover table-bordered table-striped"> --}}
                                                        <table class="m-datatable__table table">
                                                            <thead class="datatable__head">
                                                                <tr>
                                                                    <th> Product </th>
                                                                    <th> Name </th>
                                                                    <th> Price </th>
                                                                    <th> Quantity </th>
                                                                    <th> Tax Amount </th>
                                                                    <th> Discount Amount </th>
                                                                    <th> Total </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($orderDetails as $orderDetail)
                                                                <tr>
                                                                    
                                                                    <td>
                                                                        <a href="javascript:;"> Product 1 </a>
                                                                    </td>
                                                                    <td>{{$orderDetail->product_name}}</td>
                                                                    <td> {{ number_format($orderDetail->product_price, 2, ',', ',') }} ৳</td>
                                                                    <td> {{$orderDetail->product_quantity}} </td>
                                                                    <td> {{ number_format(0, 2, ',', ',') }} ৳</td>
                                                                    <td> {{ number_format(0, 2, ',', ',') }} ৳</td>
                                                                    <td> {{ number_format($orderDetail->product_quantity*$orderDetail->product_price, 2, ',', ',') }} ৳</td>
                                                                    
                                                                    
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6"> </div>
                                                <div class="col-md-6">
                                                    <div class="well">
                                                        <div class="row static-info align-reverse textright">
                                                            <div class="col-md-8 name"> Sub Total: </div>
                                                            <div class="col-md-3 value">{{ number_format(0, 2, ',', ',') }} ৳</div>
                                                        </div>                                                        
                                                        <div class="row static-info align-reverse textright">
                                                        <div class="col-md-8 name"> Shipping: </div>
                                                        <div class="col-md-3 value"> {{ number_format($delevary_Charge, 2, ',', ',') }} ৳</div>
                                                    </div>
                                                    <div class="row static-info align-reverse textright">
                                                        <div class="col-md-8 name"> Grand Total: </div>
                                                        <div class="col-md-3 value">{{ number_format($order->order_total+$delevary_Charge, 2, ',', ',') }} ৳</div>
                                                    </div>
                                                    <div class="row static-info align-reverse textright">
                                                        <div class="col-md-8 name"> Total Paid: </div>
                                                        <div class="col-md-3 value">{{ number_format($order->order_total+$delevary_Charge, 2, ',', ',') }} ৳</div>
                                                    </div>
                                                    <div class="row static-info align-reverse textright">
                                                        <div class="col-md-8 name"> Total Refunded: </div>
                                                        <div class="col-md-3 value"> 0.00 ৳ </div>
                                                    </div>
                                                    <div class="row static-info align-reverse textright">
                                                        <div class="col-md-8 name"> Total Due: </div>
                                                        <div class="col-md-3 value">{{number_format(0, 2, ',', ',') }} ৳</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            {{-- <a href="#" class="btn btn-outline-primary m-btn m-btn--custom m-btn--icon m-btn--outline-2x m-btn--pill m-btn--air"> --}}
                                    <a href="{{route('orderInvoiceDownload',$order->id)}}" class="btn btn-danger m-btn m-btn--icon m-btn--wide">
                                                    <span>
                                                        <i class="fa fa-print"></i>
                                                        <span>
                                                            print
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endsection