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
Route::get('About',function(){
    return 'welcome hello';
});
Route::get('Contact us',function(){
    return 'contact us if there is any problem';
});
Route::prefix('support')->group(function(){
    Route::get('/', function(){
        return 'support page';
    });
    Route::get('chat',function(){
        return 'chat page';
    });
    Route::get('call',function(){
        return 'call page';
    });
    Route::get('ticket',function(){
        return 'ticket page';
    });
    
});
Route::prefix('Training')->group(function(){
    Route::get('/', function(){
        return 'Training page';
    });
    Route::get('HR',function(){
        return 'HR page';
    });
    Route::get('ICT',function(){
        return 'ICT page';
    });
    Route::get('Marketing',function(){
        return 'Marketing page';
    });
    Route::get('Logistics',function(){
        return 'Logistics page';
    });
    
});


    