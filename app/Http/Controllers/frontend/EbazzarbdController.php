<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use filter;
use Brian2694\Toastr\Facades\Toastr;

class EbazzarbdController extends Controller
{
    public function index()
    {
       // return view('frontend.home');
        $categories = Category::all();
        $products = Product::where('publication_status',1)
                             ->orderBy('id','DESC')
                            // ->take(9)
                            ->get();
        
        return view('frontend.home',compact('categories','products'));
    }

    public function pagenotfound() {
        return view('errors.404');
    }

    public function productDetail($id)
    {
        $allproducts = Product::where('publication_status',1)
                             ->orderBy('id','DESC')
                             ->take(3)
                            ->get();

        $products=Product::where('id',$id)
                  ->where('publication_status',1)
                  ->get();
        return view('frontend.product.product-detail',compact('products','allproducts'));
    }

   
    public function store(Request $request)
    {
        //
    }

    public function categoryProduct($id)
    {
        
        $categoryProducts=Product::where('category_id',$id)->get(); 
        return view('frontend.category.category-wise-product',compact('categoryProducts'));
        
    }

    public function productSearch(Request $request)
    {
        $categoryProducts = Product::where('product_name', 'LIKE', '%'.$request->searchtxt.'%')->get();
         return view('frontend.category.category-wise-product',compact('categoryProducts'));
    }

}
