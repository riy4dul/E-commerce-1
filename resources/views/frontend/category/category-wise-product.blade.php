@extends('frontend.layout.master')
@section('content')
<main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                {{-- <ol class="breadcrumb no-hide">
                    <li><a href="#">Home    </a></li>
                    <li><a href="#">Electronics    </a></li>
                    <li class="active">Machine Pro</li>
                </ol> --}}
                <!-- Block  Breadcrumb-->

                <div class="row">

                    <!-- Main Content -->
                    <div class="col-md-9 col-md-push-3  col-main">

                        <!-- images categori -->
                       {{--  <div class="category-view">
                            <div class="owl-carousel " 
                                data-nav="true" 
                                data-dots="false" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <div class="item " >
                                   <a href="#"><img src="images/media/category-images1.jpg" alt="category-images"></a>
                                </div>
                                <div class="item " >
                                    <a href="#"><img src="images/media/category-images2.jpg" alt="category-images"></a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- images categori -->

                        <!-- link categori -->
                       {{--  <ul class="category-links">
                            <li class="current-cate"><a href="#">All Products</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                            <li><a href="#">Scaves</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Blouses</a></li>
                        </ul> --}}
                        <!-- link categori -->

                        <!-- Toolbar -->
                        {{-- <div class=" toolbar-products toolbar-top">

                            <div class="btn-filter-products">
                                <span>Filter</span>
                            </div>

                            <h1 class="cate-title">Electronics</h1>

                            <div class="modes">
                                <strong  class="label">View as:</strong>
                                <strong  class="modes-mode active mode-grid" title="Grid">
                                    <span>grid</span>
                                </strong>
                                <a  href="Category2.html" title="List" class="modes-mode mode-list">
                                    <span>list</span>
                                </a>
                            </div>
                            <!-- View as -->
                           
                            <div class="toolbar-option">

                                <div class="toolbar-sorter ">
                                    <label    class="label">Short by:</label>
                                    <select class="sorter-options form-control" >
                                        <option selected="selected" value="position">Position</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                    <a href="#" class="sorter-action"></a>
                                </div>
                                <!-- Short by -->

                                <div class="toolbar-limiter">
                                    <label   class="label">
                                        <span>Show:</span>
                                    </label>
                                   
                                    <select class="limiter-options form-control" >
                                        <option selected="selected" value="9">Show 18</option>
                                        <option value="15">Show 15</option>
                                        <option value="30">Show 30</option>
                                    </select>
                                    
                                </div>
                                <!-- Show per page -->

                            </div>

                            <ul class="pagination">
                                <li class="action">
                                    <a href="#">
                                        <span><i aria-hidden="true" class="fa fa-angle-left"></i></span>
                                    </a>
                                </li>
                                
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li class="action">
                                    <a href="#">
                                        <span><i aria-hidden="true" class="fa fa-angle-right"></i></span>
                                    </a>
                                </li>
                            </ul>

                        </div> --}}
                        <!-- Toolbar -->

                        <!-- List Products -->
                        <div class="products  products-grid">
                            <ol class="product-items row">
                                
                                @foreach($categoryProducts as $categoryProduct)
                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="{{route('productDetails',$categoryProduct->id)}}" class="product-item-img"><img src="{{asset('backend/images/product/'.$categoryProduct->product_image)}}" alt="product name"></a>
                                                {{-- <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div> --}}
                                                <a href="{{route('productDetails',$categoryProduct->id)}}" ><button type="button" class="btn btn-cart"><span>Add to Cart</span></button></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">{{$categoryProduct->product_name}}</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">{{ number_format($categoryProduct->product_price, 2, ',', ',') }} ৳</span>
                                                        <span class="old-price">{{$categoryProduct->product_price+59}}</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>
                                @endforeach

                                {{-- 
								<li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Nano Washing Machine</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>


                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product3.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Holdhand Cleaning Machine</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>

                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product4.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Advanced Dark Blue Coast</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>

                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product5.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Edge A3 Smart Phone</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>

                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product6.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Silver Drop Camera</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>

                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product7.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Multi-Directions Camera</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>

                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product8.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Ag On Board Camera</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>

                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product9.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">iZon White Silver Camera</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>

                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product10.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Microwave Compared</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>

                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product11.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Perfect Device For Kitchen</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>

                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product12.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Holdhand Cleaning Machine</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>
                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product13.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Nano Internet Smart TV</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>
                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product14.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Super Thin Internet TV</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>
                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product15.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">SamSung Led TV</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>
                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product16.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Black Electric Teapot</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>
                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product17.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Luxury Sleeping Light</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>
                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product18.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Pogy Pretty Iron Chair</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li> --}}

                                
                            </ol><!-- list product -->
                        </div> <!-- List Products -->

                        <!-- Toolbar -->
                        {{-- <div class=" toolbar-products toolbar-bottom">

                            <div class="modes">
                                <strong  class="label">View as:</strong>
                                <strong  class="modes-mode active mode-grid" title="Grid">
                                    <span>grid</span>
                                </strong>
                                <a  href="Category2.html" title="List" class="modes-mode mode-list">
                                    <span>list</span>
                                </a>
                            </div><!-- View as -->
                           
                            <div class="toolbar-option">

                                <div class="toolbar-sorter ">
                                    <label    class="label">Short by:</label>
                                    <select class="sorter-options form-control" >
                                        <option selected="selected" value="position">Product name</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                    <a href="#" class="sorter-action"></a>
                                </div><!-- Short by -->

                                <div class="toolbar-limiter">
                                    <label   class="label">
                                        <span>Show:</span>
                                    </label>
                                   
                                    <select class="limiter-options form-control" >
                                        <option selected="selected" value="9"> Show 18</option>
                                        <option value="15">Show 15</option>
                                        <option value="30">Show 30</option>
                                    </select>
                                    
                                </div><!-- Show per page -->

                            </div>

                            <ul class="pagination">
                               
                                
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li class="action action-next"> 
                                    <a href="#">
                                        Next <span><i aria-hidden="true" class="fa fa-angle-double-right"></i></span>
                                    </a>
                                </li>
                            </ul>

                        </div> --}}
                        <!-- Toolbar -->

                    </div>
                    <!-- Main Content -->
                    
                    <!-- Sidebar -->
                    <div class="col-md-3 col-md-pull-9  col-sidebar">

                        <!-- Block  bestseller products-->
                        <div class="block-sidebar block-sidebar-categorie">
                            <div class="block-title">
                                <strong>PRODUCT TYPES</strong>
                            </div>
                            <div class="block-content">
                                <ul class="items">
                                    <li class="parent">
                                        <a href="#">Dress</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li >
                                                <a href="#">subcategory 1</a>
                                                
                                            </li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Bags</a>
                                    </li>
                                    <li class="parent">
                                        <a href="#">Cost &amp; Jackets</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#">Beauty</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#">Jewellery</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#">Nightwear</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#">Jumpers &amp; Cardigans</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                            <li><a href="#">subcategory 1</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- Block  bestseller products-->
							

                       <!-- block filter products -->
                        <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                            <div class="close-filter-products"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <div class="block-title">
                                <strong>FILTER SELECTION</strong>
                            </div>
                            <div class="block-content">

                                <!-- Filter Item  categori-->
                                <div class="filter-options-item filter-options-categori">
                                    <div class="filter-options-title">Categories</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Tops <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Network & Computer <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Batteries & Chargers <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Dresses <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Knitted <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Pants <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Best selling <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Headphone & Headset <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                        </ol>
                                    </div>
                                </div><!-- Filter Item  categori-->

                                <!-- filter price -->
                                <div class="filter-options-item filter-options-price">
                                    <div class="filter-options-title">Price</div>
                                    <div class="filter-options-content">
                                        <div class="slider-range">
                                            
                                            <div id="slider-range" ></div>
                                            
                                            <div class="action">
                                                <span class="price">
                                                    <span>Range:</span>
                                                    $<span id="amount-left"></span>
                                                    -
                                                    $<span id="amount-right"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <ol class="items">
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>$20 - $50 <span class="count">(20)</span>  </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>$50 - $100 <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>$100 - $250 <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                           
                                        </ol>
                                    </div>
                                </div><!-- filter price -->

                                <!-- filter brad-->
                                <div class="filter-options-item filter-options-brand">
                                    <div class="filter-options-title">BRAND</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Channelo <span class="count">(20)</span>  </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Mamypokon <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Pamperson <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Pradano <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Pumano <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>AME <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                        </ol>
                                    </div>
                                </div><!-- Filter Item -->
{{-- 
                                <!-- filter color-->
                                <div class="filter-options-item filter-options-color">
                                    <div class="filter-options-title">COLOR</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #fca53c;"></span>          
                                                        <span class="count">(30)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #6b5a5c;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #000000;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #3063f2;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #f9334a;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #964b00;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #faebd7;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #e84c3d;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #fccacd;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                           
                                        </ol>
                                    </div>
                                </div>
                                <!-- Filter Item -->

                                <!-- Filter Item  size-->
                                <div class="filter-options-item filter-options-size">
                                    <div class="filter-options-title">SIZE</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>X <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>m <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>L <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>32 <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>36 <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>37 <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>X <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>m <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            
                                        </ol>
                                    </div>
                                </div>
                                <!-- Filter Item  size--> --}}

                            </div>
                        </div>
                        <!-- Filter -->

                        {{--  
                        <!-- block slide top -->
                        <div class="block-sidebar block-banner-sidebar">
                            <div class="owl-carousel" 
                                data-nav="false" 
                                data-dots="true" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <div class="item item1" >
                                   <img src="images/media/banner-sidebar1.jpg" alt="images">
                                </div>
                                <div class="item item2" >
                                   <img src="images/media/banner-sidebar1.jpg" alt="images">
                                </div>
                                <div class="item item3" >
                                   <img src="images/media/banner-sidebar1.jpg" alt="images">
                                </div>
                            </div>
                        </div>
                        <!-- block slide top -->

                        <!-- Block  bestseller products-->
                        <div class="block-sidebar block-sidebar-products">
                            <div class="block-title">
                                <strong>SPECIAL PRODUCTS</strong>
                            </div>
                            <div class="block-content">
                                <div class="product-item product-item-opt-1">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/floor5-1.jpg"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Security Camera Size Flared</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="70%" class="rating-result">
                                                            <span style="width:70%">
                                                                <span><span>70</span>% of <span>100</span></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn all-products">All products <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Block  bestseller products-->

                        <!-- Block  tags-->
                        <div class="block-sidebar block-sidebar-tags">
                            <div class="block-title">
                                <strong>product tags</strong>
                            </div>
                            <div class="block-content">
                                <ul>              
                                    <li><a href="#" class="lv2">actual</a></li>
                                    <li><a href="#" class="lv1">adorable</a></li>
                                    <li><a href="#" class="lv3">amaze</a></li>
                                    <li><a href="#" class="lv5">change</a></li>
                                    <li><a href="#" class="lv2">consider</a></li>
                                    <li><a href="#" class="lv1">delivery</a></li>
                                    <li><a href="#" class="lv1">Top</a></li>
                                    <li><a href="#" class="lv4">flexib</a></li>
                                    <li><a href="#" class="lv1">phenomenon </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Block  tags-->

                        <!-- block slide top -->
                        <div class="block-sidebar block-sidebar-testimonials">
                            <div class="block-title">
                                <strong>Testimonials</strong>
                            </div>
                            <div class="block-content">
                                <div class="owl-carousel" 
                                    data-nav="false" 
                                    data-dots="true" 
                                    data-margin="0" 
                                    data-items='1' 
                                    data-autoplayTimeout="700" 
                                    data-autoplay="true" 
                                    data-loop="true">
                                    <div class="item " >
                                       <strong class="name">Roverto & Maria</strong>
                                       <div class="avata">
                                            <img src="images/media/avata.jpg" alt="avata">
                                       </div>
                                       <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                       </div>
                                    </div>
                                    <div class="item " >
                                       <strong class="name">Roverto & Maria</strong>
                                       <div class="avata">
                                            <img src="images/media/avata.jpg" alt="avata">
                                       </div>
                                       <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                       </div>
                                    </div>
                                    <div class="item " >
                                       <strong class="name">Roverto & Maria</strong>
                                       <div class="avata">
                                            <img src="images/media/avata.jpg" alt="avata">
                                       </div>
                                       <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- block slide top --> --}}


                    </div>
                    <!-- Sidebar -->

                    
                    
                </div>
            </div>


		</main>
@endsection