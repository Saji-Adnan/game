<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'auth:api'], function () {



    Route::get('addAndRemoveFromFavorite/{id}', 'API\v1\FavoriteController@addAndRemoveFromFavorite');
    Route::get('getMyFavorite', 'API\v1\FavoriteController@getMyFavorite');
    Route::post('addPackage', 'API\v1\ServiceProviderController@addPackage');
    Route::post('editPackage/{id}', 'API\v1\ServiceProviderController@editPackage');
    Route::post('editMyServices', 'API\v1\ServiceProviderController@editMyServices');
    Route::get('getMyDiscountCodes', 'API\v1\ServiceProviderController@getMyDiscountCodes');
    Route::post('addDiscountCode', 'API\v1\ServiceProviderController@addDiscountCode');
    Route::post('editDiscountCode/{id}', 'API\v1\ServiceProviderController@editDiscountCode');
    Route::get('getStatistics', 'API\v1\ServiceProviderController@getStatistics');
    Route::get('getRevenue', 'API\v1\ServiceProviderController@getRevenue');
    Route::get('getClients', 'API\v1\ServiceProviderController@getClients');
    Route::get('getBooking', 'API\v1\ServiceProviderController@getBooking');
    Route::get('getBookingDetails/{id}', 'API\v1\ServiceProviderController@getBookingDetails');
    Route::post('acceptOrReject/{id}', 'API\v1\ServiceProviderController@acceptOrReject');
    Route::get('completedBooking/{id}', 'API\v1\ServiceProviderController@completedBooking');
    Route::post('addAdditionalTime/{id}', 'API\v1\ServiceProviderController@addAdditionalTime');

//////////////////////begin userController//////////////////
    Route::get('/MyProfile', 'API\v1\UserController@MyProfile');
    Route::post('/editProfile', 'API\v1\UserController@editProfile');
    Route::post('/editTargetGender', 'API\v1\UserController@editTargetGender');
    Route::post('/editAgeCategories', 'API\v1\UserController@editAgeCategories');
    Route::post('/editContactInformation', 'API\v1\UserController@editContactInformation');
    Route::post('/addBusinessHours', 'API\v1\UserController@addBusinessHours');
    Route::post('/editBusinessHours', 'API\v1\UserController@editBusinessHours');
    Route::get('/deleteImage/{id}', 'API\v1\UserController@deleteImage');
    Route::post('/changePassword', 'API\v1\UserController@changePassword');
    Route::get('myNotifications', 'API\v1\UserController@myNotifications');
    Route::get('getMyChildrens', 'API\v1\UserController@getMyChildrens');
    Route::get('getPackageDetails/{id}', 'API\v1\UserController@getPackageDetails');
    Route::post('addChildren', 'API\v1\UserController@addChildren');
    Route::post('editChildren/{id}', 'API\v1\UserController@editChildren');
  

    Route::post('/editAddress/{id}', 'API\v1\UserController@editAddress');
    Route::post('/sendMessage', 'API\UserController@sendMessage');
    Route::get('/getMyMessages', 'API\UserController@getMyMessages');
    Route::get('/logout', 'API\v1\UserController@logout');
    Route::post('/receiveNotification', 'API\v1\UserController@receiveNotification');
    Route::post('/checkCode', 'API\v1\UserController@checkCode');
    Route::post('/checkout', 'API\v1\UserController@checkout');
    Route::post('/addRate', 'API\v1\UserController@addRate');
    Route::get('/getBookingDetail/{id}', 'API\v1\UserController@getBookingDetail');
    Route::get('/getMyBookings', 'API\v1\UserController@getMyBookings');


});

//    UserController
Route::post('/login', 'API\v1\UserController@login');
Route::post('/signUp', 'API\v1\UserController@signUp');
Route::post('/forgotPassword', 'API\v1\UserController@forgotPassword');
Route::post('/socialSignUp', 'API\v1\UserController@socialSignUp');
Route::post('/verifyCode', 'API\v1\UserController@verifyCode');
Route::post('/sendCode', 'API\v1\UserController@sendCode');
Route::get('getServiceProviderProfile/{id}', 'API\v1\UserController@getServiceProviderProfile');

//////////////////////////////// Begin AppController   ///////////////////////////////////

Route::get('getAgeCategories', 'API\v1\AppController@getAgeCategories');
Route::get('getSetting', 'API\v1\AppController@getSetting');
Route::get('pages/{id}', 'API\v1\AppController@pages');
Route::post('contactUs', 'API\v1\AppController@contactUs');
Route::get('getFaq', 'API\v1\AppController@getFaq');
Route::post('changeLanguge', 'API\v1\AppController@changeLanguge');
Route::get('getCities', 'API\v1\AppController@getCities');
Route::get('getServices', 'API\v1\AppController@getServices');
Route::get('getAds', 'API\v1\AppController@getAds');
Route::get('getBanners', 'API\v1\AppController@getBanners');
Route::get('getServiceProviders', 'API\v1\AppController@getServiceProviders');
Route::get('search', 'API\v1\AppController@search');
Route::get('filter', 'API\v1\AppController@filter');
Route::get('getServiceProviderOnMap', 'API\v1\AppController@getServiceProviderOnMap');

//////////////////////////////// End AppController   ///////////////////////////////////
