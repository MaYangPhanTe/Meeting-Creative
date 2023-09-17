<?php

use App\Http\Controllers\MemberController;
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
Route::view('/welcome', 'welcome');

Route::view('/', 'member.index');

Route::view('/about', 'member.about');

Route::view('/web-design', 'member.webDesign');

Route::view('/design-graphic', 'member.designGraphic');

Route::view('/digital-marketing', 'member.digitalMarketing');

Route::view('/network', 'member.network');

Route::view('/ourwork', 'member.ourwork');

Route::view('/ourteam', 'member.ourteam');