@extends('backend.layouts.master')
@section('content')
<?php


?>
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">
            Dashboard
            </h3>
        </div>
        <div>
            <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                <span class="m-subheader__daterange-label">
                    <span class="m-subheader__daterange-title"></span>
                    <span class="m-subheader__daterange-date m--font-brand"></span>
                </span>
                <a href="{{ URL::to('home')}}" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                    <i class="la la-angle-down"></i>
                </a>
            </span>
        </div>
    </div>
</div>
<!-- END: Subheader -->
{{-- <div class="m-content">
    <!--Begin::Section-->
    <div class="row">
        <h1>hafodhfoisajfsljfl</h1>
    </div>
    <!--End::Section-->
</div> --}}
<div class="m-content">
    <!--begin:: Widgets/Stats-->
    <div class="m-portlet ">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::Total Profit-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                            Total Product
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                <i class="material-icons">add_shopping_cart</i>
                            </span>
                            <span class="m-widget24__stats m--font-brand">
                                {{$totlaproduct}}
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                78%
                            </span>
                        </div>
                    </div>
                    <!--end::Total Profit-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Feedbacks-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                            Total Category
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                <i class="material-icons">list_alt</i>
                            </span>
                            <span class="m-widget24__stats m--font-info">
                                {{$totalcategory}}
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                84%
                            </span>
                        </div>
                    </div>
                    <!--end::New Feedbacks-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Orders-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                            Total Order
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                <i class="material-icons">local_shipping</i>
                            </span>
                            <span class="m-widget24__stats m--font-danger">
                                {{$totalOrder}}
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                69%
                            </span>
                        </div>
                    </div>
                    <!--end::New Orders-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                            Total Sell
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                 {{-- <i class="fas fa-smile"></i> --}}
                                 <i class="material-icons">tag_faces</i>

                            </span>
                            <span class="m-widget24__stats m--font-success">
                                {{ number_format($totalorderprice, 2, ',', ',') }} ৳
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                90%
                            </span>
                        </div>
                    </div>
                    <!--end::New Users-->
                </div>
            </div>
        </div>
    </div>
    <!--end:: Widgets/Stats-->
    <!--Begin::Section-->
    <div class="m-portlet">
        <div class="m-portlet__body m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-rose card-header-icon">
                                    
                                    @include('backend.layouts.msg')
                                    <h3 class="card-title text-center">Queue Order</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="datatables" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Customer</th>
                                                    <th>Call</th>
                                                    <th>Purchased On</th>
                                                    <th>Ship To</th>
                                                    <th>Price </th>
                                                    {{-- <th>Payment</th> --}}
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $key=>$order)
                                                <tr>
                                                    <td >{{$order->id}}</td>
                                                    <td >{{$order->customer_name}}</td>
                                                    <td >{{$order->phone_number}}</td>
                                                    <td >{{$order->created_at}}</td>
                                                    <td >{{$order->address}}</td>
                                                    <td > {{ number_format($order->order_total, 2, ',', ',') }} ৳</td>
                                                    {{-- <td><span class="m-badge  m-badge--info m-badge--wide">{{$order->payment_status}}</span></td> --}}
                                                    <td>
                                                        @if($order->order_status == 'Pending')
                                                        <span class="m-badge m-badge--brand m-badge--wide">Pending</span>
                                                        @elseif($order->order_status == 'Delivered')
                                                        <span class="m-badge  m-badge--danger m-badge--wide">Delivered</span>
                                                        @else
                                                        <span class="m-badge  m-badge--success m-badge--wide">Shipping</span>
                                                        @endif
                                                    </td>
                                                    <td style="width: 15%" class="td-actions text-right">
                                                        @if($order->order_status == 'Pending')
                                                        <a href="{{route('orderConfirmed',$order->id)}}" class="btn btn-primary" title="Confirm"><i class="material-icons">call</i></a>
                                                        @elseif($order->order_status == 'Delivered')
                                                        <a href="" class="btn btn-primary" title="Delivered"><i class="material-icons">check_circle</i></a>
                                                        @else
                                                        <a href="{{route('shippingConfirmed',$order->id)}}" class="btn btn-primary" title="Shipping.."><i class="material-icons">local_shipping</i></a>
                                                        @endif
                                                        <a href="{{route('orderDetail',$order->id)}}" class="btn btn-success" title="Detail"><i class="material-icons">assignment</i></a>
                                                        <a href="{{route('orderInvoiceDownload',$order->id)}}" class="btn btn-warning" title="Invoice Download"><i class="material-icons">cloud_download</i></a>
                                                        {{-- <a href="" class="btn btn-danger" title="Delete"><i class="material-icons">delete</i></a> --}}
                                                    </td>
                                                        {{-- <td style="width: 16%" class="td-actions text-right">
                                                            <a href="{{route('productEdit',$product->id)}}" class="btn btn-success" title="Edit"><i class="material-icons">edit</i></a>
                                                            <form id="delete-form-{{ $product->id }}" action="{{route('productDelete',$product->id)}}" style="display: none;" method="POST">
                                                                @csrf
                                                            </form>
                                                            <button type="button" title="Delete" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $product->id }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="material-icons">delete</i></button>
                                                        </td> --}}
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div> <!-- end col-md-12 -->
                                </div> <!-- end row -->
                                
                          
                        </div>
                    </div>
                </div>
                <!--End::Section-->
            </div>
            @endsection