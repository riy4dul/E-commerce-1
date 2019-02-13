<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products=Product::all();
        // return view('backend.product.show-product', compact('categories'));
        return view('backend.product.show-product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('backend.product.add-product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $this->validate($request,[
            'category'=> 'required',
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
            'product_quantity'=> 'required',
            'publication_status'=> 'required',
            'image'=> 'required|mimes:jpeg,jpg,bmp,png'
             ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'.'. $image->getClientOriginalExtension();
            if (!file_exists('backend/images/product'))
            {
                mkdir('backend/images/product',0777,true);
            }
            $image->move('backend/images/product',$imagename);
        }else{
            $imagename = "backend/images/product/default.jpg";
        }

        $product = new Product();
        $product->category_id=$request->category;
        $product->product_name=$request->name;
        $product->product_price=$request->price;
        $product->description=$request->description;
        $product->product_image=$imagename;
        $product->publication_status=$request->publication_status;
        $product->product_quantity=$request->product_quantity;
        $product->save();

        Toastr::success('Product Added Successfully','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('productList');

    }


    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        return view('backend.product.edit-product',compact('product','categories'));
    }
   
    public function update(Request $request, $image=null)
    {
         

         $this->validate($request,[
            'category'=> 'required',
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
            'product_quantity'=> 'required',
            'publication_status'=> 'required',
            'image'=> 'mimes:jpeg,jpg,bmp,png'
             ]);

        $product = Product::find($request->id);
        //return $product;
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'.'. $image->getClientOriginalExtension();
            if (!file_exists('backend/images/product'))
            {
                mkdir('backend/images/product',0777,true);
            }
            $image->move('backend/images/product',$imagename);
        }else{
            // $imagename = "backend/images/product/default.jpg";
            $imagename = $product->product_image;
        }

        $product->category_id=$request->category;
        $product->product_name=$request->name;
        $product->product_price=$request->price;
        $product->description=$request->description;
        $product->product_image=$imagename;
        $product->publication_status=$request->publication_status;
        $product->product_quantity=$request->product_quantity;
        $product->save();

        Toastr::success('Product Update Successfully','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('productList');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (file_exists('backend/images/product/'.$product->product_image))
        {
            unlink('backend/images/product/'.$product->product_image);
        }
        $product->delete();
        Toastr::error('Product Deleted Successfully','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('productList');
    }
}
