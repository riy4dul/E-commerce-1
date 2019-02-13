<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

Auth::routes();


// =================Frontend=================
//Route::get('/', 'frontend\EbazzarbdController@index');





Route::group(['namespace' => 'frontend'], function() {
    Route::get('/', 'EbazzarbdController@index');


Route::post('product-search','EbazzarbdController@productSearch')->name('productSearch');


//==========Add to cart================
Route::get('product-details/{id}','EbazzarbdController@productDetail')->name('productDetails');
Route::post('product-add-cart','CartController@addToCart')->name('productAddToCart');
Route::get('product-cart','CartController@showCart')->name('productCart');
Route::post('cart-update','CartController@updateCart')->name('cartUpdate');
Route::get('cart-delete/{id}','CartController@destroy')->name('deleteCartItem');

Route::get('/checkout','checkoutController@index')->name('checkOut');
Route::get('checkout-shiping','checkoutController@shippingForm')->name('checkoutShiping');
Route::post('shipping-info-save','checkoutController@saveShippingInfo')->name('shippingSubmit');
Route::get('checkout-payment','checkoutController@paymentForm')->name('checkoutPayment');
Route::post('new-order','checkoutController@newOrder')->name('newOrder');
Route::get('order-complete','checkoutController@completeOrder')->name('completeOrder');

//========================Customer login register===========
Route::post('/customer-sing-up','checkoutController@customerSingup')->name('customerSingUp');
Route::post('new-customer-singup','checkoutController@newCustomerSingUp')->name('newCustomerSingUp');
Route::post('customer-login','checkoutController@customerLoginCheck')->name('customerLogin');
Route::get('new-customer-page','checkoutController@newCustomerLogin')->name('newCustomerLogin');
Route::post('new-customer-save','checkoutController@newCustomerLoginCheck')->name('newCustomerLoginCheck');
Route::post('customer-logout','checkoutController@customerLogout')->name('customerLogout');

//========================Category wise product show===========
Route::get('category-wise-product/{id}','EbazzarbdController@categoryProduct')->name('categoryProduct');

    // Route::get('/career/{id}', 'HomeController@careerDetail');
	//Route::get('pagenotfound', ['as' => 'notfound', 'uses' => 'EbazzarbdController@pagenotfound']);
    // Route::get('pagenotfound', function () {
    //     return redirect()->back();
	//});
});


// =================Backend=================
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>'auth' , 'namespace' => 'backend'], function(){
	
	// Route::get('order','OrderController@index')->name('reservation.index');
	Route::get('order','OrderController@index');

	//==============Category==============
	Route::get('category-list','CategoryController@index')->name('categoryList');
	Route::get('category-add','CategoryController@create');
	Route::get('category-add-sub','CategoryController@createsub');
	Route::post('category-save','CategoryController@store')->name('categoryStore');
	Route::POST('category-delete/{id}','CategoryController@destroy')->name('category-destroy');
	
	//==============Product==============
	Route::get('product-list','ProductController@show')->name('productList');
	Route::post('product-save','ProductController@store')->name('productStore');
	Route::post('product-update','ProductController@update')->name('productUpdate');
	Route::get('product-add','ProductController@create')->name('productAdd');
	Route::get('product-edit/{id}','ProductController@edit')->name('productEdit');
	Route::post('product-delete/{id}','ProductController@destroy')->name('productDelete');
	//Route::POST('category-delete/{id}','CategoryController@destroy')->name('category-destroy');

	//==============Order==============
	Route::get('all-order','OrderController@allOrder')->name('allOrder');
	Route::get('order-detail/{id}','OrderController@orderDetail')->name('orderDetail');
	Route::get('order-confirmed/{id}','OrderController@orderConfirmed')->name('orderConfirmed');
	Route::get('shipping-confirmed/{id}','OrderController@shippingConfirmed')->name('shippingConfirmed');
	Route::get('order-invoice-download/{id}','OrderController@orderInvoiceDownload')->name('orderInvoiceDownload');

});