<?php

declare(strict_types=1);

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property int $price
 */
class Product extends Model
{
    public static function createNew(string $name, Price $price): self
    {
        $product = new self();
        $product->name = $name;
        $product->price = $price->getIntegerConvertedPrice();

        return $product;
    }

    public function getIntegerConvertedPrice(): int
    {
        return $this->price;
    }

    public function getPrice(): float
    {
        return round(($this->getIntegerConvertedPrice() / 100), 2);
    }
}
