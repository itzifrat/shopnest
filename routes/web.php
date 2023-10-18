<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Artisan;
    use App\Http\Controllers\FrontendController;
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\HomeController;
    use Illuminate\Support\Facades\Auth;


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


        return view('Welcome');
    });


    Auth::routes(['register'=>false]);

    Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');




    Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

        Route::get('/', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
    });


