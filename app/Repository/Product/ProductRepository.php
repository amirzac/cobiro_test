<?php

declare(strict_types=1);

namespace App\Repository\Product;

use App\Dtos\ProductDto;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function store(ProductDto $productDto): int
    {
        $model = Product::create([
            'name' => $productDto->getName(),
            'price' => $productDto->getPrice(),
        ]);

        return $model->id;
    }
}
