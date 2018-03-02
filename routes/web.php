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

    Route::get('/', function () {
        return view('welcome', ['sites' => 'https://laravelvalet.test']);
    });
    /*
     Route::get('/', function () {
        return view('welcome',['sites' => 'https://laravelvalet.test']);
    })->middleware('token');

    Route::get('user/{id}', function($id) {
        return 'user: '.$id;
    });

    //为命名路由生成 URL
    Route::get('user/profile',function () {
        // 通过路由名称生成 URL
        return 'URL: '.route('profile');
    })->name('profile');

    Route::get('user/{id}/profile', function ($id){
        $url = route('profile',['id' => 1]);
        return $url;
    })->name('profile');

    //路由前缀
    Route::prefix('admin')->group(function () {
        Route::get('users', function () {
            // Matches The "/admin/users" URL
        });
    });
    */

//子域名路由
    Route::domain('{pvp}.laravelvalet.test')->group(function () {
        //https://pvp.laravelvalet.test/user/1
        Route::get('/user/{id}', function ($pvp, $id) {
            return 'pvp: ' . $pvp . ' ,id: ' . $id;
        });
    });

    Route::get('/users/{user}', function (App\User $user) {
        dd($user);
    });

    Route::get('hello', function () {
        return "hello, welcome to my website \n Laravel5.6 for Powered By Valet.";
    });

    //https://laravelvalet.test/user/1
    Route::get('user/{id}', 'UserController@show');
    //Route::get('profile','UserController@show')->middleware('auth');

    Route::resource('posts', 'PostController');


    //声明资源路由时可以指定该路由处理的动作子集：
    Route::resource('post', 'PostController', [
        'only' =>
            ['index', 'show'],
    ]);

    Route::resource('post', 'PostController', [
        'except' =>
            ['create', 'store', 'update', 'destroy'],
    ]);