<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



//Group route

Route:: prefix('page')->group(function(){

    Route::get('/first', function () {
        return view('faris');
    })->name('first_n');//Route naming for name changes advantage
    
    
    Route::view('/second', 'project');
    
    
    Route::get('/number/{num?}/status/{text?}', function (int $num = null, string $text = null) {
    
        if($num){
    
            return '<h2> Hey this is project number '.$num.'<h2><h3>Comment: '.$text;
    
        }else{
            return '<h2> Nothing found <h2>';
        }
    });
    
    
    //User defined
    
    Route::get('/condition/{con?}', function ( $con = null) {
    
        if($con){
    
            return '<h2> Contents: '.$con;
    
        }else{
            return '<h2> Nothing found <h2>';
        }
    })->whereIn('con', ['swim', 'fly', 'walk']);// where('con', ['0-9']+)
    
    
    
    
    /// Route::redirect('/second', '/first', 301); //Redirection issue permanent
    
});


Route::fallback(function(){
    return '<h1>Page not found</h1>';
});
