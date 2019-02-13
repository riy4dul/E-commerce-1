@extends('backend.layouts.master')
@section('content')

{{-- {{$orders}}  --}}
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header card-header-rose card-header-icon">
				
				@include('backend.layouts.msg')
				<h3 class="card-title text-center">All Order</h3>
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
								<td >{{ number_format($order->order_total, 2, ',', ',') }} ৳</td>
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
		@endsection