<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\InquiryController;

use App\Http\Controllers\User\UserProfileController;

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\SslCommerzPaymentController;

use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\User\UserPackageController;

use App\Http\Controllers\Admin\PackageTypeController;
use App\Http\Controllers\Admin\TransportController;
use App\Http\Controllers\Admin\TransportTypeController;
use App\Http\Controllers\Admin\TransportCategoryController;

use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\ResortController;

use App\Http\Controllers\Admin\RoomTypeController;





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
Route::group(['middleware' => 'prevent-back-history'],function(){

Auth::routes();




// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/paynow/{id}', [SslCommerzPaymentController::class, 'HostedCheckout'])->name('pay.now');

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


























Route::get('/', function () {
    return view('front.index');})->name('home');
  
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('front.index');})->name('dashboard');


Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin.home')->middleware('is_admin');
Route::get('/user/home', [App\Http\Controllers\HomeController::class, 'userhome'])->name('user.home');

//Admin management all route

Route::prefix('admin')->group(function(){
    Route::get('/logout', [AdminController::class, 'Logout'])->name('admin.logout');
    Route::get('/view', [AdminController::class, 'AdminView'])->name('admin.view');
    Route::get('/add', [AdminController::class, 'AdminAdd'])->name('admin.add');
    Route::post('/store', [AdminController::class, 'AdminStore'])->name('admin.store');

    Route::get('/delete/{id}', [AdminController::class, 'AdminDelete'])->name('admin.delete');


});



Route::prefix('user')->group(function(){
    Route::get('/logout', [UserController::class, 'Logout'])->name('user.logout');
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('user.delete');



});


    //Sale management all route

    Route::prefix('booking')->group(function(){
        Route::get('/view', [BookingController::class, 'BookingView'])->name('booking.view');
        Route::get('/edit/{id}', [BookingController::class, 'BookingEdit'])->name('booking.edit');
        Route::post ('/update/{id}', [BookingController::class, 'BookingUpdate'])->name('booking.update');
        Route::get('/delete/{id}', [BookingController::class, 'BookingDelete'])->name('booking.delete');
    
        
        });

//Start Admin management all route

//Admin Profile all route

Route::prefix('adminprofile')->group(function(){
    Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
    Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    Route::post ('/update', [ProfileController::class, 'ProfileUpdate'])->name('profile.update');
    Route::get ('/password/change', [ProfileController::class, 'PasswordView'])->name('password.view');
    Route::post ('/password/Update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');

    
    });


    //User Profile all route


    Route::get('/pageinfoedit', [PageController::class, 'PageInfoEdit'])->name('pageinfo.edit');

    Route::post ('/pageinfo/update/{id}', [PageController::class, 'PageInfoUpdate'])->name('pageinfo.update');
    Route::get('/privacy', [PageController::class, 'Privacy'])->name('privacy.view');
    Route::get('/about', [PageController::class, 'About'])->name('about.view');
    Route::get('/contact', [PageController::class, 'Contact'])->name('contact.view');


    Route::post('/Inquiry', [InquiryController::class,'InquiryStore'])->name('inquiry.store');
    Route::get('/View-Inquiry', [InquiryController::class,'InquiryView'])->name('inquiry.view');
    Route::get('/Delete-Inquiry/{id}', [InquiryController::class,'InquiryDelete'])->name('inquiry.delete');





//Destination  management all route

Route::prefix('destination')->group(function(){
    Route::get('/view', [DestinationController::class, 'DestinationView'])->name('destination.view');
    Route::get('/add', [DestinationController::class, 'DestinationAdd'])->name('destination.add');
    Route::post('/store', [DestinationController::class, 'DestinationStore'])->name('destination.store');
    Route::get('/edit/{id}', [DestinationController::class, 'DestinationEdit'])->name('destination.edit');
    Route::post ('/update/{id}', [DestinationController::class, 'DestinationUpdate'])->name('destination.update');
    Route::get('/delete/{id}', [DestinationController::class, 'DestinationDelete'])->name('destination.delete');

    
    });


//Package management all route

Route::prefix('package')->group(function(){
    Route::get('/view', [PackageController::class, 'PackageView'])->name('package.view');
    Route::get('/add', [PackageController::class, 'PackageAdd'])->name('package.add');
    Route::post('/store', [PackageController::class, 'PackageStore'])->name('package.store');
    Route::get('/edit/{id}', [PackageController::class, 'PackageEdit'])->name('package.edit');
    Route::post ('/update/{id}', [PackageController::class, 'PackageUpdate'])->name('package.update');
    Route::get('/delete/{id}', [PackageController::class, 'PackageDelete'])->name('package.delete');

    
    });






//Package Type management all route

Route::prefix('packagetype')->group(function(){
    Route::get('/view', [PackageTypeController::class, 'PackageTypeView'])->name('packagetype.view');
    Route::get('/add', [PackageTypeController::class, 'PackageTypeAdd'])->name('packagetype.add');
    Route::post('/store', [PackageTypeController::class, 'PackageTypeStore'])->name('packagetype.store');
    Route::get('/edit/{id}', [PackageTypeController::class, 'PackageTypeEdit'])->name('packagetype.edit');
    Route::post ('/update/{id}', [PackageTypeController::class, 'PackageTypeUpdate'])->name('packagetype.update');
    Route::get('/delete/{id}', [PackageTypeController::class, 'PackageTypeDelete'])->name('packagetype.delete');

    
    });







    //Transport management all route

    Route::prefix('transport')->group(function(){
        Route::get('/view', [TransportController::class, 'TransportView'])->name('transport.view');
        Route::get('/add', [TransportController::class, 'TransportAdd'])->name('transport.add'); 
        Route::post('/store', [TransportController::class, 'TransportStore'])->name('transport.store');
        Route::get('/edit/{id}', [TransportController::class, 'TransportEdit'])->name('transport.edit');
        Route::post ('/update/{id}', [TransportController::class, 'TransportUpdate'])->name('transport.update');
        Route::get('/delete/{id}', [TransportController::class, 'TransportDelete'])->name('transport.delete');
    
        
        });
    
    
        //Transport Type management all route
    
    Route::prefix('transporttype')->group(function(){
        Route::get('/view', [TransportTypeController::class, 'TransportTypeView'])->name('transporttype.view');
        Route::get('/add', [TransportTypeController::class, 'TransportTypeAdd'])->name('transporttype.add');
        Route::post('/store', [TransportTypeController::class, 'TransportTypeStore'])->name('transporttype.store');
        Route::get('/edit/{id}', [TransportTypeController::class, 'TransportTypeEdit'])->name('transporttype.edit');
        Route::post ('/update/{id}', [TransportTypeController::class, 'TransportTypeUpdate'])->name('transporttype.update');
        Route::get('/delete/{id}', [TransportTypeController::class, 'TransportTypeDelete'])->name('transporttype.delete');
    
        
        });
    
    
    //Transport Category management all route
    
    Route::prefix('transportcategory')->group(function(){
        Route::get('/view', [TransportCategoryController::class, 'TransportCategoryView'])->name('transportcategory.view');
        Route::get('/add', [TransportCategoryController::class, 'TransportCategoryAdd'])->name('transportcategory.add');
        Route::post('/store', [TransportCategoryController::class, 'TransportCategoryStore'])->name('transportcategory.store');
        Route::get('/edit/{id}', [TransportCategoryController::class, 'TransportCategoryEdit'])->name('transportcategory.edit');
        Route::post ('/update/{id}', [TransportCategoryController::class, 'TransportCategoryUpdate'])->name('transportcategory.update');
        Route::get('/delete/{id}', [TransportCategoryController::class, 'TransportCategoryDelete'])->name('transportcategory.delete');
    
        
        });
    




  //Restaurant  management all route

  Route::prefix('restaurant')->group(function(){
    Route::get('/view', [RestaurantController::class, 'RestaurantView'])->name('restaurant.view');
    Route::get('/add', [RestaurantController::class, 'RestaurantAdd'])->name('restaurant.add');
    Route::post('/store', [RestaurantController::class, 'RestaurantStore'])->name('restaurant.store');
    Route::get('/edit/{id}', [RestaurantController::class, 'RestaurantEdit'])->name('restaurant.edit');
    Route::post ('/update/{id}', [RestaurantController::class, 'RestaurantUpdate'])->name('restaurant.update');
    Route::get('/delete/{id}', [RestaurantController::class, 'RestaurantDelete'])->name('restaurant.delete');

    
    });












  //Resort  management all route

  Route::prefix('resort')->group(function(){
    Route::get('/view', [ResortController::class, 'ResortView'])->name('resort.view');
    Route::get('/add', [ResortController::class, 'ResortAdd'])->name('resort.add');
    Route::post('/store', [ResortController::class, 'ResortStore'])->name('resort.store');
    Route::get('/edit/{id}', [ResortController::class, 'ResortEdit'])->name('resort.edit');

    Route::post ('/update/{id}', [ResortController::class, 'ResortUpdate'])->name('resort.update');
    Route::get('/delete/{id}', [ResortController::class, 'ResortDelete'])->name('resort.delete');
    Route::get('/resortroomadd/{id}', [ResortController::class, 'ResortRoomadd'])->name('resortroom.add');
    Route::post('/resortroomstore', [ResortController::class, 'ResortRoomStore'])->name('resortroom.store');
    Route::get('/resortroomdetails/{id}', [ResortController::class, 'ResortRoomDetails'])->name('resortroom.details');

    Route::get('/resortroomdedit/{id}', [ResortController::class, 'ResortRoomEdit'])->name('resortroom.edit');
    Route::post('/resortroomupdate/{id}', [ResortController::class, 'ResortRoomUpdate'])->name('resortroom.update');

    Route::get('/resortroomdelete/{id}', [ResortController::class, 'ResortRoomDelete'])->name('resortroom.delete');


    
    });

  //Room Type management all route

  Route::prefix('roomtype')->group(function(){
    Route::get('/view', [RoomTypeController::class, 'RoomTypeView'])->name('roomtype.view');
    Route::get('/add', [RoomTypeController::class, 'RoomTypeAdd'])->name('roomtype.add');
    Route::post('/store', [RoomTypeController::class, 'RoomTypeStore'])->name('roomtype.store');
    Route::get('/edit/{id}', [RoomTypeController::class, 'RoomTypeEdit'])->name('roomtype.edit');
    Route::post ('/update/{id}', [RoomTypeController::class, 'RoomTypeUpdate'])->name('roomtype.update');
    Route::get('/delete/{id}', [RoomTypeController::class, 'RoomTypeDelete'])->name('roomtype.delete');

    
    });












//Finish Admin management all route




    // Route::get('/view', [UserPackageController::class, 'PackageView'])->name('userpackage.view');
    Route::get('/Package-list', [UserPackageController::class, 'PackageList'])->name('packagelist.view');
    Route::get('/Package-details{id}', [UserPackageController::class, 'PackageDetails'])->name('package.details');
    Route::post('/Package-booking', [UserPackageController::class, 'PackageBooking'])->name('booking.store');

    Route::get('/Purchase-history', [UserPackageController::class, 'Purchasehistory'])->name('purchasehistory.view');

    Route::get('/Pending-booking', [UserPackageController::class, 'PendingBooking'])->name('pendingbooking.view');

    Route::get('/Pending-booking-cancel/{id}', [UserPackageController::class, 'PendingBookingCancel'])->name('pendingbooking.cancel');




//User management all route

Route::prefix('user')->group(function(){
    Route::get('/logout', [AdminController::class, 'Logout'])->name('user.logout');
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');


});





Route::prefix('userpackage')->group(function(){
   // Route::get('/view', [UserPackageController::class, 'PackageView'])->name('userpackage.view');

    Route::get('/pending', [UserPackageController::class, 'PendingPackageView'])->name('pendingpackage.view');
    Route::get('/packagehistory', [UserPackageController::class, 'PendingHistoryView'])->name('packagehistory.view');
    Route::get('/buy/{id}', [UserPackageController::class, 'UserBuyAdd'])->name('userbuy.add');
    Route::post('/store', [UserPackageController::class, 'UserBuyStore'])->name('userbuy.store');
    Route::get('/cancel/{id}', [UserPackageController::class, 'PendingPackageCancel'])->name('pendingpackage.cancel');


    
    });

    Route::prefix('userprofile')->group(function(){
        Route::get('/profie', [UserProfileController::class, 'Profile'])->name('userprofile.view');

        Route::get('/edit', [UserProfileController::class, 'ProfileEdit'])->name('userprofile.edit');
        Route::post ('/update', [UserProfileController::class, 'ProfileUpdate'])->name('userprofile.update');
        Route::get ('/password/change', [UserProfileController::class, 'PasswordView'])->name('userpassword.view');
        Route::post ('/password/Update', [UserProfileController::class, 'PasswordUpdate'])->name('userpassword.update');
    
        
        });
    });