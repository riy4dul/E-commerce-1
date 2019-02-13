@extends('frontend.layout.master')
@section('content')
        
        <main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="{{URL::to('/')}}">Home    </a></li>
                    <li class="active"> Checkout</li>
                </ol>
                <!-- Block  Breadcrumb-->
                <div class="page-content checkout-page">
                    <h3 class="checkout-sep">Checkout Method</h3>
                    <div class="box-border">
                        <div class="row">
                            <div class="col-sm-6">
                                <form method="POST" action="{{route('newCustomerSingUp')}}" class="form-horizontal">
                                    @csrf
                                    <h4>Register If You Are Not Registered before</h4>

                                    <label>Name</label>
                                    <span class="text-danger">{{ $errors->has('customer_name') ? $errors->first('customer_name'):'' }}</span>
                                    <br>
                                    <input class="form-control input" type="text" name="customer_name">

                                    
                                    <label>Email address</label>
                                    <span class="text-danger">{{ $errors->has('email_address') ? $errors->first('email_address'):'' }}</span>
                                    <br>
                                    <input class="form-control input" type="email" name="email_address">

                                    
                                    <label>Phone</label>
                                    <span class="text-danger">{{ $errors->has('phone_number') ? $errors->first('phone_number'):'' }}</span>
                                    <br>
                                    <input class="form-control input" type="text" name="phone_number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                    

                                    <label>Password</label>
                                    <span class="text-danger">{{ $errors->has('password') ? $errors->first('password'):'' }}</span>
                                    <br>
                                    <input class="form-control input" type="password" name="password">
                                    <button class="button" type="submit">Register</button>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <form method="POST" action="{{route('newCustomerLoginCheck')}}" class="form-horizontal">
                                    @csrf
                                <h4>Login</h4>
                                <p>Already registered? Please log in below:</p>
                                
                                <label>Email address</label>
                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email'):'' }}</span>
                                <input class="form-control input" name="email_address" type="email">
                                
                                <label>Password</label>
                                <span class="text-danger">{{ $errors->has('password') ? $errors->first('password'):'' }}</span>
                                <input class="form-control input" name="password" type="password">

                                <p><a href="#">Forgot your password?</a></p>
                                <button class="button">Login</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    
                    
                    
                </div>

            </div>


        </main>
        @endsection