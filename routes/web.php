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
// use JavaScript;
// use App\Models\User;
// Route::get('/', function () {
//     JavaScript::put([
//         'foo' => 'bar',
//         'user' => User::first(),
//         'age' => 29
//     ]);

//     return view('welcome');
// });

Route::get('/', 'LandingController@index');

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::resource('tasks', 'TaskController', [
        'only' => [
            'index', 'store', 'update'
        ]
    ]);

});
