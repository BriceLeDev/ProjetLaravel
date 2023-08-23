<?php

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',function (){
   return 'Voici mon blog';
});*/



Route::get('/Monblog',[\App\Http\Controllers\blogControle::class,'index'])->name('Monblog');

Route::get('/{slug}-{id}',[\App\Http\Controllers\blogControle::class,'show'])->where([
    'id'=>'[0-9]',
    'slug'=>'[a-z0-9\-]+'
])->name('article');
Route::get('/client',[\App\Http\Controllers\ClientControl::class,'client']);
Route::post('/client',[\App\Http\Controllers\ClientControl::class,'clientStore']);
Route::get('/edit/{UnClient}',[\App\Http\Controllers\ClientControl::class,'clientEdit'])->name('editer');
Route::post('/edit/{UnClient}',[\App\Http\Controllers\ClientControl::class,'clientUpdate'])->name('update');

