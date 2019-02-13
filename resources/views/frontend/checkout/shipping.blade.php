@extends('frontend.layout.master')
@section('content')
<main class="site-main">
	<div class="columns container">
		
		
		<ol class="breadcrumb no-hide">
			<li><a href="#">Home    </a></li>
			<li class="active"> Checkout</li>
			</ol><!-- Block  Breadcrumb-->
			<div class="page-content checkout-page">
				<div class="col-md-12 well text-center text-success">
			<strong>Dear {{Session::get('customerName')}}. You have to give us Product shipping info to compleat your valuable order.</strong>
		</div>
				<h3 class="checkout-sep">Shipping Information</h3>
				<div class="box-border">
					<form method="POST" action="{{route('shippingSubmit')}}" class="form-horizontal">
                                    @csrf
					
					<ul>
						<li class="row">
							<div class="col-sm-6">
								<label for="name" name="name" class="required">Name</label><br>
								<span class="text-danger">{{ $errors->has('name') ? $errors->first('name'):'' }}</span>
								
								<input class="input form-control" name="name" id="name" type="text">
							</div>
							<div class="col-sm-6">
								<label for="company_name">Company Name</label><br>
								<span class="text-danger">{{ $errors->has('company_name') ? $errors->first('company_name'):'' }}</span>
								<input class="input form-control" name="company_name" id="company_name" type="text">
							</div>
						</li>
						<li class="row">
							<div class="col-sm-6">
								<label for="email" class="required">Email Address</label><br>
								<span class="text-danger">{{ $errors->has('email') ? $errors->first('email'):'' }}</span>
								<input class="input form-control" name="email" id="email" type="email">
							</div>
							<div class="col-sm-6">
								<label for="telephone" class="required">Telephone</label><br>
								<span class="text-danger">{{ $errors->has('telephone') ? $errors->first('telephone'):'' }}</span>
								<input class="input form-control" name="telephone" id="telephone" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
							</div>
						</li>
						<li class="row">
							<div class="col-sm-12">
								<label for="address" class="required">Address</label><br>
								<span class="text-danger">{{ $errors->has('address') ? $errors->first('address'):'' }}</span>
								<input class="input form-control" name="address" id="address" type="text">
							</div>
						</li>
					</ul>
					<button class="button" type="submit">Continue</button>
					</form>
				</div>
			</div>
		</div>
	</main>
	@endsection