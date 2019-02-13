<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Order;
use App\Customer;
use App\Shipping;
use App\Payment;
use App\OrderDetail;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use PDF;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=DB::table('orders')
                    ->join('customers','orders.customer_id', '=', 'customers.id')
                    ->join('payments','orders.id', '=', 'payments.order_id')
                    ->join('shippings','orders.shipping_id', '=', 'shippings.id')
                    ->select ('orders.*','customers.customer_name','customers.phone_number','payments.payment_type','payments.payment_status','shippings.address')
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('backend.order.orderList',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderDetail($id)
    {
        //return $id;
        $order=Order::find($id);
        $customer=Customer::find($order->customer_id);
        $shipping=Shipping::find($order->shipping_id);
        $payment=Payment::where('order_id',$order->id)->first();
     
        $orderDetails=OrderDetail::where('order_id',$order->id)->get();
        //   return $orderDetails;

        return view('backend.order.orderDetail',compact('order','customer','shipping','payment','orderDetails'));       
    }

    public function orderInvoiceDownload($id)
    {
        $order=Order::find($id);
        $customer=Customer::find($order->customer_id);
        $shipping=Shipping::find($order->shipping_id);
        $payment=Payment::where('order_id',$order->id)->first();
        $orderDetails=OrderDetail::where('order_id',$order->id)->get();

        $pdf = PDF::loadView('backend.order.orderInvoiceDownload',compact('order','customer','shipping','payment','orderDetails'));
        $pdfnm=$id.' invoice '.$customer->customer_name.'.pdf';
        return $pdf->stream($pdfnm);
        // return $pdf->download($pdfnm);

        //return view('backend.order.orderInvoiceDownload',compact('order','customer','shipping','payment','orderDetails'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orderConfirmed($id)
    {
        $order_id = $id;
        $order = Order::where('id', $order_id)->first();
        $order->order_status = 'Shipping';
        $order->save();
        
        return redirect()->back();
       
    }

    public function shippingConfirmed($id)
    {
        $order_id = $id;
        $order = Order::where('id', $order_id)->first();
        $order->order_status = 'Delivered';
        $order->save();
        
        return redirect()->back();
    }

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
