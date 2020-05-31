<?php

declare(strict_types=1);

namespace App\Models\Product;

class Price
{
    private float $price;

    public function __construct(float $price)
    {
        if($price < 0) {
            throw new \DomainException("Price can't be less than 0");
        }
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return round($this->price, 2);
    }

    public function getIntegerConvertedPrice(): int
    {
        return intval($this->getPrice() * 100);
    }
}
