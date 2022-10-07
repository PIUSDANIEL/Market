<?php

use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\Editor\Editorcontroller;
use App\Http\Controllers\Product\Productupload;
use App\Http\Controllers\Seller\Sellercontroller;
use App\Http\Controllers\User\Usercontroller;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Auth::routes();





Route::get('/',[Productupload::class,'product'])->name('/');

Route::get('products/{cat}',[Productupload::class,'products'])->name('products');

Route::post('featured',[Productupload::class,'featured'])->name('featured');

Route::post('flash',[Productupload::class,'flash'])->name('flash');

Route::post('uploadproduct',[Productupload::class,'uploadproduct'])->name('uploadproduct');

Route::post('editproduct', [Productupload::class,'editproduct'])->name('editproduct');

Route::post('deletemainimage', [Productupload::class,'deletemainimage'])->name('deletemainimage');

Route::post('deleteallimages', [Productupload::class,'deleteallimages'])->name('deleteallimages');

Route::get('geteditproduct/{id}',[Productupload::class,'geteditproduct'])->name('geteditproduct');

Route::get('deleteproduct/{id}',[Productupload::class,'deleteproduct'])->name('deleteproduct');

Route::get('productsfetch',[Productupload::class,'productsfetch'])->name('productsfetch');

Route::get('allproduct',[Productupload::class,'allproduct'])->name('allproduct');

Route::get('productuploadcat',[Productupload::class,'productuploadcat'])->name('productuploadcat');

Route::get('productuploadsubcat/{cat_id}',[Productupload::class,'productuploadsubcat'])->name('productuploadsubcat');

Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web'])->group(function () {

        Route::view('/login', 'User.Login')->name('login')->middleware('preventbackhistory','RestrictAfterAuth');
        Route::view('/register', 'User.Register')->name('register')->middleware('preventbackhistory','RestrictAfterAuth');

        Route::post('/userLogin', [Usercontroller::class,'userLogin'])->name('userLogin');
        Route::post('/userRegister', [Usercontroller::class,'userRegister'])->name('userRegister');
    });

    Route::middleware(['auth:web'])->group(function () {

        Route::post('/userLogout', [Usercontroller::class,'userLogout'])->name('userLogout');

        Route::view('/dashboard', 'User.Dashboard')->name('dashboard');
    });

});

Route::prefix('seller')->name('seller.')->group(function(){

    Route::middleware(['guest:seller'])->group(function () {

        Route::view('/login', 'seller.Login')->name('login')->middleware('preventbackhistory','RestrictAfterAuth');
        Route::view('/register', 'seller.Register')->name('register')->middleware('preventbackhistory','RestrictAfterAuth');

        Route::post('/sellerLogin', [Sellercontroller::class,'sellerLogin'])->name('sellerLogin');
        Route::post('/sellerRegister', [Sellercontroller::class,'sellerRegister'])->name('sellerRegister');
    });

    Route::middleware(['auth:seller'])->group(function () {

        Route::post('/sellerLogout', [Sellercontroller::class,'sellerLogout'])->name('sellerLogout');
        Route::view('/dashboard', 'Seller.Dashboard')->name('dashboard');
    });

});


Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin'])->group(function () {

        Route::view('/login', 'admin.Login')->name('login')->middleware('preventbackhistory','RestrictAfterAuth');
      //  Route::view('/register', 'admin.Register')->name('register')->middleware('preventbackhistory','RestrictAfterAuth');

        Route::post('/adminLogin', [Admincontroller::class,'adminLogin'])->name('adminLogin');
       // Route::post('/adminRegister', [Admincontroller::class,'adminRegister'])->name('adminRegister');
    });

    Route::middleware(['auth:admin'])->group(function () {

        Route::view('/editorsreg', 'Admin.Editorreg')->name('editorsreg');

        Route::post('/editorRegister', [Editorcontroller::class,'editorRegister'])->name('editorRegister');

        Route::post('/adminLogout', [Admincontroller::class,'adminLogout'])->name('adminLogout');

        Route::view('/dashboard', 'Admin.Dashboard')->name('dashboard');

        Route::view('/allproduct', 'allproduct')->name('allproduct');

    });

});


Route::prefix('editor')->name('editor.')->group(function(){

    Route::middleware(['guest:editor'])->group(function () {

        Route::view('/login', 'editor.Login')->name('login')->middleware('preventbackhistory','RestrictAfterAuth');

        Route::post('/editorLogin', [Editorcontroller::class,'editorLogin'])->name('editorLogin');

    });

    Route::middleware(['auth:editor'])->group(function () {

        Route::post('/editorLogout', [Editorcontroller::class,'editorLogout'])->name('editorLogout');

        Route::view('/dashboard', 'Editor.Dashboard')->name('dashboard');

        Route::view('/allproduct', 'allproduct')->name('allproduct');

    });

});



