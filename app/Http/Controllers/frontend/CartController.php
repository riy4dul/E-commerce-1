<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request)
    {
        
        $product=Product::find($request->id);
        Cart::add([
            'id'=>$request->id,
            'name'=>$product->product_name,
            'price'=>$product->product_price,
            'qty'=>$request->qty,
            'options'=>[
                'image'=>$product->product_image
            ]
       ]);

       Toastr::success('Product Added Succesfully In Your Cart','Success',["positionClass" => "toast-top-right"]);
          return redirect('product-cart'); 
        //return view('frontend.cart.add-cart');
        //return view('frontend.cart.add-cart',compact('sliders','categories','products'));
    }

   
    public function showCart()
    {
        $cartProducts=Cart::content();
        //return $cartProducts;

        return view ('frontend.cart.add-cart',compact('cartProducts'));
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $request)
    {
        Cart::update($request->rowId,$request->qty);
        Toastr::success('Product updateed Succesfully In Your Cart','Success',["positionClass" => "toast-top-right"]);
        return redirect('product-cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        Toastr::error('Product Deleted Succesfully From Your Cart','Success',["positionClass" => "toast-top-right"]);
        return redirect('product-cart');
    }
}
