<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
use App\Category;
use App\Shipping;
use App\Payment;
use App\Product;
use App\OrderDetail;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $ordersCount = Order::where('order_status' ,'Pending')->count();
            $totlaproduct = product::count();
            $totalcategory = Category::count();
            $totalOrder = Order::count();
            $totalorderprice = Order::where('order_status','Delivered')
            ->sum('order_total');

            $orders=DB::table('orders')
                  ->join('customers','orders.customer_id', '=', 'customers.id')
                  ->join('payments','orders.id', '=', 'payments.order_id')
                  ->join('shippings','orders.shipping_id', '=', 'shippings.id')
                  ->where('order_status', "Pending")
                  ->select ('orders.*','customers.customer_name','customers.phone_number','payments.payment_type','payments.payment_status','shippings.address')
                  ->orderBy('updated_at', 'desc')
                  ->get();

         return view('backend.dashboard',compact('ordersCount','totlaproduct','totalcategory','totalOrder','totalorderprice','orders'));
        // return view('backend.dashboard',compact('categoryCount','itemCount','sliderCount','reservations','contactCount'));
    }
}
