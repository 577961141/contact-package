<?php
/**
 *
 * @author weirui
 * @date 2021-10-12
 */

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// 指定命名空间
Route::group(['namespace' => 'Bitfumes\Contact\Http\Controllers'], function (){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});





