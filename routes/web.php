<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home', [
    'as' => 'home.index',
    'uses' => 'HomeController@index'
    ]);

//Login
Route::prefix('login')->group(function (){
    Route::get('/',[
        'as' => 'login.index',
        'uses' => 'LoginController@loginGet',
    ]);

    Route::post('/',[
        'as' => 'login.post',
        'uses' => 'LoginController@loginPost'
    ]);

    Route::get('/registerStd',[
        'as'=>'login.registerStdGet',
        'uses' =>'LoginController@registerStudentGet'
    ]);

    Route::post('/registerStd',[
        'as' => 'login.registerStdPost',
        'uses' => 'LoginController@registerStudentPost'
    ]);

    Route::get('/registerHr',[
        'as' => 'login.registerHrGet',
        'uses' => 'LoginController@registerHrGet'
    ]);

    Route::post('/registerHr',[
        'as' => 'login.registerHrPost',
        'uses' => 'LoginController@registerHrPost'
    ]);

});



//ADMIN
Route::prefix('admin')->group(function (){
    Route::get('/',function (){
        return view('admin.layout.layout');
    });


    //job
    Route::prefix('/job')->group(function (){
        Route::get('/',[
            'as' => 'job.index',
            'uses' => "JobController@index"
        ]);

        Route::get('/add',[
            'as' => 'job.addGet',
            'uses' => 'JobController@addGet'
        ]);

        Route::post('/add',[
            'as' => 'job.addPost',
            'uses' => 'JobController@addPost'
        ]);

        Route::get('/update/{id}',[
            'as' => 'job.updateGet',
            'uses' => 'JobController@updateGet'
        ]);

        Route::post('/update',[
            'as' => 'job.updatePost',
            'uses' => 'JobController@updatePost'

        ]);

        Route::get('/delete/{id}',[
            'as' => 'job.delete',
            'uses' => 'JobController@delete'
        ]);

    });

    //position
    Route::prefix('position')->group(function (){
        Route::get('/',[
            'as' => 'position.index',
            'uses' => "PositionController@index"
        ]);

        Route::get('/add',[
            'as' => 'position.addGet',
            'uses' => 'PositionController@addGet'
        ]);

        Route::post('/add',[
            'as' => 'position.addPost',
            'uses' => 'PositionController@addPost'
        ]);

        Route::get('/update/{id}',[
            'as' => 'position.updateGet',
            'uses' => 'PositionController@updateGet'
        ]);

        Route::post('/update',[
            'as' => 'position.updatePost',
            'uses' => 'PositionController@updatePost'

        ]);

        Route::get('/delete/{id}',[
            'as' => 'position.delete',
            'uses' => 'PositionController@delete'
        ]);

    });

    //role
    Route::prefix('/role')->group(function (){

        Route::get('/',[
            'as' => 'role.index',
            'uses' => "RoleController@index"
        ]);

        Route::get('/add',[
            'as' => 'role.addGet',
            'uses' => 'RoleController@addGet'
        ]);

        Route::post('/add',[
            'as' => 'role.addPost',
            'uses' => 'RoleController@addPost'
        ]);

        Route::get('/update/{id}',[
            'as' => 'role.updateGet',
            'uses' => 'RoleController@updateGet'
        ]);

        Route::post('/update',[
            'as' => 'role.updatePost',
            'uses' => 'RoleController@updatePost'

        ]);

        Route::get('/delete/{id}',[
            'as' => 'role.delete',
            'uses' => 'RoleController@delete'
        ]);
    });

    //account
    Route::prefix('/account')->group(function (){

        Route::get('/',[
            'as' => 'account.index',
            'uses' => 'AccountController@index'
        ]);

        Route::get('/detail{id}',[
           'as'=>'account.detail',
           'uses' => 'AccountController@detail'
        ]);

        Route::get('/add',[
            'as' => 'account.addGet',
            'uses' => 'AccountController@addGet'
        ]);

        Route::post('/add',[
            'as' => 'account.addPost',
            'uses' => 'AccountController@addPost'
        ]);

        Route::get('/update/{id}',[
            'as' => 'account.updateGet'
        ]);

        Route::post('/update',[
            'as' => 'account.updatePost'
        ]);

        Route::get('/delete/{id}',[
            'as' => 'account.delete'
        ]);
    });


});
