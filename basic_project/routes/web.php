<?php


use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });



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
    
    
    
    
    
    /// Route::redirect('/second', '/first', 301); //Redirection issue permanent
    
});



Route::get('/', function(){

    return view('auth.login');
}
)->name('/');

Route::get('/home', function(){

    return view('index');
}
)->name('/home')->middleware('auth');

Route::get('/user', function(){

    return view('users',['user'=>'Faris']);
}
);

Route::get('/aboutus', function(){

    return view('aboutus');
}
)->name('aboutus')->middleware('auth');

Route::get('/contacts', function(){

    return view('contacts');
}
)->name('contacts')->middleware('auth');




Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store')->middleware('auth');

Route::post('/addblog', [BlogController::class, 'store'])->name('addblog.store')->middleware('auth');
 
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index')->middleware('auth');

Route::get('/search', [BlogController::class, 'search'])->name('search')->middleware('auth');

Route::delete('/delete-all-blogs', [BlogController::class, 'deleteAllBlogs'])->name('deleteAllBlogs');








Route::fallback(function(){
    return '<h1>Page not found</h1>';
});
