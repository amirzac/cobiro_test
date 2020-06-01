<?php

declare(strict_types=1);

namespace App\Repository\Eloquent;

use App\Models\Product\Product;
use App\Repository\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function store(Product $product): int
    {
        $product->save();

        return $product->id;
    }
}
