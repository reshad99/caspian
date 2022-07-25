<?php

use App\Http\Controllers\Admin\AboutDetailController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MusicVideoController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\SongController;
use Illuminate\Support\Facades\Route;


//Admin
Route::prefix('admin')->middleware('isLogout')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index');
    Route::get('logout', 'App\Http\Controllers\Admin\LoginController@logout');
    Route::get('dashboard', 'App\Http\Controllers\Admin\DashboardController@index');

    Route::resources([
        'artists' => ArtistController::class,
        'videos' => MusicVideoController::class,
        'events' => EventController::class,
        'categories' => BlogCategoryController::class,
        'blogs' => BlogController::class,
        'about-details' => AboutDetailController::class,
        'songs' => SongController::class,
        'reservations' => ReservationController::class,
    ]);


    Route::get('about', 'App\Http\Controllers\Admin\AboutController@index');
    Route::get('about/edit', 'App\Http\Controllers\Admin\AboutController@edit');
    Route::post('about-update', 'App\Http\Controllers\Admin\AboutController@post_edit');

    Route::get('privacy', 'App\Http\Controllers\Admin\PrivacyController@index');
    Route::get('privacy/edit', 'App\Http\Controllers\Admin\PrivacyController@edit');
    Route::post('privacy-update', 'App\Http\Controllers\Admin\PrivacyController@post_edit');

    Route::get('contact', 'App\Http\Controllers\Admin\ContactController@index');
    Route::get('contact/edit', 'App\Http\Controllers\Admin\ContactController@edit');
    Route::post('contact-update', 'App\Http\Controllers\Admin\ContactController@post_edit');

    Route::post('categories/search', 'App\Http\Controllers\Admin\BlogCategoryController@index');
    Route::post('about-details/search', 'App\Http\Controllers\Admin\AboutDetailController@index');
    Route::post('songs/search', 'App\Http\Controllers\Admin\SongController@index');
    Route::post('artists/search', 'App\Http\Controllers\Admin\ArtistController@index');
    Route::post('events/search', 'App\Http\Controllers\Admin\EventController@index');
    Route::post('videos/search', 'App\Http\Controllers\Admin\MusicVideoController@index');
    Route::post('categories/update', 'App\Http\Controllers\Admin\BlogCategoryController@update');

    Route::post('about-details/update', 'App\Http\Controllers\Admin\AboutDetailController@update');
    Route::post('songs/update', 'App\Http\Controllers\Admin\SongController@update');
    Route::post('events/update', 'App\Http\Controllers\Admin\EventController@update');
    Route::post('sliders/update', 'App\Http\Controllers\Admin\SliderController@update');
    Route::post('artists/update', 'App\Http\Controllers\Admin\ArtistController@update');
    Route::post('videos/update', 'App\Http\Controllers\Admin\MusicVideoController@update');

    Route::post('partners/update', 'App\Http\Controllers\Admin\PartnerController@update');

    Route::post('top-check', 'App\Http\Controllers\Admin\AjaxController@top_check');
    Route::post('load-about-details', 'App\Http\Controllers\Admin\AjaxController@load_data');
    Route::post('load-songs', 'App\Http\Controllers\Admin\AjaxController@load_data');
    Route::post('load-artists', 'App\Http\Controllers\Admin\AjaxController@load_data');
    Route::post('load-videos', 'App\Http\Controllers\Admin\AjaxController@load_data');
    Route::post('load-events', 'App\Http\Controllers\Admin\AjaxController@load_data');
    Route::post('load-partners', 'App\Http\Controllers\Admin\AjaxController@load_data');
    Route::post('load-categories', 'App\Http\Controllers\Admin\AjaxController@load_data');
    Route::post('seo-update', 'App\Http\Controllers\Admin\SeoController@seo_update');

    Route::resources([
        'partners' => 'App\Http\Controllers\Admin\PartnerController',
        'sliders' => 'App\Http\Controllers\Admin\SliderController',
    ]);

});

Route::prefix('admin')->middleware('isLogin')->group(function () {
    Route::get('login', 'App\Http\Controllers\Admin\LoginController@index');
    Route::post('login-try', 'App\Http\Controllers\Admin\LoginController@post');

});




//Front
Route::get('/', 'App\Http\Controllers\Front\IndexController@index');
Route::get('about', 'App\Http\Controllers\Front\AboutController@index');
Route::get('contact', 'App\Http\Controllers\Front\ContactController@index');
Route::post('contact', 'App\Http\Controllers\Front\ContactController@post');
Route::get('events', 'App\Http\Controllers\Front\EventController@index');
Route::get('blogs', 'App\Http\Controllers\Front\BlogController@index');
Route::get('artists', 'App\Http\Controllers\Front\ArtistController@index');
Route::get('artist/{slug}', 'App\Http\Controllers\Front\ArtistController@show');
Route::get('event/{slug}', 'App\Http\Controllers\Front\EventController@show');
Route::get('blog/{slug}', 'App\Http\Controllers\Front\BlogController@show');

Route::post('load-more', 'App\Http\Controllers\Front\AjaxController@load_more');

Route::get('/optimize', "App\Http\Controllers\ConfigController@optimize");
Route::get('/{lang}', 'App\Http\Controllers\Front\IndexController@lang');