@extends('backend.layouts.master')
@section('content')
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-rose card-header-icon">
						<a href="{{route('productAdd')}}" class="btn btn-info btn-md">Add New</a>
						@include('backend.layouts.msg')
						<h3 class="card-title text-center">All Product</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="datatables" class="table">
								<thead>
									<tr>
										<th>ID</th>
		                                <th>Name</th>
		                                <th>Image</th>
		                                <th>Category Name</th>
		                                <th>Description</th>
		                                <th>Price</th>
		                                <th>Created At</th>
		                                <th class="disabled-sorting text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($products as $key=>$product)
									<tr>
										<td style="width: 3%" >{{$key + 1}}</td>
										<td style="width: 9%" >{{$product->product_name}}</td>
										<td style="width: 7%" ><img src="{{asset('backend/images/product/'.$product->product_image)}}" alt="" height="50px" width="100"></td>
										<td style="width: 15%" >{{$product->category->name}}</td>
										<td style="width: 30%" >{{$product->description}}</td>
										<td style="width: 10%">{{ number_format($product->product_price, 2, ',', ',') }}৳</td>
										<td style="width: 10%">{{$product->created_at}}</td>
										<td style="width: 16%" class="td-actions text-right">
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
										</td>
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

