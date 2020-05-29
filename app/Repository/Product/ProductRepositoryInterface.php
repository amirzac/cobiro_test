<?php

declare(strict_types=1);

namespace App\Repository\Product;

use App\Dtos\ProductDto;

interface ProductRepositoryInterface
{
    public function store(ProductDto $productDto): int;
}
