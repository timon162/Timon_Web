<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\Interfaces\ProductInterfaceService;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function __construct(protected ProductInterfaceService $productService) {}

    public function viewUser()
    {
        $data = $this->productService->getProduct();
        return view('user.user_view', ['data' => $data]);
    }

    public function postProduct(ProductRequest $request): JsonResponse
    {
        $data = $this->productService->postProduct($request->validated());
        return response()->json($data);
    }
}
