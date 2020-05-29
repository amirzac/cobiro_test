<?php

namespace App\Providers;

use App\Repository\Product\ProductRepository;
use App\Repository\Product\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        ProductRepositoryInterface::class => ProductRepository::class,
    ];
}
