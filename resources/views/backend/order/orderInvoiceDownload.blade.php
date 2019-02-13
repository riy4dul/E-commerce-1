<html>
	<head>
		<title>Invoice</title>
		<style type="text/css">
			#page-wrap {
				width: 700px;
				margin: 0 auto;
			}
			.center-justified {
				text-align: justify;
				margin: 0 auto;
				width: 30em;
			}
			table.outline-table {
				border: 1px solid;
				border-spacing: 0;
			}
			tr.border-bottom td, td.border-bottom {
				border-bottom: 1px solid;
			}
			tr.border-top td, td.border-top {
				border-top: 1px solid;
			}
			tr.border-right td, td.border-right {
				border-right: 1px solid;
			}
			tr.border-right td:last-child {
				border-right: 0px;
			}
			tr.center td, td.center {
				text-align: center;
				vertical-align: text-top;
			}
			td.pad-left {
				padding-left: 5px;
			}
			tr.right-center td, td.right-center {
				text-align: right;
				padding-right: 50px;
			}
			tr.right td, td.right {
				text-align: right;
			}
			.grey {
				background:grey;
			}
			.textcenter{
				text-align: center;
			}
			.textright{
				text-align: right;
			}

		</style>
	</head>
	<body>
		<div id="page-wrap">
			
			<h2 class="textcenter">Invoice From ebazarbd.com</h2>
			<br>
			<br>
			<br>
			<table width="100%">
				<tbody>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>
					<tr>
						<td width="50%">
							<strong>Order Details </strong><br>
							Order: <strong>#{{$order->id}}</strong><br>
							Order Date & Time: <strong>{{$order->created_at->format('d M Y - h:m')}}</strong> <br>
							Order Status: <strong>{{$order->order_status }}</strong><br>
							Grand Total: <strong>@php($delevary_Charge=50) {{ number_format($order->order_total+$delevary_Charge, 2, ',', ',') }}.tk</strong> <br>
							Payment Information: <strong>{{$payment->payment_type }}</strong><br>
						</td>
						<td width="50%">
							{{-- <img src="{{asset('/backend/images/exotel.png') }}"> --}}
							<img src="{{ public_path('frontend/images/logoForPdf.png') }}"><br>
							<strong>Address: 	Bangladesh,Dhaka</strong> <br>
							<strong>Phone: 	+ 88017100000</strong><br>
							<strong>Email: 	Support@ebazar.com</strong>
						</td>
					</tr>
					<tr>
						<td colspan="1">&nbsp;</td>
					</tr>
					<tr>
						<td width="50%">
							<strong>Shipping Address </strong><br>
							Name: <strong>{{$shipping->name}}</strong><br>
							Address : <strong>{{$shipping->address}}</strong> <br>
							Telephone : <strong>{{$shipping->telephone}}</strong><br>
							Email  : <strong>{{$shipping->email}}</strong><br>
						</td>
						
						<td width="50%">
							<strong>Customer Information </strong><br>
							Name : <strong>{{$customer->customer_name}}</strong><br>
							Email: <strong>{{$customer->email_address}}</strong> <br>
							Phone: <strong>{{$customer->phone_number}}</strong>
						</td>
					</tr>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>
					{{-- <tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="center-justified">
								<strong>Invoice To:</strong> FooBar
								<strong>Invoice Amount:</strong> Rs. 11,236
							</div>
						</td>
					</tr> --}}
				</tbody>
			</table>
			<p>&nbsp;</p>
			<table width="100%" class="outline-table">
				<thead class="border-bottom border-right grey">
					<tr>
						<th width="14%"> Name </th>
						<th width="14%"> Price </th>
						<th width="14%"> Quantity </th>
						<th width="14%"> Tax Amount </th>
						<th width="14%"> Discount Amount </th>
						<th width="14%"> Total </th>

					</tr>
				</thead>
				<tbody>
					@foreach($orderDetails as $orderDetail)
					<tr class="border-bottom border-right textright">
						<td>{{$orderDetail->product_name}}</td>
						<td class="textright">{{$orderDetail->product_price}}.tk </td>
						<td>{{$orderDetail->product_quantity}} </td>
						<td>0.00.tk </td>
						<td>0.00.tk </td>
						<td>{{ number_format($orderDetail->product_quantity*$orderDetail->product_price, 2, ',', ',') }}.tk</td>
					</tr>
					@endforeach
					<tr class="border-bottom border-right textright">
						<td colspan="4"></td>
						<td>Shipping: </td>
						<td>{{ number_format(50, 2, ',', ',') }}.tk</td>
					</tr>
					<tr class="border-bottom border-right textright">
						<td colspan="4"></td>
						<td>Grand Total </td>
						<td>{{ number_format($order->order_total+$delevary_Charge, 2, ',', ',') }}.tk</td>

					</tr>
					<tr class="border-bottom border-right textright">
						<td colspan="4"></td>
						<td>Total Paid </td>
						<td>{{ number_format($order->order_total+$delevary_Charge, 2, ',', ',') }}.tk </td>
					</tr>
				</tbody>
			</table>
			</div>
		</body>
	</html>