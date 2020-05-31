<?php

namespace App\Providers;

use App\Repository\Eloquent\ProductRepository;
use App\Repository\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        ProductRepositoryInterface::class => ProductRepository::class,
    ];
}
