<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ProductInterfaceRepository;
use App\Models\ProductModel;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductInterfaceRepository
{
    public function getProduct()
    {
        $products = DB::table('products')->get();
        return $products;
    }

    public function postProduct(array $data)
    {
        $products = DB::table('products')->insertGetId([
            'name_product' => $data['nameProduct'],
            'price' => $data['priceProduct'],
            'quantity' => $data['quantityProduct'],
            'image' => $data['imageProduct'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return $products;
    }
}
