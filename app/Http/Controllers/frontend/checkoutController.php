<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use App\Shipping;
use App\Order;
use App\Payment;
use App\OrderDetail;
use Cart;
use Session;
use Mail;
use Brian2694\Toastr\Facades\Toastr;

class checkoutController extends Controller
{
    
    public function index()
    {
        return view('frontend.checkout.checkout');
    }

    public function newCustomerSingUp(Request $request)
    {
        $this->validate($request,[
           'customer_name'=>'required',
            'email_address'=>'required',
            'password'=>'required',
            'phone_number'=>'required',
        ]);


        $customer= new Customer();
        $customer->customer_name=$request->customer_name;
        $customer->email_address=$request->email_address;
        $customer->password=bcrypt($request->password);
        $customer->phone_number=$request->phone_number;
        $customer->save();

        Toastr::success('Welcome To Ebazzarbd','Success',["positionClass" => "toast-top-right"]);

        $customerId=$customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->customer_name);

       $data=$customer->toArray();

        // Mail::send('front-end.mails.confirmation-mail',$data,function($message) use ($data) {
        //     $message->to($data['email_address']);
        //     $message->subject('confirmatino mail');
        // });
         
        return redirect('/');
    }

    
    public function customerSingup(Request $request)
    {
         $this->validate($request,[
           'customer_name'=>'required',
            'email_address'=>'required',
            'password'=>'required',
            'phone_number'=>'required',
        ]);


        $customer= new Customer();
        $customer->customer_name=$request->customer_name;
        $customer->email_address=$request->email_address;
        $customer->password=bcrypt($request->password);
        $customer->phone_number=$request->phone_number;
        $customer->save();

        Toastr::success('Welcome To Ebazzarbd','Success',["positionClass" => "toast-top-right"]);

        $customerId=$customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->customer_name);

       $data=$customer->toArray();

        // Mail::send('front-end.mails.confirmation-mail',$data,function($message) use ($data) {
        //     $message->to($data['email_address']);
        //     $message->subject('confirmatino mail');
        // });
         
        return redirect('checkout-shiping');
    }

    public function newCustomerLogin()
    {
        return view('frontend.customer.new-customer-login');

    }

    public function newCustomerLoginCheck(Request $request)
    {
        $this->validate($request,[
           'email_address'=>'required',
            'password'=>'required',
        ]);

         $customer =Customer::where('email_address',$request->email_address)->first();

        if($customer == null)
        {
            Toastr::warning('Your Password or Email is Incorrect','Sorry',["positionClass" => "toast-top-right"]);
         return redirect('new-customer-page');
        }elseif( password_verify($request->password, $customer->password)) {
        $customerId=$customer->id;
         Session::put('customerId',$customerId);
         Session::put('customerName',$customer->customer_name);

         Toastr::success('Welcome Back To Ebazzarbd','Success',["positionClass" => "toast-top-right"]);

         return redirect('/');
        }
        else{
           Toastr::warning('Your Password or Email is Incorrect','Sorry',["positionClass" => "toast-top-right"]);
         return redirect('new-customer-page');
        
        }
    }

    public function customerLogout()
    {
        Session::forget('customerId');
        Session::forget('customerName');

        return redirect('/');
    }

    public function shippingForm(Request $request)
    {
       
        $customer=Customer::find(Session::get('customerId'));
        return view('frontend.checkout.shipping',compact('customer'));
    }

    public function customerLoginCheck(Request $request)
    {
        
        $this->validate($request,[
           'email_address'=>'required',
            'password'=>'required',
        ]);

         $customer =Customer::where('email_address',$request->email_address)->first();

        if($customer == null)
        {
            Toastr::warning('Your Password or Email is Incorrect','Sorry',["positionClass" => "toast-top-right"]);
         return redirect('checkout');
        }elseif( password_verify($request->password, $customer->password)) {
        $customerId=$customer->id;
         Session::put('customerId',$customerId);
         Session::put('customerName',$customer->customer_name);

         return redirect('checkout-shiping');
        }
        else{
           Toastr::warning('Your Password or Email is Incorrect','Sorry',["positionClass" => "toast-top-right"]);
         return redirect('checkout');
        
        }
    }
   
    public function saveShippingInfo(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
            'company_name'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'address'=>'required',
        ]);

        $shipping = new Shipping();
        $shipping->name=$request->name;
        $shipping->company_name=$request->company_name;
        $shipping->email=$request->email;
        $shipping->telephone=$request->telephone;
        $shipping->address=$request->address;
        $shipping->save();

        Toastr::success('Shipping Information Save successfully. we will confirm to you shortly','Success',["positionClass" => "toast-top-right"]);
        Session::put('shipppingId',$shipping->id);

        return redirect('checkout-payment');
    }

    public function newOrder(Request $request)
    {
        $paymentType=$request->payment_type;
        if($paymentType=='Cash'){
            $order=new Order() ;
            $order->customer_id=Session::get('customerId');
            $order->shipping_id=Session::get('shipppingId');
            $order->order_total=Session::get('orderTotal');
            $order->save();

            $payment= new Payment();
            $payment->order_id=$order->id;
            $payment->payment_type=$paymentType;
            $payment->save();

            
            $cartProducts=Cart::content();
            foreach ($cartProducts as $cartProduct){
                $orderDetail = new OrderDetail();
                $orderDetail->order_id=$order->id;
                $orderDetail->product_id=$cartProduct->id;
                $orderDetail->product_name=$cartProduct->name;
                $orderDetail->product_price=$cartProduct->price;
                $orderDetail->product_quantity=$cartProduct->qty;
                $orderDetail->save();
            }
            Cart::destroy();
            return redirect('order-complete');
        }
        else if ($paymentType=='Paypel') {
            
            Toastr::error('Sorry Now We Support only Cash','Sorry',["positionClass" => "toast-top-right"]);
            return redirect('checkout-payment');
        }
        else if ($paymentType=='Bkash') {
        
        Toastr::error('Sorry Now We Support only Cash','Sorry',["positionClass" => "toast-top-right"]);
            return redirect('checkout-payment');
        }

    }


    public function paymentForm()
    {

        return view('frontend.checkout.payment');
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function completeOrder()
    {
         
        Toastr::success('Thanks for your order. we will contact with you very soon','Success',["positionClass" => "toast-top-right"]);
        return redirect('/');

    }

    public function destroy($id)
    {
        //
    }
}
