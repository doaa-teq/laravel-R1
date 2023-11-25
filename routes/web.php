
<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\examplecontroller;
// use App\Http\Controllers\carscontroller;
use App\Http\Controllers\Carcontroller;//to be able to see the controller
use App\Http\Controllers\newscontroller;//to be able to see the controller
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
// Route::get('About', function(){
//     return 'welcome hello';
// });
// Route::get('Contact us',function(){
//     return 'contact us if there is any problem';
// });
// Route::prefix('support')->group(function(){
//     Route::get('/', function(){
//         return 'support page';
//     });
//     Route::get('chat',function(){
//         return 'chat page';
//     });
//     Route::get('call',function(){
//         return 'call page';
//     });
//     Route::get('ticket',function(){
//         return 'ticket page';
//     });
    
// });
// Route::prefix('Training')->group(function(){
//     Route::get('/', function(){
//         return 'Training page';
//     });
//     Route::get('HR',function(){
//         return 'HR page';
//     });
//     Route::get('ICT',function(){
//         return 'ICT page';
//     });
//     Route::get('Marketing',function(){
//         return 'Marketing page';
//     });
//     Route::get('Logistics',function(){
//         return 'Logistics page';
//     });
    
// });
Route::get('/', function () {

    return view('welcomme');//the main homepage part should be avaliable not commented 

});
// Route::fallback(function(){
//     return redirect('/');//redirect to otherpage in case it is not found
// });
// Route::get('cv', function () {

//     return view('cv');//the main homepage part should be avaliable not commented 

// });
// Route::get('login', function () {

//     return view('login');//the main homepage part should be avaliable not commented 

// });
// Route::post('recieve', function () {

//     return 'data received';//I changed to post because of the form and use@csrf and add the name of the route inside the action 
// })->name('recieve');

// Route::get('test1',[examplecontroller::class,'test1']);//test1 ata first is the word that will be written in the url and the other one the function name that open the login page 
// Route::get('car', function () {

//         return view('car');//the main homepage part should be avaliable not commented 
    
//     });
// Route::post('purchase', function () {
//     return view('purchase');
   
// })->name('purchase');
Route::get('pop',[newscontroller::class,'create']);
Route::post('addnews',[newscontroller::class,'store'])->name('con');
Route::get('car',[Carcontroller::class,'index']);
Route::get('editcar/{id}',[Carcontroller::class,'edit']);//editcar the sae name that used in the blade file compined with id 
Route::put('updatecar/{id}',[Carcontroller::class,'edit'])->name('updatejournal');//editcar the sae name that used in the blade file compined with id     
Route::get('data',[newscontroller::class,'index']);
Route::get('editnews/{id}',[newscontroller::class,'edit']);//editcar the sae name that used in the blade file compined with id 
Route::put('updatejournal/{id}',[newscontroller::class,'edit'])->name('updatejournal');//editcar the sae name that used in the blade file compined with id     