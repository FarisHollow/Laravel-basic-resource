<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', function () {
    return view('faris');
});

Route::view('/second', 'project');

Route::get('/number/{num?}/status/{text?}', function (int $num = null, string $text = null) {

    if($num){

        return '<h2> Hey this is project number '.$num.'<h2><h3>Comment: '.$text;

    }else{
        return '<h2> Nothing found <h2>';
    }
});

Route::get('/condition/{con?}', function ( $con = null) {

    if($con){

        return '<h2> Contents: '.$con;

    }else{
        return '<h2> Nothing found <h2>';
    }
})->whereIn('con', ['swim', 'fly', 'walk']);

