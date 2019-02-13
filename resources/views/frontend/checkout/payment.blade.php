@extends('frontend.layout.master')
@section('content')
<main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="#">Home    </a></li>
                    <li class="active"> Checkout</li>
                </ol><!-- Block  Breadcrumb-->
                <div class="page-content checkout-page">
                    
                    <h3 class="checkout-sep">Payment Information</h3>
                    <div class="box-border">
                    	<form action="{{route('newOrder')}}" method="POST"> 
                    	@csrf
                        <ul>
                            <li>
                                <label for="cash-on-delivery"><input checked="" name="payment_type" value="Cash" id="cash-on-delivery" type="radio">Cash On Delivery</label>
                            </li>

                            <li>
                    			<label for="bkash"><input name="payment_type" value="Bkash" id="bkash" type="radio" readonly>Bkash</label>
                            </li>
                            <li>
                    			<label for="paypel"><input name="payment_type" value="Paypel" id="paypel"  type="radio" readonly> Paypel</label>
                            </li>
                        </ul>
                        <button class="button" type="submit">Continue</button>
                        </form>

                       {{--  <table class="table">
						<tr>
							<th>Cash On Delivery</th>
							<td><input type="radio" name="payment_type" value="Cash"> Cash On Delivery</td>
						</tr>
						<tr>
							<th>Paypel</th>
							<td><input type="radio" name="payment_type" value="Paypel"> Paypel</td>
						</tr>
						<tr>
							<th>BKash</th>
							<td><input type="radio" name="payment_type" value="Bkash"> Bkash</td>
						</tr>
						<tr>
							<th></th>
							<td><input type="submit" name="btn " class="button" value="Confirm Order"></td>
						</tr>
					</table> --}}

                    </div>
                    </div>
                </div>

            </div>


		</main>
@endsection