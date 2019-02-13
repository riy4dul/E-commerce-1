@extends('backend.layouts.master')
@section('content')
		<div class="row">
			<div class="col-md-12">
				<div class="card ">
					
					<div class="card-body ">
						<form method="POST" action="{{route('productStore')}}" class="form-horizontal" enctype="multipart/form-data">
							@csrf
							<div class="card ">
								{{-- <div class="card-header card-header-rose card-header-icon">
									<h4 class="card-title text-center">Add Product Form</h4>
								</div> --}}

								<div class="card-header card-header-rose card-header-icon">
						
									<div class="card-text text-center">
										<h4 class="card-title text-center">Add Product Form</h4>
									</div>
								</div>

		
								<div class="card-body ">
									<div class="form-group">
										<label class="control-label">Category</label>
										<select class="form-control" name="category">
											@foreach($categories as $category)
											<option value="{{ $category->id }}">{{ $category->name }}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group">
										<label class="bmd-label-floating">Name</label>
										<span class="text-danger">{{ $errors->has('name') ? $errors->first('name'):'' }}</span>
                                    	<br>
										<input type="text" class="form-control" name="name" required="true">
									</div>
									<div class="form-group">
										<label class="bmd-label-floating">Description</label>
										<span class="text-danger">{{ $errors->has('description') ? $errors->first('description'):'' }}</span>
                                    	<br>
										<textarea class="form-control" name="description" required="true"></textarea>
									</div>
									<div class="form-group">
										<label class="bmd-label-floating">Price</label><br>
										<span class="text-danger">{{ $errors->has('price') ? $errors->first('price'):'' }}</span>
										<input type="text" class="form-control " oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="price" >
									</div>
									<div class="form-group">
										<label class="bmd-label-floating">Product Quantity</label>	<br>
										<span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity'):'' }}</span><br>
										<input type="number" class="form-control" name="product_quantity" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
											
										
									</div>
									<div class="form-group">
										<label class="bmd-label-floating">Publication Status</label>
										<br>
										<span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status'):'' }}</span>	
									<div class="col-md-8 radio" >
										<label><input type="radio" name="publication_status" value="1"> Published</label>&nbsp;&nbsp;
										<label><input type="radio" name="publication_status" value="0"> Unpublished</label>
									</div>
								</div>

									<div class="row">
										<div class="col-sm-10">
											<div class="fileinput fileinput-new text-center" data-provides="fileinput">
												<div class="fileinput-new thumbnail">
													<img src="{{asset('/') }}backend/images/image_placeholder.jpg" alt="...">
												</div>
												<div class="fileinput-preview fileinput-exists thumbnail"></div>
												<div>
													<span class="btn btn-rose btn-round btn-file">
														<span class="fileinput-new">Select image</span>
														<span class="fileinput-exists">Change</span>
														<input type="file" name="image" id="image" />
													</span>	<br>
										<span class="text-danger">{{ $errors->has('image') ? $errors->first('image'):'' }}</span>

													<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<a href="" class="btn btn-danger btn-md" >Back</a>
										<button class="btn btn-primary btn-md" >save</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				</div> <!-- end row -->
			</div>
		@endsection