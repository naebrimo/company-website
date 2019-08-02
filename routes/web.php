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

    #Redirect routes
    Route::redirect('/login', '/dashboard/login');
    Route::redirect('/logout', '/dashboard/logout');
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
    Route::get('/', 'Dashboard\IndexController@index')->name('index.dashboard');

    Route::resource('/pages','Dashboard\PageController', [
        'names' => [
            'index' => 'index.dashboard.pages',
            'store' => 'index.dashboard.pages.store',
            'create' => 'index.dashboard.pages.create',
            'show' => 'index.dashboard.pages.show',
            'update' => 'index.dashboard.pages.update',
            'destroy' => 'index.dashboard.pages.destroy',
            'edit' => 'index.dashboard.pages.edit',
        ]
    ]);

    Route::resource('/carousels','Dashboard\CarouselController', [
        'names' => [
            'index' => 'index.dashboard.carousels',
            'store' => 'index.dashboard.carousels.store',
            'create' => 'index.dashboard.carousels.create',
            'show' => 'index.dashboard.carousels.show',
            'update' => 'index.dashboard.carousels.update',
            'destroy' => 'index.dashboard.carousels.destroy',
            'edit' => 'index.dashboard.carousels.edit',
        ]
    ]);

    Route::resource('/navlinks','Dashboard\NavlinkController', [
        'names' => [
            'index' => 'index.dashboard.navlinks',
            'store' => 'index.dashboard.navlinks.store',
            'create' => 'index.dashboard.navlinks.create',
            'show' => 'index.dashboard.navlinks.show',
            'update' => 'index.dashboard.navlinks.update',
            'destroy' => 'index.dashboard.navlinks.destroy',
            'edit' => 'index.dashboard.navlinks.edit',
        ]
    ]);

    Route::resource('/articles','Dashboard\ArticleController', [
        'names' => [
            'index' => 'index.dashboard.articles',
            'store' => 'index.dashboard.articles.store',
            'create' => 'index.dashboard.articles.create',
            'show' => 'index.dashboard.articles.show',
            'update' => 'index.dashboard.articles.update',
            'destroy' => 'index.dashboard.articles.destroy',
            'edit' => 'index.dashboard.articles.edit',
        ]
    ]);

    Route::resource('/career-postings','Dashboard\CareerController', [
        'names' => [
            'index' => 'index.dashboard.career-postings',
            'store' => 'index.dashboard.career-postings.store',
            'create' => 'index.dashboard.career-postings.create',
            'show' => 'index.dashboard.career-postings.show',
            'update' => 'index.dashboard.career-postings.update',
            'destroy' => 'index.dashboard.career-postings.destroy',
            'edit' => 'index.dashboard.career-postings.edit',
        ]
    ]);

    Route::resource('/corporate-news','Dashboard\CorporateNewsController', [
        'names' => [
            'index' => 'index.dashboard.corporate-news',
            'store' => 'index.dashboard.corporate-news.store',
            'create' => 'index.dashboard.corporate-news.create',
            'show' => 'index.dashboard.corporate-news.show',
            'update' => 'index.dashboard.corporate-news.update',
            'destroy' => 'index.dashboard.corporate-news.destroy',
            'edit' => 'index.dashboard.corporate-news.edit',
        ]
    ]);

    Route::get('/login', 'Dashboard\LoginController@showLoginForm')->name('index.dashboard.login');
    Route::get('password/reset', 'Dashboard\ForgotPasswordController@showLinkRequestForm')->name('dashboard.password.request');
    Route::get('password/reset/{token}', 'Dashboard\ResetPasswordController@showResetForm')->name('dashboard.password.reset');
    Route::match(['get', 'post'], '/logout', 'Dashboard\LoginController@logout')->name('index.dashboard.logout');
    Route::post('/login', 'Dashboard\LoginController@login');

    Route::post('password/email', 'Dashboard\ForgotPasswordController@sendResetLinkEmail')->name('dashboard.password.email');
    Route::post('password/reset', 'Dashboard\ResetPasswordController@reset')->name('dashboard.password.update');

    // Route::get('register', 'Dashboard\RegisterController@showRegistrationForm')->name('dashboard.register');
    // Route::post('register', 'Dashboard\RegisterController@register');
});
