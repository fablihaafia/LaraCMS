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

use Modules\ThemeBusiness\Http\Controllers\FrontPagesController;
use Modules\ThemeBusiness\Http\Controllers\ServicePagesController;

Route::group(['prefix' => 'demo/business', 'as' => 'demo.business.'], function () { // @todo - Change prefix route name 'as' => 'demo.business.'
    Route::get( '/', [ FrontPagesController::class, 'index' ] )->name( 'index' );

    Route::group(['prefix' => 'service'], function () {
        Route::get( '', [ ServicePagesController::class, 'index' ] )->name( 'service' );
        Route::get( '{slug}', [ ServicePagesController::class, 'show' ] )->name( 'service.show' );
    });

    Route::get( '/about', [ FrontPagesController::class, 'about' ] )->name( 'about' );
    Route::get( '/blog', [ FrontPagesController::class, 'blog' ] )->name( 'blog' );
    Route::get( '/price', [ FrontPagesController::class, 'price' ] )->name( 'price' );
    Route::get( '/portfolio', [ FrontPagesController::class, 'portfolio' ] )->name( 'portfolio' );
    Route::get( '/contact', [ FrontPagesController::class, 'contact' ] )->name( 'contact' );
});
