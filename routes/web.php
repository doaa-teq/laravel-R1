
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\examplecontroller;
// use App\Http\Controllers\carscontroller;
use App\Http\Controllers\Carcontroller;//to be able to see the controller
use App\Http\Controllers\newscontroller;//to be able to see the controller
use App\Http\Controllers\entriescontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contactcontroller;
/*se App\Http\Controllers\Contactcontroller;
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
Route::put('updateCar/{id}',[Carcontroller::class,'update'])->name('updateCar');//editcar the sae name that used in the blade file compined with id and using update functon    
Route::get('destroycar/{id}',[Carcontroller::class,'destroy']);//editcar the sae name that used in the blade file compined with id 
Route::get('details/{id}',[Carcontroller::class,'show'])->name('showCar');//editcar the sae name that used in the blade file compined with id 
Route::get('data',[newscontroller::class,'index']);
Route::get('editnews/{id}',[newscontroller::class,'edit']);//editcar the sae name that used in the blade file compined with id 
Route::put('updatejournal/{id}',[newscontroller::class,'edit'])->name('updatejournal');//editcar the sae name that used in the blade file compined with id
Route::get('creative/{id}',[newscontroller::class,'show'])->name('showjournal');//editcar the sae name that used in the blade file compined with id 
// Route::get('Trashed',[Carcontroller::class,'Trashed']);//editcar the sae name that used in the blade file compined with id 
Route::get('restorecar/{id}',[Carcontroller::class,'restore']);//editcar the sae name that used in the blade file compined with id 
// Route::get('delete/{id}',[Carcontroller::class,'delete']);//editcar the sae name that used in the blade file compined with id 
Route::get('addcar',[Carcontroller::class,'create']);
Route::post('addcars',[Carcontroller::class,'store'])->name('cons');
//we used method put for more sequerity (edit news/id)only appear in url not a page
Route::get('trash',[newscontroller::class,'Trashed']);//editcar the sae name that used in the blade file compined with id 
Route::get('restorenews/{id}',[newscontroller::class,'restore']);//editcar the sae name that used in the blade file compined with id 
Route::get('delete/{id}',[newscontroller::class,'delete']);
Route::get('destroynews/{id}',[newscontroller::class,'destroy']);
Route::get('pop',[newscontroller::class,'create']);
Route::post('addnews',[newscontroller::class,'store'])->name('con');
// Route::get('showimage',[newscontroller::class,'showimage']);
Route::post('addimage',[newscontroller::class,'uploud'])->name('image');
Route::get('update/{id}',[newscontroller::class,'edit']);//editcar the sae name that used in the blade file compined with id 
Route::put('done/{id}',[newscontroller::class,'upd'])->name('updatenews');//editcar the sae name that used in the blade file compined with id and using update functon    
Route::get('img/{id?}',[entriescontroller::class,'index']);//editcar the sae name that used in the blade file compined with id 
Route::get('imgg',[examplecontroller::class,'blog']);//editcar the sae name that used in the blade file compined with id 
Route::get('info',[entriescontroller::class,'create']);
Route::post('addinfo',[entriescontroller::class,'store'])->name('inf');
Route::get('infor',[entriescontroller::class,'show']);
Route::get('placess',[entriescontroller::class,'index']);
Route::get('trassh',[entriescontroller::class,'Trashed']);//editcar the sae name that used in the blade file compined with id 
Route::get('restoreplaces/{id}',[entriescontroller::class,'restore']);//editcar the sae name that used in the blade file compined with id 
Route::get('delete/{id}',[entriescontroller::class,'destroy']);

Auth::routes(['verify'=>true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('contact',[Contactcontroller::class,'create'])->name('contact.show');
Route::post('contact_mail',[Contactcontroller::class,'contact_mail_send']);


