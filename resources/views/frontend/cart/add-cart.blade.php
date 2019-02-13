@extends('frontend.layout.master')
@section('content')
<main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="#">Home    </a></li>
                    <li class="active"> Checkout</li>
                </ol><!-- Block  Breadcrumb-->

                <h2 class="page-heading">
                    <span class="page-heading-title2"> Checkout</span>
                </h2>

                <div class="page-content checkout-page">
                    <div class="box-border">
                <div class="table-responsive">
                    <table class="table table-bordered  cart_summary">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="cart_product">Image</th>
                                <th>Name</th>
                                <th>Unit price</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th class="action"><i class="fa fa-trash-o"></i></th>
                            </tr>
                        </thead>
                        @php($i=1)
                        @php($sum=0)
                        @foreach($cartProducts as $cartProduct)
                        <tbody>
                            
                            <tr>
                                <td>{{$i++}}</td>
                                <td class="cart_product">
                                    <a href="#"><img src="{{asset('backend/images/product/'.$cartProduct->options->image)}}" alt="img"></a>
                                </td>
                                <td class="cart_description">
                                    <p class="product-name"><a href="#">{{$cartProduct->name}}</a></p>
                                    {{-- <small class="cart_ref">SKU : #123654999</small><br>
                                    <small><a href="#">Color : Beige</a></small><br>
                                    <small><a href="#">Size : S</a></small> --}}
                                </td>
                                <td class="price"><strong>{{ number_format($cartProduct->price, 2, ',', ',') }}৳</strong></td>
                                {{-- <td class="qty">
                                    
                                    <input minlength="1" maxlength="12" name="qty1" id="qty1" value="{{$cartProduct->qty}}" class="form-control input-sm" readonly>
                                    <span data-field="qty1" data-type="minus" class="btn-number" ><i class="fa fa-caret-up"></i></span>
                                    <span data-field="qty1" data-type="plus" class="btn-number"><i class="fa fa-caret-down"></i></span>
                                </td> --}}
                                <td class="qty">
                                    
                                    {{-- <input minlength="1" maxlength="12" name="qty0" id="qty0" value="{{$cartProduct->qty}}" class="form-control input-sm" type="text">
                                    <span data-field="qty0" data-type="minus" class="btn-number" value="Update" ><i class="fa fa-caret-up"></i></span>
                                    <span data-field="qty0" data-type="plus" class="btn-number" value="Update"><i class="fa fa-caret-down"></i></span> --}}
                                    <form method="POST" action="{{route('cartUpdate')}}" class="form-horizontal">
                                    @csrf
                                    
                                    <input type="number" name="qty" value="{{$cartProduct->qty}}" min="1">
                                    <input type="hidden" name="rowId" value="{{$cartProduct->rowId}}" min="1">
                                    <input type="submit" name="btn" value="Update">
                                    </form>
                                </td>
                                <td class="price">
                                    {{-- <strong>৳ {{$total=$cartProduct->price*$cartProduct->qty}}</strong> --}}
                                    <strong>{{ number_format($total=$cartProduct->price*$cartProduct->qty, 2, ',', ',') }}৳</strong>
                                </td>
                                <td class="action">
                                    <a href="{{route('deleteCartItem',['rowId'=>$cartProduct->rowId])}}" title="Delete">Delete item</a>
                                </td>
                            </tr>
                            <?php $sum=$sum+$total; ?>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5" rowspan="3"></td>
                            <td colspan="1">Tax</td>
                            <td colspan="1">৳ {{$vat=0}}</td>
                        </tr>
                        {{-- <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong>৳ {{$total=$cartProduct->price*$cartProduct->qty}}</strong></td>
                        </tr> --}}
                        <tr>
                            <td colspan="1"><span>Shiping Cost</span></td>
                            <td colspan="1"><span> ৳ {{$shiping=0}}</span></td>
                        </tr>
                        <tr>
                            
                            <td colspan="1"><strong>Total</strong></td>
                            <td colspan="1"><strong> {{ number_format($orderTotal = $sum+$vat+$shiping, 2, ',', ',') }}৳</strong></td>
                           
                            <?php 
                                Session::put('orderTotal',$orderTotal);
                             ?>
                        </tr>
                        </tfoot>
                        
                    </table>
                    <a href="{{URL::to('/')}}"><button class="button pull-left">Continue Shoping</button></a>

                   @if(Session::get('customerId'))
                    <a href="{{route('checkoutShiping')}}"><button class="button pull-right">Place Order</button></a>
                    @else
                    <a href="{{route('checkOut')}}"><button class="button pull-right">Place Order</button></a>
                   @endif
                   
                </div>
            </div>
                </div>

            </div>


        </main>
@endsection