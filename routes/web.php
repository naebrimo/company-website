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

/**
 *      Sitemap
 *
 *      #root
 *          - index
 *          - our-partners
 *          - who-we-are
 *          - what-we-do
 *          - contact-us
 *
 *      #root->careers
 *          - careers
 *          - application-form
 *
 *      #root->dashboard
 *          - index
 *          - login
 *          - logout
 *          - register (disabled)
 */

/**
 * This is for the website proper views
 */

Route::prefix('/')->group(function(){
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/our-partners/{partner?}', 'IndexController@ourPartners')->name('index.our-partners');
    Route::get('/who-we-are/{section?}', 'IndexController@whoWeAre')->name('index.who-we-are');
    Route::get('/what-we-do/{services?}', 'IndexController@whatWeDo')->name('index.what-we-do');
    Route::get('/contact-us', 'IndexController@contactUs')->name('index.contact-us');
});

/**
 * This is for the career views
 */

Route::prefix('/career')->group(function(){
    Route::get('/', 'Career\IndexController@index')->name('index.career.index');
    Route::get('/application-form', 'Career\IndexController@applicationForm')->name('index.career.application-form');
});

/**
 * This is for the dashboard views
 */

Route::prefix('/dashboard')->group(function(){
    Route::get('/', 'Dashboard\IndexController@index')->name('index.dashboard.index');
    Route::get('/login', 'Dashboard\LoginController@showLoginForm')->name('index.dashboard.login');
    Route::match(['get', 'post'], '/logout', 'Dashboard\LoginController@logout')->name('index.dashboard.logout');
    Route::post('/login', 'Dashboard\LoginController@login');

    // Route::get('register', 'Dashboard\RegisterController@showRegistrationForm')->name('dashboard.register');
    // Route::post('register', 'Dashboard\RegisterController@register');

    Route::get('password/reset', 'Dashboard\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/email', 'Dashboard\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Dashboard\ResetPasswordController@showResetForm');
    Route::post('password/reset', 'Dashboard\ResetPasswordController@reset');
});
