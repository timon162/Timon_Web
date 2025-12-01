<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\Interfaces\ProductInterfaceService;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\AddProductRequest;

class ProductController extends Controller
{

    public function __construct(protected ProductInterfaceService $productSevice) {}

    public function postProduct(ProductRequest $request): JsonResponse
    {
        $data = $this->productSevice->postProduct($request->validated());
        return response()->json($data);
    }
}
