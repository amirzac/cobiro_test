<?php

declare(strict_types=1);

namespace App\Service;

use App\Dtos\ProductDto;
use App\Models\Product\Price;
use App\Models\Product\Product;
use App\Repository\ProductRepositoryInterface;

class ProductService
{
    private ProductRepositoryInterface $products;

    public function __construct(ProductRepositoryInterface $products)
    {
        $this->products = $products;
    }

    public function store(ProductDto $productDto): int
    {
        $product = Product::createNew(
            $productDto->getName(),
            new Price($productDto->getPrice())
        );

        return $this->products->store($product);
    }
}
