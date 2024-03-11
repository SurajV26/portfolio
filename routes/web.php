<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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
    return view('index');
});
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/project', function () {
//     return view('project');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::resource('portfolio', PortfolioController::class);
Route::post('portfolio/html_mail', [PortfolioController::class, 'html_mail'])->name('portfolio.html_mail');