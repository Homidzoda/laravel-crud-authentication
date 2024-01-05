<?php
use \App\Http\Controllers\Admin\TeacherController;

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

/*
 * @author Batuhan Batal <batuhanbatal@gmail.com>
 */

Route::get('/', function () {
    echo "<a href='/login'>Click to Go to Login Page</a>";
});


// Admin Routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin', 'middleware' => 'auth'], function(){
    // Index
    Route::get('/',                      'HomeController@index')->name('.index');
    // User Index
    Route::get('/users',                 'UsersController@index')->name('.users.index');
    // User Create
    Route::get('/users/create',          'UsersController@create')->name('.users.create');
    Route::post('/users/store',          'UsersController@store')->name('.users.store');
    // User Edit
    Route::get('/users/edit/{id}',       'UsersController@edit')->name('.users.edit');
    Route::put('/users/update/{id}',     'UsersController@update')->name('.users.update');
    // User Delete
    Route::delete('/users/delete/{id}',  'UsersController@delete')->name('.users.delete');
});


// Auth Routes
Route::group(['namespace' => 'Auth', 'as' => 'auth'], function(){
    // Login Page
    Route::get('/login',     'LoginController@showLoginForm')->name('.login');
    // Login Post
    Route::post('/login',    'LoginController@login')->name('.login');
    // Logout
    Route::get('/logout',    'LoginController@logout')->name('.logout');
});





Route::get('admin/teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('admin/teachers/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('admin/teachers/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('admin/teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
//Route::put('admin/teachers/update/{id}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('admin/teachers/destroy/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

Route::post('admin/teachers/update/{id}', [TeacherController::class, 'update'])->name('teacher.update');


Route::get('/test', function () {
    return 'Test Route';
});
