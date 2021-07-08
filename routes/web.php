<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\http\Controllers\ViewController;
use App\http\Controllers\BladeController;
use App\http\Controllers\FormController;
use App\http\Controllers\DbController;
use App\http\Controllers\ModelController;
use App\http\Controllers\HttpController;
use App\http\Controllers\MethodController;
use App\http\Controllers\SessionAuth;
use App\http\ControllerS\StoreController;
use App\http\Controllers\UploadController;
use App\http\controllers\MemberController;
use App\http\controllers\PeopleController;
use App\http\controllers\PeoplesController;
use App\http\controllers\DeleteController;
use App\http\controllers\QueryController;
use App\http\controllers\AggregateController;
use App\http\controllers\EmployeeController;
use App\http\controllers\AccessorsController;
use App\http\controllers\MutatorController;
use App\http\controllers\OnetooneController;
use App\http\controllers\OnetomanyController;
use App\http\controllers\DeviceController;
use App\Mail\SampleMail;



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
   // return view('welcome');
   return new SampleMail();
});

Route::get("user",[UserController::class,'show']);
//1:- sending data by url
Route::get("user/{id}",[UserController::class,'show']);


//2:-Calling view file by routes
Route::view("user","users");
//passing data in url
//Route::get('/user/{$name}', function ($name) {
  //  return view('users',["name"=>$name]);
//});

//3:-Calling BY  controller
    Route::get("users/{user}",[ViewController::class,'loadView']);


//4:-Calling component file
    Route::view("tanuser","user1");
    Route::view("about","about");

    //5: for blade template
    Route::get("blade",[BladeController::class,'loadView1']);

    //6:Route for form 

    Route:: post("form",[FormController::class,'getData']);
    //path for view

    Route::view("form","form");

    //7 :-Routes for middeleware

    Route::view('home','home');
    
    Route::view('noaccess','noaccess'); 


    Route::group(['middleware'=>['protectedPage']],function(){
        Route::view('mid','mid');

        //8:- Routes for databases
        Route::get("database",[DbController::class,'index']);  

        //9:-Routes for model

        Route::get("model",[ModelController::class,'getData']);

        //10:-Http client
        Route::get('/http',[HttpController::class,'index']);

        //11 Http methods

       // Route::get('submit',[MethodController::class,'testRequest']);
       // Route::post('submit',[MethodController::class,'testRequest']);
       //Route::put('submit',[MethodController::class,'testRequest']);
       Route::delete('submit',[MethodController::class,'testRequest']);

        Route::view('login','method');

        //12 sessions route

        Route::view('logins','login');
        Route::view('profile','profile');
        //functionality of logout
        Route::get('/logout',function(){
            if(session()->has('user'))
            {
                session()->pull('user',null);

            }
            return redirect('logins');

        });

        Route::get('/login',function (){
            if(session()->has('user'))
            {
                return redirect('profile');
            }
            return view('logins');
        });

        Route::get('profile',function(){
            if(session()->has('user'))
            {
                return view('profile');
            }
            return view('logins');
        });
        Route::post('session',[SessionAuth::class,'userLogin']);

        // 13:- Route for flash email
        Route::view('store','storeuser');
        Route::post("storecontroller",[StoreController::class,'storeM']);


        //14:Route for file upload

        Route::view('upload','load');

        Route::post('upload',[UploadController::class,'index']);

        //Route for localization

       // Route::view('profilet','profilet');

        Route::get('/profilet/{lang}', function ($lang) {
            App::setlocale($lang);
            return view('profilet');
        });

        Route::view('add','addmember');
        Route::post('add',[MemberController::class,'addData']);

    // 15:- Route for pagination
    Route::get('list',[PeopleController::class,'show']);

    //16:Route for show list databases
    
    Route::get('lists',[PeoplesController::class,'show']);

    //17: Route for delete data

    Route::get('show',[DeleteController::class,'show']);
    Route::get('delete/{id}',[DeleteController::class,'delete']);

    //18:Route for update
    Route::get('edit/{id}',[DeleteController::class,'showData']);

    Route::post('edit',[DeleteController::class,'update']);

    //19: Route for querry builder

    Route::get("query",[QueryController::class,'operations']);

    //20:Route for aggregate

    Route::get('aggregate',[AggregateController::class,'operations']);

    //Route for joins 

    Route::get('joins',[EmployeeController::class,'getData']);

    //Route for accessors
    Route::get('accessors',[AccessorsController::class,'index']);

    //Route for mutators

    Route::get('mutators',[MutatorController::class,'index']);

    // Route for one to one relationship

    Route::get('one',[OnetooneController::class,'index']);

    //Route for one to many

    Route::get('many',[OnetomanyController::class,'index']);

    //Route for Model binding

    Route::get('device/{key:name}',[DeviceController::class,'index']);
        
    

    //Route for api





    
    });





