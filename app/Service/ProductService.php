<?php

declare(strict_types=1);

namespace App\Service;

use App\Dtos\ProductDto;
use App\Repository\Product\ProductRepositoryInterface;

class ProductService
{
    private ProductRepositoryInterface $products;

    public function __construct(ProductRepositoryInterface $products)
    {
        $this->products = $products;
    }

    public function store(ProductDto $productDto): int
    {
        return $this->products->store($productDto);
    }
}
