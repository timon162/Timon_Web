<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\ProductInterfaceService;

class ProductController extends Controller
{

    public function __construct(protected ProductInterfaceService $productSevice) {}

    public function viewDetailProduct(Request $id)
    {
        $dataProduct = $this->productSevice->findProductByID($id['id']);

        return view('products.detail_product', [
            'dataProduct' => $dataProduct['idProduct'],
            'Option' => $dataProduct['Option'],
            'decriptionImgProduct' => $dataProduct['decriptionImgProduct'],
            'nameBuyOption' => $dataProduct['nameBuyOption'],
            'detailBuyOption' => $dataProduct['detailBuyOption']
        ]);
    }
}
