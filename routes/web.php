<?php

use App\Http\Livewire\Action;
use App\Http\Livewire\Customer;
use App\Http\Livewire\Post;
use App\Http\Livewire\User;
use App\Http\Livewire\Home;
use App\Http\Livewire\Form;
use App\Http\Livewire\Product;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Create;
use App\Http\Livewire\Docpost;
use App\Http\Livewire\Images;
use App\Http\Livewire\Students;
use App\Http\Livewire\Uploads;
use App\Http\Livewire\MainPage;

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

Route::get('/',MainPage::class);

/*  المسار متبوعا ب اسم الصنف
*::get الطريقة method من نوع get
*/
Route::get('/post',Post::class);
//inline component مكون livewire
Route::get('/user',User::class);
/*مكون livewire تمرير المعاملات
* حتي يصبح المعامل أختياري يجب كتابة علامة أستفهام بعد أسم المعامل
*/
Route::get('/home/{name?}',Home::class);
Route::get('/form',Form::class);
Route::get('/action',Action::class);
Route::get('/product',Product::class);
Route::get('/home/{name?}',Home::class);
Route::get('/contact',Contact::class);
Route::get('/customers',Customer::class);
Route::get('/students',Students::class);
Route::get('/uploads',Uploads::class);
Route::get('/upload-images',Images::class);
Route::get('/create',Create::class);
Route::get('/doc_post',Docpost::class);