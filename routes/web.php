<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CUController;


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
    return view('welcome');
});

Route::get('/practicum02', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/abouts', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticlesController::class, 'index']);



Route::get('/home', function () {
    return ('Selamat Datang');
});


Route::prefix('product')->group(function () {
    Route::get('/productlist1', function () {
    return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('/productlist2', function () {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('/productlist3', function () {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
    Route::get('/productlist4', function () {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});


Route::get('/news/news{id}', function ($id) {
    if ($id == 1 ){
        return redirect('https://www.educastudio.com/news');
    }
    else  {
        return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    }
});


Route::prefix('program')->group(function () {
    Route::get('/daftarprogram1', function () {
    return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('/daftarprogram2', function () {
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('/daftarprogram3', function () {
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});


Route::get('/about-us', function () {
    return redirect('https://www.educastudio.com/about-us');
});


Route::resource('contact-us', CUController::class);