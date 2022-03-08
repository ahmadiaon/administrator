<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v2')->group(function () {
    //* Utilities
    Route::post('admin/check-email', [Api\UtilityController::class, 'checkEmailAdmin']);
    Route::post('user/check-email', [Api\UtilityController::class, 'checkEmailUser']);
    Route::post('admin/check-phone', [Api\UtilityController::class, 'checkPhoneAdmin']);
    Route::post('user/check-phone', [Api\UtilityController::class, 'checkPhoneUser']);


    //* Role Admin
    Route::prefix('admin')->group(function () {
        //* Auth
        Route::post('login', [Api\Auth\AuthController::class, 'loginAdmin']);
        Route::post('register', [Api\Auth\AuthController::class, 'registerAdmin']);

        Route::group(['middleware' => ['auth:admins']], function () {

            // Profiling User
            // Route::resource('user', Api\Admin\UserController::class)->except(['create', 'edit']);

            // Community
            Route::resource('community', Api\Admin\CommunityController::class)->except(['create', 'edit']);

            // Community Category
            Route::resource('community/category', Api\Admin\CommunityCategoryController::class)->except(['create', 'edit']);

            // Profiling Admin
            Route::resource('profile', Api\Admin\AdminController::class)->except(['create', 'edit']);

            // Slide Admin
            Route::resource('slide', Api\Admin\SlideController::class)->except(['create', 'edit']);

            // Gallery Admin
            Route::resource('gallery', Api\Admin\GalleryController::class)->except(['create', 'edit']);

            //* Logout
            Route::post('logout', [Api\Auth\AuthController::class, 'logoutAdmin']);
        });
    });

    //* Role User
    Route::prefix('user')->group(function () {
        //* Auth
        Route::post('login', [Api\Auth\AuthController::class, 'loginUser']);
        Route::post('register', [Api\Auth\AuthController::class, 'registerUser']);

        Route::group(['middleware' => ['auth:users']], function () {

            // Financial Service
            Route::get('financial-service/list', [Api\User\FinancialServicesController::class, 'listFinancialServicesUser']);
            Route::post('financial-service/register/{id}', [Api\User\FinancialServicesController::class, 'registerFinancialServicesUser']);
            Route::post('financial-service/submission/{id}', [Api\User\FinancialServicesController::class, 'submissionFinancialServicesUser']);

            // Tour
            Route::get('tour/list', [Api\User\TourController::class, 'listTourUser']);

            // News
            Route::get('news/list', [Api\User\NewsController::class, 'listNewsUser']);

            // Gallery User
            Route::get('gallery/{id}', [Api\User\GalleryController::class, 'showGalleryById']);

            // Business Category
            Route::get('business/category/list', [Api\User\BusinessController::class, 'listBusinessCategories']);

            // Profiling User
            Route::get('profile/{id}', [Api\User\UserController::class, 'ShowProfile']);
            Route::put('profile/{id}', [Api\User\UserController::class, 'UpdateProfile']);

            // Community
            Route::get('community/list', [Api\User\CommunityController::class, 'listCommunity']);

            // Community Register
            Route::post('community/register/{id}', [Api\User\CommunityRegisterController::class, 'registerCommunityMember']);

            // Business
            Route::get('business/list', [Api\User\BusinessController::class, 'listBusiness']);
            //* Business Review
            Route::get('business/{id}/review/list', [Api\User\ReviewController::class, 'listReviewByBusiness']);
            Route::post('business/{id}/review', [Api\User\ReviewController::class, 'createReview']);

            // Slide User
            Route::get('slide', [Api\User\SlideController::class, 'index']);
            Route::get('slide/list', [Api\User\SlideController::class, 'listSlide']);

            // Community Category User
            Route::get('community/category', [Api\User\CommunityCategoryController::class, 'index']);

            //* Logout
            Route::post('logout', [Api\Auth\AuthController::class, 'logoutUser']);
        });
    });
});
