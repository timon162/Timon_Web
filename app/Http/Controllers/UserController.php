<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\Interfaces\ProductInterfaceService;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function __construct(
        protected ProductInterfaceService $productService
    ) {}

    public function userView()
    {
        $dataProduct = $this->productService->getProduct();

        return view('user.home', ['dataProduct' => $dataProduct]);
    }

    public function adminView()
    {
        $dataProduct = $this->productService->getProduct();
        return view('admins.home', ['dataProduct' => $dataProduct]);
    }
}
