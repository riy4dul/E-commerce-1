<?php 
 //$ordersCount = App\Category::where('order_status' ,'Pending')->count();
 //$deliverycount =App\DeliveryModel::where('confirmation' ,'picked')->count();
 $categories=App\Category::all();



?>
<header class="site-header header-opt-1 cate-show">

            <!-- header-top -->
            <div class="header-top">
                <div class="container">

                    <!-- nav-left -->
                    <ul class="nav-left" >
                         {{--  <li ><span><i class="fa fa-phone" aria-hidden="true"></i>00-62-658-658</span></li>
                        <li ><span><i class="fa fa-envelope" aria-hidden="true"></i> Contact us today !</span></li>
                        <li class="dropdown switcher  switcher-currency">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle switcher-trigger"><span>USD</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu switcher-options ">
                                <li class="switcher-option">
                                    <a href="#">
                                        <i class="fa fa-usd" aria-hidden="true"></i> USD
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <i class="fa fa-eur" aria-hidden="true"></i> eur
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <i class="fa fa-gbp" aria-hidden="true"></i> gbp
                                    </a>
                                </li>
                            </ul>
                        </li>
                      <li class="dropdown switcher  switcher-language">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle switcher-trigger" aria-expanded="false">
                                <img class="switcher-flag" alt="flag" src="{{asset('/') }}frontend/images/flags/flag_english.png">
                                <span>English</span> 
                                <i aria-hidden="true" class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu switcher-options ">
                                <li class="switcher-option">
                                    <a href="#">
                                        <img class="switcher-flag" alt="flag" src="{{asset('/') }}frontend/images/flags/flag_english.png">English
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <img class="switcher-flag" alt="flag" src="{{asset('/') }}frontend/images/flags/flag_french.png">French
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <img class="switcher-flag" alt="flag" src="{{asset('/') }}frontend/images/flags/flag_germany.png">Germany
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul><!-- nav-left -->

                    <!-- nav-right -->
                    <ul class=" nav-right">
                         @if(Session::get('customerId'))
                                    <li><a href="#" onclick="document.getElementById('customerLogoutForm').submit();"><i class="fa fa-sign-out"></i>Logout</a>

                                    <form action="{{route('customerLogout')}}" method="Post" id="customerLogoutForm">
                                        @csrf
                                    </form>
                                    {{-- {{Form::open(['route'=>'customer-logout','method'=>'POST','id'=>'customerLogoutForm'])}}
                                    {{Form::close()}} --}}
                                    @else
                                    <li><a href="{{route('newCustomerLogin')}}"><i class="fa fa-key fa-3x"></i>Login</a></li>
                                    @endif
                    </ul><!-- nav-right -->

                </div>
            </div><!-- header-top -->

            <!-- header-content -->
            <div class="header-content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-3 nav-left">

                            <!-- logo -->
                            <strong class="logo">
                                <a href="{{ URL::to('/')}}"><img src="{{asset('/') }}frontend/images/media/index1/logo.png" alt="logo" style="width: 63%;"></a>
                            </strong>

                        </div>

                        <div class="nav-right">  

                            <!-- block mini cart -->  
                            <div class="block-minicart dropdown">
                                <a class="dropdown-toggle" href="{{route('productCart')}}" role="button">
                                    <span class="cart-icon"></span>
                                    {{-- <span class="counter qty">
                                        <span class="cart-text">Shopping Cart</span>
                                        <span class="counter-number">6</span>
                                        <span class="counter-label">6 <span>Items</span></span>
                                        <span class="counter-price">$75.00</span>
                                    </span> --}}
                                </a>

                                {{-- <div class="dropdown-menu">
                                    <form>
                                        <div  class="minicart-content-wrapper" >
                                            <div class="subtitle">
                                                You have 6 item(s) in your cart
                                            </div>
                                            <div class="minicart-items-wrapper">
                                                <ol class="minicart-items">
                                                    <li class="product-item">
                                                        <a class="product-item-photo" href="#" title="The Name Product">
                                                            <img class="product-image-photo" src="{{asset('/') }}frontend/{{asset('/') }}frontend/images/media/index1/minicart.jpg" alt="The Name Product">
                                                        </a>
                                                        <div class="product-item-details">
                                                            <strong class="product-item-name">
                                                                <a href="#">Donec Ac Tempus</a>
                                                            </strong>
                                                            <div class="product-item-price">
                                                                <span class="price">61,19 €</span>
                                                            </div>
                                                            <div class="product-item-qty">
                                                                <span class="label">Qty: </span ><span class="number">1</span>
                                                            </div>
                                                            <div class="product-item-actions">
                                                                <a class="action delete" href="#" title="Remove item">
                                                                    <span>Remove</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-item">
                                                        <a class="product-item-photo" href="#" title="The Name Product">
                                                            <img class="product-image-photo" src="{{asset('/') }}frontend/images/media/index1/minicart2.jpg" alt="The Name Product">
                                                        </a>
                                                        <div class="product-item-details">
                                                            <strong class="product-item-name">
                                                                <a href="#">Donec Ac Tempus</a>
                                                            </strong>
                                                            <div class="product-item-price">
                                                                <span class="price">61,19 €</span>
                                                            </div>
                                                            <div class="product-item-qty">
                                                                <span class="label">Qty: </span ><span class="number">1</span>
                                                            </div>
                                                            <div class="product-item-actions">
                                                                <a class="action delete" href="#" title="Remove item">
                                                                    <span>Remove</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div class="subtotal">
                                                <span class="label">Total</span>
                                                <span class="price">$630</span>
                                            </div>
                                            <div class="actions">
                                                <!-- <a class="btn btn-viewcart" href="">
                                                    <span>Shopping bag</span>
                                                </a> -->
                                                <a href=""><button class="btn btn-checkout" type="button" title="Check Out">
                                                    <span>Checkout</span>
                                                </button>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>

                        </div>

                        <div class="nav-mind">   

                            <!-- block search -->
                            <div class="block-search">
                                <div class="block-title">
                                    <span>Search</span>
                                </div>
                                <div class="block-content">
                                    {{-- <div class="categori-search  ">
                                        <select data-placeholder="All Categories" class="categori-search-option">
                                            <option>All Categories</option>
                                            <option>Fashion</option>
                                            <option>Tops Blouses</option>
                                            <option>Clothing</option>
                                            <option>Furniture</option>
                                            <option>Bathtime Goods</option>
                                            <option>Shower Curtains</option>
                                        </select>
                                    </div> --}}
                                    <div class="form-search ">
                                        <form action="{{route('productSearch')}}" method="POST">
                                            @csrf
                                            <div class="box-group">
                                                <input type="text" class="form-control" name="searchtxt" placeholder="i'm Searching for...">
                                                <button class="btn btn-search" type="submit"><span>search</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>          
                    </div>
                </div>
            </div><!-- header-content -->

            <!-- header-nav -->
            <div class="header-nav mid-header">
                <div class="container">

                    <div class="box-header-nav">

                        <!-- btn categori mobile -->
                        <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span></span>

                        <!-- btn menu mobile -->
                        <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span></span>

                       

                        <!-- menu -->
                        <div class="block-nav-menu">
                            <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>
                            
                            <ul class="ui-menu">
                                 {{-- @foreach($categories as $category)
                                 {{$category->name }}
                                 @endforeach 
                                    {{ Request::is('home') ? 'm-menu__item--active' : ''}}
                                 --}}
                                <li class="parent parent-megamenu">
                                    <a href="{{URL::to('/')}}">Home</a>
                                    <span class="toggle-submenu"></span>
                                    
                                </li>
                                @foreach($categories as $category)
                                <li class="parent parent-megamenu">
                                    <a href="{{route('categoryProduct',$category->id)}}" class="act">{{$category->name }}</a>
                                    <span class="toggle-submenu"></span>
                                    
                                </li>
                                @endforeach


                               {{--  <li class="active"><a href="{{route('category-product',['id'=>$category->id])}}" class="act">{{$category->category_name}}</a></li>

                                <li><a href="#">Women's </a></li> --}}


                                {{-- <li><a href="#">Men's </a></li>
                                <li><a href="#">Electronics </a></li> --}}


                                <!-- <li class="parent parent-megamenu">

                                     <a >Electronics  <span class="label-menu">New</span></a>
                                    <span class="toggle-submenu"></span>
                                   <div class="megamenu drop-menu">
                                        <ul>
                                            <li class="col-md-3">
                                                <div class="img-categori">
                                                    <a href=""><img alt="img" src="{{asset('/') }}frontend/images/media/index1/img-categori1.jpg"></a>
                                                </div>
                                                <strong class="title"><a href=""><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3">
                                               
                                                <div class="img-categori">
                                                    <a href=""><img  alt="img"  src="{{asset('/') }}frontend/images/media/index1/img-categori2.jpg"></a>
                                                </div>
                                                <strong class="title"><a href=""><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3">
                                                
                                                <div class="img-categori">
                                                    <a href=""><img alt="img"  src="{{asset('/') }}frontend/images/media/index1/img-categori3.jpg"></a>
                                                </div>
                                                <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3">
                                                
                                                <div class="img-categori">
                                                    <a href=""><img alt="img"  src="{{asset('/') }}frontend/images/media/index1/img-categori4.jpg"></a>
                                                </div>
                                                <strong class="title"><a href=""><span>Trending</span> </a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li> -->
                                
                            </ul>

                        </div><!-- menu -->

                        <!-- mini cart -->
                        <div class="block-minicart dropdown ">

                            <a class="dropdown-toggle" href="{{route('productCart')}}" role="button" >
                                <span class="cart-icon"></span>
                            </a>

                            

                        </div>

                        <!-- search -->
                        <div class="block-search">
                            <div class="block-title">
                                <span>Search</span>
                            </div>
                            <div class="block-content">
                                <div class="form-search">
                                    <form action="{{route('productSearch')}}" method="POST">
                                            @csrf
                                        <div class="box-group">
                                            <input type="text" class="form-control" name="searchtxt" placeholder="i'm Searching for...">
                                            <button class="btn btn-search" type="button"><span>search</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- search -->

                        <!--setting  -->
                        {{-- <div class="dropdown setting">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>Settings</span> <i aria-hidden="true" class="fa fa-user"></i></a>
                            <div class="dropdown-menu  ">
                                <div class="switcher  switcher-language">
                                    <strong class="title">Select language</strong>
                                    <ul class="switcher-options ">
                                        <li class="switcher-option">
                                            <a href="#">                         <img class="switcher-flag" alt="flag" src="{{asset('/') }}frontend/images/flags/flag_french.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="{{asset('/') }}frontend/images/flags/flag_germany.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="{{asset('/') }}frontend/images/flags/flag_english.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option switcher-active">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="{{asset('/') }}frontend/images/flags/flag_spain.png">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="switcher  switcher-currency">
                                    <strong class="title">SELECT CURRENCIES</strong>
                                    <ul class="switcher-options ">
                                        <li class="switcher-option">
                                            <a href="#">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="switcher-option switcher-active">
                                            <a href="#">
                                                <i class="fa fa-eur" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <i class="fa fa-gbp" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                <ul class="account">
                                    <li><a href="">Wishlist</a></li>
                                    <li><a href="">My Account</a></li>
                                    <li><a href="">Checkout</a></li>
                                    <li><a href="">Compare</a></li>
                                    <li><a href="">Login/Register</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <!--setting  -->
                        
                    </div>
                </div>
            </div><!-- header-nav -->

        </header>