<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// LANGUAGE ROUTES
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);

    if (request()->fullUrl() === redirect()->back()->getTargetUrl()) {
        return redirect('/');
    }

    return redirect()->back();
});


// ADMIN ROUTES START HERE

Route::get('/admin', function(){
  return redirect(route('admin.slider.index'));
});

//Admin Auth Routes
Route::get('admin/enter', 'Admin\AuthController@showLoginForm')->name('admin.login');
Route::post('admin/enter', 'Admin\AuthController@login')->name('admin.login.submit');
Route::get('admin/exit', 'Admin\AuthController@logout')->name('admin.logout');
Route::post('admin/changePassword', 'Admin\AuthController@changePassword')->name('admin.password.change');

//Admin Dashboard 
Route::get('/admin/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');


Route::name('admin.')->group(function() {
  // HOMEPAGE
  Route::resource('admin/slider', 'Admin\SliderController');

  Route::resource('/admin/blog', 'Admin\BlogController');
  Route::resource('/admin/event', 'Admin\EventController');

  Route::name('associate.')->group(function(){
    Route::resource('admin/associate/donor', 'Admin\DonorController');
    Route::resource('admin/associate/partner', 'Admin\PartnerController');
  });

  Route::resource('admin/opportunity', 'Admin\OpportunityController');

  Route::resource('admin/about', 'Admin\AboutController');
  Route::name('about.')->group(function(){
    Route::resource('admin/advisor', 'Admin\AdvisorController');
  });

  Route::get('/admin/contact', 'Admin\AboutController@contacts')->name('contacts');
  Route::delete('/admin/contact/{contact}', 'Admin\AboutController@destroyContact')->name('contact.destroy');

});





// FRONTEND ROUTES
Route::get('/', 'Front\HomeController@index')->name('home');
Route::get('/donors', 'Front\HomeController@donors')->name('donors');
Route::get('/sponsors', 'Front\HomeController@sponsors')->name('sponsors');
Route::get('/blog', 'Front\HomeController@blog')->name('blog');
Route::get('/blog/{blog}', 'Front\HomeController@showBlog')->name('blog.show');
Route::get('/event', 'Front\HomeController@event')->name('event');
Route::get('/event/{event}', 'Front\HomeController@showEvent')->name('event.show');
Route::get('/contact', 'Front\HomeController@contact')->name('contact');
Route::post('/contact', 'Front\HomeController@submitContact')->name('contact.submit');
Route::get('/about/{about}', 'Front\HomeController@about')->name('about');
Route::get('/opportunities/{opportunity}', 'Front\HomeController@opportunity')->name('opportunity');

