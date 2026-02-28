<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductService::class, function ($app) {
            $products=[
                ['id' => 1, 'name' => 'Product 1', 'category' => 'Electronics'],
                ['id' => 2, 'name' => 'Product 2', 'category' => 'Clothing'],
                ['id' => 3, 'name' => 'Product 3', 'category' => 'Books'],
            ];
            return new ProductService($products);
        });
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        view()->share('productKey', 'abc123');
       
    }
}
