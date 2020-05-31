<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Products;

use App\Dtos\ProductDto;
use App\Http\Requests\Product\CreateRequest;
use App\Service\ProductService;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use function GuzzleHttp\headers_from_lines;

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
            $request->getPrice()
        );

        $productId = $this->service->store($productDto);

        $response = new JsonResponse([
            'data' => [
                'id' => $productId,
            ],
        ], 201);

        $response->headers->set('Location', '/api/products/' . $productId);

        return $response;
    }
}
