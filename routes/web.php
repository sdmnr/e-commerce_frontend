<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::any('/', function () {
    $pagetype="index";
    return view('pages.index')->with(['pagetype'=>$pagetype]);
});

Route::any('/index', function () {
    $pagetype="index";
    return view('pages.index')->with(['pagetype'=>$pagetype]);
});


Route::any('/register', function () {
    $pagetype="register";
    return view('pages.register')->with(['pagetype'=>$pagetype]);
});

Route::get('/detail', function () {
    $pagetype="detail";
    return view('pages.detail')->with(['pagetype'=>$pagetype]);
});

Route::any('/customer-wishlist', function () {
    $pagetype="customer-wishlist";
    return view('pages.customer_wishlist')->with(['pagetype'=>$pagetype]);
});

Route::any('/customer-orders', function () {
    $pagetype="customer-orders";
    return view('pages.customer_orders')->with(['pagetype'=>$pagetype]);
});

Route::any('/customer-order', function () {
    $pagetype="customer-order";
    return view('pages.customer_order')->with(['pagetype'=>$pagetype]);
});

Route::any('/customer-account', function () {
    $pagetype="customer-account";
    return view('pages.customer_account')->with(['pagetype'=>$pagetype]);
});

Route::any('/contact', function () {
    $pagetype="contact";
    return view('pages.contact')->with(['pagetype'=>$pagetype]);
});

Route::any('/checkout5', function () {
    $pagetype="checkout5";
    return view('pages.checkout5')->with(['pagetype'=>$pagetype]);
});

Route::any('/checkout4', function () {
    $pagetype="checkout4";
    return view('pages.checkout4')->with(['pagetype'=>$pagetype]);
});

Route::any('/checkout3', function () {
    $pagetype="checkout3";
    return view('pages.checkout3')->with(['pagetype'=>$pagetype]);
});

Route::any('/checkout2', function () {
    $pagetype="checkout2";
    return view('pages.checkout2')->with(['pagetype'=>$pagetype]);
});

Route::any('/checkout1', function () {
    $pagetype="checkout1";
    return view('pages.checkout1')->with(['pagetype'=>$pagetype]);
});

Route::any('/category', function () {
    $pagetype="category";
    return view('pages.category')->with(['pagetype'=>$pagetype]);
});

Route::any('/basket', function () {
    $pagetype="basket";
    return view('pages.basket')->with(['pagetype'=>$pagetype]);
});

Route::any('/forgotPassword', function () {
    $pagetype="forgotPassword";
    return view('pages.forgotPassword')->with(['pagetype'=>$pagetype]);
});

Route::any('/forgotPassword2', function () {
    $pagetype="forgotPassword2";
    return view('pages.forgotPassword2')->with(['pagetype'=>$pagetype]);
});




