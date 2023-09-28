<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    

/** @var \Illuminate\Cache\CacheManager $cache */

/**
 * @var \Illuminate\Support\Facades\Cache $cache
 */

    //$cache = (app()->make('cache'));
//    $cache->put('test', 123);
    //dd($cache->get('test', 'default'));
//    $cache = app('cache');
//    $cache = cache();
//    dd($cache->get('test', 'default'));
//    $cache = App::make('cache')->get('test');
      $cache = Cache::get('test', 'default');
      dd($cache);
        
    return view('welcome');
});
