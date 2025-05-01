<?php
// app/Providers/ExtendedControllersServiceProvider.php

namespace Malpersaz\BagistoFixCategories\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\API\ExtendedCategoryController;
use Malpersaz\BagistoFixCategories\Http\Controllers\API\ExtendedCategoryController;
use Webkul\Shop\Http\Controllers\API\CategoryController;

class ExtendedControllersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       /* $this->app->bind(\Webkul\Shop\Http\Controllers\API\CategoryController::class, function ($app) {
            return $app->make(ExtendedCategoryController::class);
        });
        */
        $this->app->bind(\Webkul\Shop\Http\Controllers\API\CategoryController::class, function ($app) {
            return $app->make(ExtendedCategoryController::class);
        });
  
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Alternatif olarak rotaları özelleştirebilirsiniz
        /*
        Route::prefix('api/shop')->group(function () {
            Route::get('categories/attributes', [ExtendedCategoryController::class, 'getAttributes'])
                ->name('shop.api.categories.attributes');
        });
        */
    }
}