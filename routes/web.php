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



Auth::routes();

// <<<<<<< HEAD
Route::group(['middleware' => ['auth','cekLevel:user']],function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/edukasi', function () {
    return view('edukasi');
});
Route::get('/artikel', function () {
    return view('artikel.artikel');
});
Route::get('/artikel2', function () {
    return view('artikel.artikel2');
});
Route::get('/artikel3', function () {
    return view('artikel.artikel3');
});
Route::get('/artikel4', function () {
    return view('artikel.artikel4');
});
Route::get('/artikel5', function () {
    return view('artikel.artikel5');
});
Route::get('/artikel6', function () {
    return view('artikel.artikel6');
});
// Route::get('/data', function () {
        //     return view('data.data');
        // });
        Route::get('/data', 'DataController@lihatData');
        Route::get('/data/{id}', 'SettingController@index');
        Route::get('/dataUser', 'DataController@data');
        Route::post('dataUser/{users}', 'DataController@store');
        Route::put('dataUser/{users}', 'DataController@update');
});
Route::get('/chat', 'ChatController@index');
Route::get('/chat_admin', 'ChatController@indexadmin');
Route::post('/send_pesan_user', 'ChatController@send_pesan_user');
Route::post('/send_pesan_admin', 'ChatController@send_pesan_admin');
Route::group(['middleware' => ['auth','cekLevel:admin']],function(){
    Route::get('/', 'HomeAdminController@index');
    Route::get('/tabelData', 'DataController@tabelData');
});
// =======
// Route::group(['middleware' => ['auth', 'cekLevel:user']], function () {
//     Route::get('/home', 'HomeController@index')->name('home');
//     Route::get('/', 'HomeController@index');
//     Route::get('/edukasi', function () {
//         return view('edukasi');
//     });
//     Route::get('/artikel', function () {
//         return view('artikel.artikel');
//     });
//     Route::get('/artikel2', function () {
//         return view('artikel.artikel2');
//     });
//     Route::get('/artikel3', function () {
//         return view('artikel.artikel3');
//     });
//     Route::get('/artikel4', function () {
//         return view('artikel.artikel4');
//     });
//     Route::get('/artikel5', function () {
//         return view('artikel.artikel5');
//     });
//     Route::get('/artikel6', function () {
//         return view('artikel.artikel6');
//     });
//     // Route::get('/data', function () {
//     //     return view('data.data');
//     // });
//     Route::get('/data', 'DataController@lihatData');
//     Route::get('/data/{id}', 'SettingController@index');
//     Route::get('/dataUser', 'DataController@data');
//     Route::post('dataUser/{users}', 'DataController@store');
//     Route::put('dataUser/{users}', 'DataController@update');
// });
// Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
//     Route::get('/', 'HomeAdminController@index');
//     Route::get('/tabelData', 'DataController@tabelData');
// >>>>>>> 57acd8876c6fd28138e3b9bdc011c72f2427dffa
//});
//});
