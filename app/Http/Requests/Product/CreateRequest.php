<?php

declare(strict_types=1);

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:0|max:42949672.95', //max 4 bytes
        ];
    }

    public function getIntegerPrice(): int
    {
        return intval($this->get('price') * 100);
    }

    public function getName(): string
    {
        return $this->get('name');
    }
}
