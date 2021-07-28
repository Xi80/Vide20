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

Route::get('/test1', function () {
    return view('menu',
        [
        'itemName'=>'TEST',
            'version'=>'1.3.0',
            'menuName'=>'テストメニュー',
            'menuDesc'=>'テストのメニューです．<br>ここも改行が許容されるんだよ．',
            'items'=>[
                ['name'=>'テストだよ','picture'=>'img/img01.jpg','link' => url('testArticle'),'date'=>'2021.07.29','desc'=>'そうだよ，きっと．真のラスボスはあの人なんだよ．<br>実は改行もできるんだよ．'],
                ['name'=>'テストだよ','picture'=>'img/img01.jpg','link' => '/test','date'=>'2021.07.29','desc'=>'そうだよ，きっと．真のラスボスはあの人なんだよ．'],
                ['name'=>'テストだよ','picture'=>'img/img01.jpg','link' => '/test','date'=>'2021.07.29','desc'=>'そうだよ，きっと．真のラスボスはあの人なんだよ．'],
                ['name'=>'テストだよ','picture'=>'img/img01.jpg','link' => '/test','date'=>'2021.07.29','desc'=>'そうだよ，きっと．真のラスボスはあの人なんだよ．'],
                ['name'=>'テストだよ','picture'=>'img/img01.jpg','link' => '/test','date'=>'2021.07.29','desc'=>'そうだよ，きっと．真のラスボスはあの人なんだよ．'],
                ['name'=>'テストだよ','picture'=>'img/img01.jpg','link' => '/test','date'=>'2021.07.29','desc'=>'そうだよ，きっと．真のラスボスはあの人なんだよ．']
            ]

        ]);
});

Route::get('testArticle',function(){
    return view('article',[
        'articleName'=>'Z80でのリングバッファの実装', 'version'=>'1.3.0','articleDesc'=>'テスト用の記事です．<br>改行も使えます．',
            'articleDate'=>'2021.07.29',
            'articleBody'=>[
                [
                    'index'=>'これは見出し',
                    'body'=>'これは本文．<br>1,2,3．'
                ],
                [
                    'index'=>'これは見出し',
                    'body'=>'これは本文．<br>1,2,3．'
                ],
                [
                    'index'=>'これは見出し',
                    'body'=>'これは本文．<br>1,2,3．'
                ],
                [
                    'index'=>'これは見出し',
                    'body'=>'これは本文．<br>1,2,3．'
                ]
            ],
            'articleAppendix'=>''
        ]

    );
});
