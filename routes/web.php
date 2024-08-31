<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FarmersController;
use App\Http\Controllers\BuyersController;
use App\Http\Middleware\CheckUserType;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes([
    'verify' => true
    ]);
    Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'VerificationController@resend')->name('verification.resend');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// admin routes
Route::get('/adminhome',[AdminController::class,'adminhome'])->name('adminhome');
Route::get('/about',[AdminController::class,'about'])->name('about');
Route::get('/contact',[AdminController::class,'contact'])->name('contact');
// farmers routes
Route::get('/farmershome',[FarmersController::class,'farmershome'])->name('farmershome');
Route::get('/requestorder',[FarmersController::class,'requestorder'])->name('requestorder');
Route::get('/get-mango-types/{buyerId}',[FarmersController::class,'getMangoTypes']);
Route::post('/request_order',[FarmersController::class,'request_order']);
Route::get('/pendingorder',[FarmersController::class,'pendingorder'])->name('pendingorder');
Route::get('/confirmedorder',[FarmersController::class,'confirmedorder'])->name('confirmedorder');
Route::get('/completion',[FarmersController::class,'completion'])->name('completion');
Route::post('/arrived.order/{id}',[FarmersController::class,'arrived']);
Route::get('/farmer.dashboard', [FarmersController::class, 'farmerdashboard'])->name('farmer.dashboard');

    // Routes for buyers (usertype = 1)
 
        Route::get('/buyershome', [BuyersController::class, 'buyershome'])->name('buyershome');
        Route::get('/addmango', [BuyersController::class, 'addmango'])->name('addmango');
        Route::get('/waitingorder', [BuyersController::class, 'waitingorder'])->name('waitingorder');
        Route::get('/showvariety', [BuyersController::class, 'showvariety'])->name('showvariety');
        Route::get('/confirmed', [BuyersController::class, 'confirmed'])->name('confirmed');
        Route::post('/addtype', [BuyersController::class, 'addtype']);
        Route::get('/updateprice/{id}', [BuyersController::class, 'updateprice'])->name('updateprice');
        Route::get('/escalated', [BuyersController::class, 'escalated'])->name('escalated');
        Route::get('/commit', [BuyersController::class, 'commit'])->name('commit');
        Route::post('/editprice/{id}', [BuyersController::class, 'editprice']);
        Route::post('/approve.order/{id}', [BuyersController::class, 'approveOrder']);
        Route::post('/completed.order/{id}', [BuyersController::class, 'completed']);
        Route::get('/search', [BuyersController::class, 'search'])->name('search');
        Route::get('/buyer.dashboard', [BuyersController::class, 'dashboard'])->name('buyer.dashboard');
        Route::post('/notifications/{id}/read', [BuyersController::class, 'markAsRead']);
        Route::post('/notifications/{id}/mark-as-read', [BuyersController::class, 'markAsRead'])->name('notifications.markAsRead');
        Route::get('/notifications/unread-count', [BuyersController::class, 'getUnreadCount']);


    //  admins routes

Route::get('/allusers', [AdminController::class, 'allusers'])->name('allusers');
Route::post('/users/activate/{id}', [AdminController::class, 'activate'])->name('users.activate');
Route::post('/users/disable/{id}', [AdminController::class, 'disable'])->name('users.disable');
Route::post('/users/delete/{id}', [AdminController::class, 'delete'])->name('users.delete');
Route::post('/users/change-role/{id}', [AdminController::class, 'changeRole'])->name('users.changeRole');
Route::get('/manufacturers', [AdminController::class, 'manufacturers'])->name('manufacturers');
Route::get('/farmers', [AdminController::class, 'farmers'])->name('farmers');
Route::put('/users/{id}/updateDailyLimit', [AdminController::class, 'updateDailyLimit'])->name('users.updateDailyLimit');
Route::get('/currentusers', [AdminController::class, 'showLoggedInUsers'])->name('currentusers');
Route::post('/message', [AdminController::class, 'submit']);
Route::get('/messages', [AdminController::class, 'messages'])->name('messages');

    