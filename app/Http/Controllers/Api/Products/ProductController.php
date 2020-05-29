<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Products;

use App\Dtos\ProductDto;
use App\Http\Requests\Product\CreateRequest;
use App\Service\ProductService;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProductController extends Controller
{
    private ProductService $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function store(CreateRequest $request): JsonResponse
    {
        $productDto = new ProductDto(
            $request->getName(),
            $request->getIntegerPrice()
        );

        $productId = $this->service->store($productDto);

        return new JsonResponse([
            'data' => [
                'id' => $productId,
            ],
        ], 201);
    }
}
