<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Services\Interfaces\ProductInterfaceService;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\NewProductRequest;
use Symfony\Component\HttpFoundation\Request;

class AdminProductController extends Controller
{
    public function __construct(protected ProductInterfaceService $productSevice) {}

    public function viewAdminProduct()
    {
        return view("admins.admin_products.information_product");
    }

    public function viewAdminCreateProduct()
    {
        return view("admins.admin_products.create_product");
    }

    public function postProduct(ProductRequest $request): JsonResponse
    {
        $data = $this->productSevice->postProduct($request->validated());
        return response()->json($data);
    }

    public function createNewProduct(NewProductRequest $request)
    {
        $pathDecriptions = [];

        foreach ($request->file('imgDescription') as $file) {
            $path = $file->store('decription-imgs', 'public');
            $urlDecriptions = asset('storage/' . $path);
            $pathDecriptions[] = $urlDecriptions;
        }
        $path = $request->file('file_main_img_product')->store('products', 'public');
        $url = asset('storage/' . $path);
        $data = $this->productSevice->createNewProduct($request->validated(), $url, $pathDecriptions);
        return response()->json($data);
    }

    public function viewInformationProduct()
    {
        $dataProduct = $this->productSevice->getLimitProduct(10);
        $countProduct = $this->productSevice->getCountProduct();
        return view("admins.admin_products.information_product", ['dataProduct' => $dataProduct, 'countProduct' => $countProduct]);
    }

    public function postLimitProduct(Request $request)
    {
        $limit = $request->limit;
        return $this->productSevice->getLimitProduct($limit);
    }
}
