@extends('frontend.layout.master')
@section('content')
<main class="site-main">
    <!--  Popup Newsletter-->
    {{-- <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-image: url({{ asset('frontend/images/media/index1/Popup.jpg') }});">
                <img src="" alt="" height="80" width="80">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="block-newletter">
                    <div class="block-title">signup for our newsletter & promotions</div>
                    <div class="block-content">
                        <p class="text-title">GET <span>50% <span>off</span></span></p>
                        <form>
                            <label>on your next purchase</label>
                            <div class="input-group">
                                <input type="text" placeholder="Enter your email..." class="form-control">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="checkbox btn-checkbox">
                        <label>
                            <input type="checkbox"><span>Dont’s show this popup again!</span>
                        </label>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> --}}
    <!--  Popup Newsletter-->
    <div class="block-section-top block-section-top1">
        <div class="container">
            <!-- <div class="box-section-top"> -->
            <!-- categori -->
            <!-- <div class="block-nav-categori">
                <div class="block-title">
                    <span>Categories</span>
                </div>
                <div class="block-content">
                    <ul class="ui-categori">
                        <li class="parent">
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat1.png" alt="nav-cat"></span>
                                Electronics
                            </a>
                            <span class="toggle-submenu"></span>
                            <div class="submenu" style="background-image: url('{{ asset('frontend/images/media/index1/bgmenu.jpg') }});">
                                <ul class="categori-list clearfix">
                                    <li class="col-sm-3">
                                        <strong class="title"><a href="">Smartphone</a></strong>
                                        <ul>
                                            <li><a href="">Skirts    </a></li>
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Jumpusuits</a></li>
                                            <li><a href="">Scarvest</a></li>
                                            <li><a href="">T-Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <strong class="title"><a href="">TElevision</a></strong>
                                        <ul>
                                            <li><a href="">Skirts    </a></li>
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Jumpusuits</a></li>
                                            <li><a href="">Scarvest</a></li>
                                            <li><a href="">T-Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <strong class="title"><a href="">Camera</a></strong>
                                        <ul>
                                            <li><a href="">Skirts    </a></li>
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Jumpusuits</a></li>
                                            <li><a href="">Scarvest</a></li>
                                            <li><a href="">T-Shirts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="categori-list clearfix">
                                    <li class="col-sm-3">
                                        <strong class="title"><a href="">Smartphone</a></strong>
                                        <ul>
                                            <li><a href="">Skirts    </a></li>
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Jumpusuits</a></li>
                                            <li><a href="">Scarvest</a></li>
                                            <li><a href="">T-Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <strong class="title"><a href="">TElevision</a></strong>
                                        <ul>
                                            <li><a href="">Skirts    </a></li>
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Jumpusuits</a></li>
                                            <li><a href="">Scarvest</a></li>
                                            <li><a href="">T-Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <strong class="title"><a href="">Camera</a></strong>
                                        <ul>
                                            <li><a href="">Skirts    </a></li>
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Jumpusuits</a></li>
                                            <li><a href="">Scarvest</a></li>
                                            <li><a href="">T-Shirts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="parent">
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat2.png" alt="nav-cat"></span>
                                Smartphone & Table
                            </a>
                            <span class="toggle-submenu"></span>
                            <div class="submenu">
                                <div class="categori-img">
                                    <a href=""><img src="{{asset('/') }}frontend/images/media/index1/categori-img1.jpg" alt="categori-img"></a>
                                </div>
                                <ul class="categori-list">
                                    <li class="col-sm-3">
                                        <strong class="title"><a href="">Smartphone</a></strong>
                                        <ul>
                                            <li><a href="">Skirts    </a></li>
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Jumpusuits</a></li>
                                            <li><a href="">Scarvest</a></li>
                                            <li><a href="">T-Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <strong class="title"><a href="">TElevision</a></strong>
                                        <ul>
                                            <li><a href="">Skirts    </a></li>
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Jumpusuits</a></li>
                                            <li><a href="">Scarvest</a></li>
                                            <li><a href="">T-Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <strong class="title"><a href="">Camera</a></strong>
                                        <ul>
                                            <li><a href="">Skirts    </a></li>
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Jumpusuits</a></li>
                                            <li><a href="">Scarvest</a></li>
                                            <li><a href="">T-Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <strong class="title"><a href="">washing machine</a></strong>
                                        <ul>
                                            <li><a href="">Skirts    </a></li>
                                            <li><a href="">Jackets</a></li>
                                            <li><a href="">Jumpusuits</a></li>
                                            <li><a href="">Scarvest</a></li>
                                            <li><a href="">T-Shirts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="parent">
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat3.png" alt="nav-cat"></span>
                                Television
                            </a>
                            <span class="toggle-submenu"></span>
                            <div class="submenu">
                                <strong class="subtitle"><span>special products</span></strong>
                                <div class="owl-carousel"
                                    data-nav="true"
                                    data-dots="false"
                                    data-margin="30"
                                    data-autoplayTimeout="300"
                                    data-autoplay="true"
                                    data-loop="true"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "380":{"items":1},
                                    "480":{"items":1},
                                    "600":{"items":1},
                                    "992":{"items":4}
                                    }'>
                                    
                                    <div class="product-item product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name" src="{{asset('/') }}frontend/images/media/index1/product-menu1.jpg"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Asus Ispiron 20</a></strong>
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name" src="{{asset('/') }}frontend/images/media/index1/product-menu2.jpg"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Electronics Ispiron 20 </a></strong>
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name" src="{{asset('/') }}frontend/images/media/index1/product-menu3.jpg"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Samsung Ispiron 20 </a></strong>
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name" src="{{asset('/') }}frontend/images/media/index1/product-menu4.jpg"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Electronics Ispiron 20 </a></strong>
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name" src="{{asset('/') }}frontend/images/media/index1/product-menu4.jpg"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Samsung Ispiron 20 </a></strong>
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat4.png" alt="nav-cat"></span>
                                Shoes & Accessories
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat5.png" alt="nav-cat"></span>
                                Camera & Photo
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat6.png" alt="nav-cat"></span>
                                Watch & Jewellry
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat7.png" alt="nav-cat"></span>
                                Accessories
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat8.png" alt="nav-cat"></span>
                                Sport & Outdoors
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat9.png" alt="nav-cat"></span>
                                Computer & Networking
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat10.png" alt="nav-cat"></span>
                                Flashlights & Lamps
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat11.png" alt="nav-cat"></span>
                                Cameras & Photo
                            </a>
                        </li>
                        <li class="cat-link-orther">
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat10.png" alt="nav-cat"></span>
                                Sport & Outdoors
                            </a>
                        </li>
                        <li class="cat-link-orther">
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat9.png" alt="nav-cat"></span>
                                Watch & Jewellry
                            </a>
                        </li>
                        <li class="cat-link-orther">
                            <a href="">
                                <span class="icon"><img src="{{asset('/') }}frontend/images/icon/index1/nav-cat8.png" alt="nav-cat"></span>
                                Flashlights & Lamps
                            </a>
                        </li>
                        
                    </ul>
                    <div class="view-all-categori">
                        <a  class="open-cate btn-view-all">All Categories</a>
                    </div>
                </div>
                
            </div> -->
            <!-- categori -->
            <!-- block slide top -->
            <div class="block-slide-main slide-opt-1 nav-categori">
                <!-- slide -->
                <div class="owl-carousel dotsData"
                    data-nav="true"
                    data-dots="true"
                    data-margin="0"
                    data-items='1'
                    data-autoplayTimeout="700"
                    data-autoplay="true"
                    data-loop="true">
                    <div class="item item2" style="background-image: url({{ asset('frontend/images/media/index1/slide2.jpg') }});" data-dot="1">
                        <!-- url("{{ asset('assets/img/background.png') }}")
                        background-image:url({{url('images/php_mysql.jpg')}})
                        style="background-image: url("{{asset('frontend/images/icon/index1/nav-cat8.png')}}") -->
                        
                        <div class="description">
                            <span class="title">NEW COLLECTION </span>
                            <span class="subtitle">BIG SALE</span>
                            <span class="des"> ENJOY UP TO 35% OFF</span>
                            <a href="" class="btn">SHOP NOW</a>
                        </div>
                        
                    </div>
                    <div class="item item1" style="background-image:  url({{ asset('frontend/images/media/index1/slide1.jpg') }});" data-dot="2">
                        
                        <div class="description">
                            <span class="title">We’ve Take A Further </span>
                            <span class="subtitle">20% Off <br> Accessories</span>
                            <a href="" class="btn">shop now</a>
                        </div>
                        
                    </div>
                    
                    <div class="item item3" style="background-image:url({{ asset('frontend/images/media/index1/slide3.jpg') }});" data-dot="3">
                        
                        <div class="description">
                            <span class="title">Spring Fashion  </span>
                            <span class="subtitle">Fashion Colection Style 2016 </span>
                            <a href="" class="btn">Now In Stock</a>
                        </div>
                        
                    </div>
                    </div> <!-- slide -->
                </div>
                <!-- block slide top -->
                
                <!-- </div> -->
            </div>
        </div>
        <!-- block  service-->
        <div class="container ">
            <div class="block-service-opt1">
                <div class="clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{asset('/') }}frontend/images/media/index1/service1.png" alt="service">
                            </span>
                            <strong class="title">Free Shipping </strong>
                            <span>On order over $200</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{asset('/') }}frontend/images/media/index1/service2.png" alt="service">
                            </span>
                            <strong class="title">30-day return</strong>
                            <span>Moneyback guarantee</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{asset('/') }}frontend/images/media/index1/service3.png" alt="service">
                            </span>
                            <strong class="title">24/7 support</strong>
                            <span>Online consultations</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <span class="icon">
                                <img src="{{asset('/') }}frontend/images/media/index1/service4.png" alt="service">
                            </span>
                            <strong class="title">SAFE SHOPPING </strong>
                            <span>Safe Shopping Guarantee</span>
                        </div>
                    </div>
                    
                </div>
            </div>
            </div><!-- block  service-->
            
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        
                        <!-- block tab products -->
                        <div class="block-tab-products-opt1">
                            <div class="block-title">
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabproduct1"  role="tab" data-toggle="tab">best SELLERS </a>
                                    </li>
                                    {{-- <li role="presentation">
                                        <a href="#tabproduct2" role="tab" data-toggle="tab">ON SALE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tabproduct3"  role="tab" data-toggle="tab">NEW PRODUCTS</a>
                                    </li> --}}
                                </ul>
                            </div>
                            
                            <div class="block-content tab-content">
                                
                                <!-- tab 1 -->
                                <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1">
                                    <div class="owl-carousel"
                                        data-nav="true"
                                        data-dots="false"
                                        data-margin="30"
                                        data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":3}
                                        }'>
                                        @foreach($products as $product)
                                        @if ($product->category_id==16)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="{{route('productDetails',$product->id)}}"><img alt="product name" src="{{asset('backend/images/product/'.$product->product_image)}}"></a>
                                                    {{-- <span class="product-item-label label-price">30% <span>off</span></span> --}}
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">{{$product->product_name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            {{-- <span class="price"> {{$product->product_price}} ৳</span> --}}
                                                            <span class="price"> {{ number_format($product->product_price, 2, ',', ',') }}৳</span>
                                                            <span class="old-price">{{$product->product_price+100}} ৳</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                        
                                    </div>
                                </div>
                                <!-- tab 1 -->
                                
                            </div>
                            
                        </div>
                        <!-- block tab products -->
                    </div>
                    <div class="col-md-3">
                        <!-- block deals  of -->
                        <div class="block-deals-of block-deals-of-opt1">
                            <div class="block-title ">
                                <span class="icon"></span>
                                <div class="heading-title">latest deals</div>
                            </div>
                            <div class="block-content">
                                
                                <div class="owl-carousel"
                                    data-nav="true"
                                    data-dots="false"
                                    data-margin="30"
                                    data-responsive='{
                                    "0":{"items":1},
                                    "480":{"items":2},
                                    "768":{"items":3},
                                    "992":{"items":1},
                                    "1200":{"items":1}
                                    }'>
                                    @foreach($products as $product)
                                    @if ($product->category_id==14)
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">
                                            
                                            <div class="count-down-time" data-countdown="2016/12/25"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="{{route('productDetails',$product->id)}}"><img alt="product name" src="{{asset('backend/images/product/'.$product->product_image)}}"></a>
                                                
                                                <a href="{{route('productDetails',$product->id)}}" ><button type="button" class="btn btn-cart"><span>Add to Cart</span></button></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">{{$product->product_name}}</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">{{ number_format($product->product_price, 2, ',', ',') }}৳</span>
                                                        <span class="old-price">{{$product->product_price+100}} ৳</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    
                                </div>
                                
                            </div>
                        </div>
                        <!-- block deals  of -->
                    </div>
                </div>
            </div>
            <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
                
                <!-- block -floor -products / floor 1 :Fashion-->
                <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
                    <div class="container">
                        <div class="block-title ">
                            {{-- <span class="title"><img alt="img"  src="{{asset('/') }}frontend/images/media/index1/floor1.png">Women's</span> --}}
                            <span class="title"><img alt="img"  src="{{asset('/') }}frontend/images/media/index1/floor1.png">Women's</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <!-- <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor1-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor1-2"  role="tab" data-toggle="tab">Most Viewed </a></li>
                                        <li role="presentation"><a href="#floor1-3"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor1-4"  role="tab" data-toggle="tab">Women </a></li>
                                        <li role="presentation"><a href="#floor1-5"  role="tab" data-toggle="tab">Men</a></li>
                                        <li role="presentation"><a href="#floor1-6"  role="tab" data-toggle="tab">Kids </a></li>
                                        <li role="presentation"><a href="#floor1-7"  role="tab" data-toggle="tab">Accessories</a></li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="actions">
                                <a href="" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-2" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Banner -->
                        <div class="block-banner-floor">
                            
                            <div class="col-sm-6">
                                <a href="" class="box-img"><img src="{{asset('/') }}frontend/images/media/index1/banner1-1.jpg" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="" class="box-img"><img src="{{asset('/') }}frontend/images/media/index1/banner1-2.jpg" alt="banner"></a>
                            </div>
                            
                            </div><!-- Banner -->
                            <div class="block-content">
                                <div class="col-banner">
                                    <span class="label-featured"><img src="{{asset('/') }}frontend/images/icon/index1/label-featured.png" alt="label-featured"></span>
                                    <a href="" class="box-img"><img src="{{asset('/') }}frontend/images/media/index1/baner-floor1.jpg" alt="baner-floor"></a>
                                </div>
                                <div class="col-products tab-content">
                                    <!-- tab 1 -->
                                    <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                        <div class="owl-carousel"
                                            data-nav="true"
                                            data-dots="false"
                                            data-margin="0"
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":4}
                                            }'>
                                            @foreach($products as $product)
                                            @if ($product->category_id==14)
                                            <div class=" product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="{{route('productDetails',$product->id)}}"><img alt="product name" src="{{asset('backend/images/product/'.$product->product_image)}}"></a>
                                                        {{-- <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div> --}}
                                                        <a href="{{route('productDetails',$product->id)}}" ><button type="button" class="btn btn-cart"><span>Add to Cart</span></button></a>
                                                        {{-- <span class="product-item-label label-price">30% <span>off</span></span> --}}
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">{{$product->product_name}}</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">{{ number_format($product->product_price, 2, ',', ',') }}৳</span>
                                                                <span class="old-price">{{$product->product_price+100}} ৳</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div><!-- block -floor -products / floor :Fashion-->
                        <!-- block -floor -products / floor 2 :Sports-->
                        <div class="block-floor-products block-floor-products-opt1 floor-products2" id="floor0-2">
                            <div class="container">
                                <div class="block-title">
                                    <span class="title"><img alt="img"  src="{{asset('/') }}frontend/images/media/index1/floor2.png">Men's </span>
                                    <div class="links dropdown">
                                        <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                        </button>
                                        <!-- <div class="dropdown-menu" >
                                            <ul  >
                                                <li role="presentation" class="active"><a href="#floor2-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                                                <li role="presentation"><a href="#floor2-2"  role="tab" data-toggle="tab">Most Viewed </a></li>
                                                <li role="presentation"><a href="#floor2-3"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                                <li role="presentation"><a href="#floor2-4"  role="tab" data-toggle="tab">Tennis            </a></li>
                                                <li role="presentation"><a href="#floor2-5"  role="tab" data-toggle="tab">Football           </a></li>
                                                <li role="presentation"><a href="#floor2-6"  role="tab" data-toggle="tab">Swimming            </a></li>
                                                <li role="presentation"><a href="#floor2-7"  role="tab" data-toggle="tab">Climbing</a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <div class="actions">
                                        <a href="#floor0-1" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                        <a href="#floor0-3" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <!-- Banner -->
                                <div class="block-banner-floor">
                                    
                                    <div class="col-sm-6">
                                        <a href="" class="box-img"><img src="{{asset('/') }}frontend/images/media/index1/banner2-1.jpg" alt="banner"></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="" class="box-img"><img src="{{asset('/') }}frontend/images/media/index1/banner2-2.jpg" alt="banner"></a>
                                    </div>
                                    
                                    </div><!-- Banner -->
                                    <div class="block-content">
                                        <div class="col-banner">
                                            <span class="label-featured"><img src="{{asset('/') }}frontend/images/icon/index1/label-featured.png" alt="label-featured"></span>
                                            <a href="" class="box-img"><img src="{{asset('/') }}frontend/images/media/index1/baner-floor2.jpg" alt="baner-floor"></a>
                                        </div>
                                        <div class="col-products tab-content">
                                            <!-- tab 1 -->
                                            <div class="tab-pane active in  fade " id="floor2-1" role="tabpanel">
                                                <div class="owl-carousel"
                                                    data-nav="true"
                                                    data-dots="false"
                                                    data-margin="0"
                                                    data-responsive='{
                                                    "0":{"items":1},
                                                    "420":{"items":2},
                                                    "600":{"items":3},
                                                    "768":{"items":3},
                                                    "992":{"items":3},
                                                    "1200":{"items":4}
                                                    }'>
                                                    @foreach($products as $product)
                                                    @if ($product->category_id==15)
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                
                                                                <a class="product-item-img" href="{{route('productDetails',$product->id)}}"><img alt="product name" src="{{asset('backend/images/product/'.$product->product_image)}}"></a>
                                                                {{-- <div class="product-item-actions">
                                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                                </div> --}}
                                                                <a href="{{route('productDetails',$product->id)}}" ><button type="button" class="btn btn-cart"><span>Add to Cart</span></button></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">{{$product->product_name}}</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">{{ number_format($product->product_price, 2, ',', ',') }}৳</span>
                                                                        <span class="old-price">{{$product->product_price+100}} ৳</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div><!-- block -floor -products / floor :Sports-->
                        </div>
                    </main>
                    @endsection