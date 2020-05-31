<?php

declare(strict_types=1);

namespace App\Repository\Product;

use App\Dtos\ProductDto;
use App\Models\Product\Price;
use App\Models\Product\Product;

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
