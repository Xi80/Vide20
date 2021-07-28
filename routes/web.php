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

Route::get('/', function () {
    return view('index',['version'=>'1.3.0',
        'topPicture'=>'img/top.png',
        'updateHistory'=>'なし',
        'items'=>[
            ['name'=>'test1','link'=>'/test1','desc'=>'テストだよ1','lastUpdate'=>'2021.07.28'],
            ['name'=>'test2','link'=>'/test2','desc'=>'テストだよ2','lastUpdate'=>'2021.07.27'],
            ['name'=>'test3','link'=>'/test3','desc'=>'テストだよ3','lastUpdate'=>'2021.07.26'],
        ]]);
});
