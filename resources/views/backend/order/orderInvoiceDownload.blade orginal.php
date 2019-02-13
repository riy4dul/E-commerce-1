<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
		Metronic | Advanced Portlets
		</title>
		<meta name="description" content="Advanced portlet examples">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		
		<!--end::Web font -->
		<!--begin::Base Styles -->
		{{-- <link href="{{asset('/') }}backend/css/vendors.bundle.css" rel="stylesheet" type="text/css" /> --}}
		{{-- <link href="{{asset('/') }}backend/css/style.bundle.css" rel="stylesheet" type="text/css" /> --}}
		{{-- <link href="{{asset('/') }}backend/css/incoicedownloadpagecss.css" rel="stylesheet" type="text/css" /> --}}
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="../../assets/demo/default/media/img/logo/favicon.ico" />
		<style type="text/css">
			.col-md-6
			{
				width: 50%;
			}
		</style>
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body>
		<div class="m-content">
			<div class="m-content">
				<div class="row">
					<div class="col-md-6">
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
							</div>
							<div class="m-portlet__body">
								<div class="row static-info">
									<div class="col-md-5 name"> Order #: {{$order->id}}</div>
									<div class="col-md-5 name"> Order Date & Time: {{$order->created_at->format('d M Y - h:m')}}</div>
									<div class="col-md-5 name"> Order Status: {{$order->order_status }}</div>
									<div class="col-md-5 name"> Grand Total: @php($delevary_Charge=50) {{$order->order_total+$delevary_Charge}}.tk  </div>
									<div class="col-md-5 name"> Payment Information: {{$payment->payment_type }}</div>
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
									<div class="col-md-5 name"> Name: {{$customer->customer_name}} </div>
									<div class="col-md-5 name"> Email: {{$customer->email_address}} </div>
									<div class="col-md-5 name"> Phone Number: {{$customer->phone_number}} </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
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
									<div class="col-md-5 name"> Customer Name: {{$customer->customer_name}} </div>
									<div class="col-md-5 name"> Email: {{$customer->email_address}} </div>
									<div class="col-md-5 name"> Phone Number: {{$customer->phone_number}} </div>
								</div>
							</div>
						</div>
						<div class="m-portlet m-portlet--brand m-portlet--head-solid-bg m-portlet--bordered">
							<h3 class="m-portlet__head-text"> Shipping Address </h3>
							<div class="m-portlet__body">
								<div class="row static-info">
									<div class="col-md-5 name"> Name {{$shipping->name}} </div>
									<div class="col-md-5 name"> Address {{$shipping->address}} </div>
									<div class="col-md-5 name"> Telephone {{$shipping->telephone}} </div>
									<div class="col-md-5 name"> Email  {{$shipping->email}} </div>
								</div>
							</div>
						</div>
						<!--end::Portlet-->
					</div>
					<br>
					<div class="col-md-12">
					<div class="row">
						<table class="m-datatable__table table">
							<thead class="datatable__head">
								<tr>
									<th> Product :</th>
									<th> Name :</th>
									<th> Price :</th>
									<th> Quantity :</th>
									<th> Tax Amount :</th>
									<th> Discount Amount :</th>
									<th> Total :</th>
								</tr>
							</thead>
							<tbody>
								@foreach($orderDetails as $orderDetail)
								<tr>
									<td><a href="javascript:;"> Product 1 </a></td>
									<td>{{$orderDetail->product_name}}</td>
									<td>{{$orderDetail->product_price}}.tk </td>
									<td>{{$orderDetail->product_quantity}} </td>
									<td>0.00.tk </td>
									<td>0.00.tk </td>
									<td>{{$orderDetail->product_quantity*$orderDetail->product_price}}.tk</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					</div>
					<br>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6"> </div>
							<div class="col-md-6">
								<div class="col-md-8 name"> Shipping: {{$delevary_Charge}}.tk</div>
								<div class="col-md-8 name"> Grand Total: {{$order->order_total+$delevary_Charge}}.tk </div>
								<div class="col-md-8 name"> Total Paid: {{$order->order_total+$delevary_Charge}}.tk</div>
								<div class="col-md-8 name"> Total Refunded: 0.00.tk </div>
								<div class="col-md-8 name"> Total Due: 0.00.tk </div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		{{-- <script src="{{asset('/') }}backend/js/vendors.bundle.js" type="text/javascript"></script>
		<script src="{{asset('/') }}backend/js/scripts.bundle.js" type="text/javascript"></script> --}}
	</body>
</html>