<?php

declare(strict_types=1);

namespace App\Repository\Eloquent;

use App\Dtos\ProductDto;
use App\Models\Product\Price;
use App\Models\Product\Product;
use App\Repository\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function store(ProductDto $productDto): int
    {
        $model = Product::createNew(
            $productDto->getName(),
            new Price($productDto->getPrice())
        );
        $model->save();

        return $model->id;
    }
}
