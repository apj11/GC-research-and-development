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

//Route::get('welcome', function () {
//    return view('welcome');
//});

Route::resource('/','Frontend\IndexController');
//Route::resource('login/{provider}','Frontend\Auth\RegisterController')->name('frontend.index');
Route::resource('abouts','Frontend\AboutController');
Route::resource('events','Frontend\EventController');
Route::resource('galleries','Frontend\GalleryController');
Route::resource('contacts','Frontend\ContactController');
Route::resource('products','Frontend\ProductController');
Route::resource('comments','Frontend\CommentController');
Route::resource('productdetails','Frontend\ProductdetailController');
Route::resource('blogs','Frontend\BlogController');
Route::resource('/blogdetails','Frontend\BlogdetailController');


Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');



//Route::get('login/{provider}', 'SocialController@redirect');
//    Route::get('/logins','Frontend\Auth\LoginController@showLoginForm')->name('frontend.index');
//    Route::post('/logins','Frontend\Auth\LoginController@login')->name('login.frontend.store');
//    Route::get('/logouts','Frontend\Auth\LoginController@logout')->name('frontend.logout');


//Route::post('/frontend-stor','Frontend\Auth\LoginController@login')->name('test.store');

    Route::group(['middleware' => ['auth:admin']], function() {
    Route::get('/admin','HomeController@index')->name('home');

    Route::resource('/about','Admin\AboutController');
    Route::get('/about/delete/{id}','Admin\AboutController@destroy')->name('about.destroy');

    Route::resource('/award','Admin\AwardController');
    Route::get('/award/delete/{id}','Admin\AwardController@destroy')->name('award.destroy');

    Route::resource('/service','Admin\ServiceController');

        Route::resource('/social','Admin\SocialController');
        Route::get('/social/delete/{id}','Admin\SocialController@destroy')->name('social.destroy');


        Route::resource('/userdetails','Admin\UserController');

        Route::resource('/comment','Admin\CommentController');
        Route::post('/changeStatus','Admin\CommentController@changeStatus');
        Route::get('/comment/delete/{id}','Admin\CommentController@destroy')->name('comment.destroy');


    Route::resource('/gallery','Admin\GalleryController');
    Route::get('/gallery/delete/{id}','Admin\GalleryController@destroy')->name('gallery.destroy');

    Route::resource('/contact','Admin\ContactController');
    Route::get('/contact/delete/{id}','Admin\ContactController@destroy')->name('contact.destroy');

    Route::resource('/productdetail','Admin\ProductdetailController');
    Route::get('/productdetail/delete/{id}','Admin\ProductdetailController@destroy')->name('productdetail.destroy');


    Route::resource('/blog','Admin\BlogController');
    Route::get('/blog/delete/{id}','Admin\BlogController@destroy')->name('blog.destroy');


    Route::resource('/category','Admin\CategoryController');
    Route::get('/category/delete/{id}','Admin\CategoryController@destroy')->name('category.destroy');

    Route::resource('/partner','Admin\PartnerController');
    Route::get('/partner/delete/{id}','Admin\PartnerController@destroy')->name('partner.destroy');


    Route::resource('/testimonial', 'Admin\TestimonialController');
    Route::get('/testimonial/delete/{id}','Admin\TestimonialController@destroy')->name('testimonial.destroy');

    Route::resource('/sponsor','Admin\SponsorController');


    Route::resource('themes','Admin\ThemesController');

});


Route::namespace('Admin\Auth')->group(function (){

    //login route
    Route::get('/login','LoginController@showLoginForm')->name('login');
    Route::post('/login','LoginController@login')->name('login.store');
    Route::get('/logout','LoginController@logout')->name('logout');

    //forget password
    Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::get('/password/email','ForgotPasswordController@sendLinkRequestForm')->name('password.email');

    //reset password
    Route::get('/password/reset{token}','ResetPasswordController@showResetForm')->name('password.reset');
    Route::get('/password/reset','ResetPasswordController@reset')->name('password.update');
});
