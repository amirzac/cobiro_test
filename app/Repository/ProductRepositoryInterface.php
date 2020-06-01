<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\Product\Product;

interface ProductRepositoryInterface
{
    //if we used Doctrine instead of Active record, Product would just entity class
    public function store(Product $product): int;
}
