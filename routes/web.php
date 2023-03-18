<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Front\HomeController;

use App\Http\Controllers\Admin\BlogCategoryController;

use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Admin\ServiceCategoryController;

use App\Http\Controllers\Admin\ServiceController;

Route::get('/', [HomeController::class, 'front'])->name('/');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/show-blogs', [HomeController::class, 'showBlogs'])->name('show-blogs');
Route::get('/blogs-details/{id}', [HomeController::class, 'blogDetails'])->name('blogs-details');
Route::get('/service-details/{id}', [HomeController::class, 'serviceDetails'])->name('service-details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //Blog Category

    Route::get('/add-blogs-category', [BlogCategoryController::class, 'addCategory'])->name('add-blogs-category');
    Route::get('/manage-blogs-category', [BlogCategoryController::class, 'manageCategory'])->name('manage-blogs-category');
    Route::get('/edit-blogs-category/{id}', [BlogCategoryController::class, 'editCategory'])->name('edit-blogs-category');
    Route::get('/delete-blogs-category/{id}', [BlogCategoryController::class, 'deleteCategory'])->name('delete-blogs-category');
    Route::post('/update-blogs-category/{id}', [BlogCategoryController::class, 'updateCategory'])->name('update-blogs-category');
    Route::post('/new-blogs-category', [BlogCategoryController::class, 'newCategory'])->name('new-blogs-category');

    //blogs

    Route::get('/add-blogs', [BlogController::class, 'addBlog'])->name('add-blogs');
    Route::get('/manage-blogs', [BlogController::class, 'manageBlog'])->name('manage-blogs');
    Route::get('/edit-blogs/{id}', [BlogController::class, 'editBlog'])->name('edit-blogs');
    Route::get('/delete-blogs/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blogs');
    Route::post('/update-blogs/{id}', [BlogController::class, 'updateBlog'])->name('update-blogs');
    Route::post('/new-blogs', [BlogController::class, 'newBlog'])->name('new-blogs');


    //Service Category

    Route::get('/add-service-category', [ServiceCategoryController::class, 'addServiceCategory'])->name('add-service-category');
    Route::get('/manage-service-category', [ServiceCategoryController::class, 'manageServiceCategory'])->name('manage-service-category');
    Route::get('/edit-service-category/{id}', [ServiceCategoryController::class, 'editServiceCategory'])->name('edit-service-category');
    Route::get('/delete-service-category/{id}', [ServiceCategoryController::class, 'deleteServiceCategory'])->name('delete-service-category');
    Route::post('/update-service-category/{id}', [ServiceCategoryController::class, 'updateServiceCategory'])->name('update-service-category');
    Route::post('/new-service-category', [ServiceCategoryController::class, 'newServiceCategory'])->name('new-service-category');

    //service

    Route::get('/add-service', [ServiceController::class, 'addService'])->name('add-service');
    Route::get('/manage-service', [ServiceController::class, 'manageService'])->name('manage-service');
    Route::get('/edit-service/{id}', [ServiceController::class, 'editService'])->name('edit-service');
    Route::get('/delete-service/{id}', [ServiceController::class, 'deleteService'])->name('delete-service');
    Route::post('/update-service/{id}', [ServiceController::class, 'updateService'])->name('update-service');
    Route::post('/new-service', [ServiceController::class, 'newService'])->name('new-service');
});
