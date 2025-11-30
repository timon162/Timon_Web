<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ProductInterfaceRepository;
use App\Models\ProductModel;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductInterfaceRepository
{
    public function getProduct()
    {
        $products = DB::table('Products')->get();
        return $products;
    }

    public function postProduct(array $data)
    {
        $products = DB::table('Products')
            ->where('id', $data['id'])
            ->where('quantity', '>', 0)
            ->decrement('quantity', 1);

        $productInfor = DB::table('Products')->where('id', $data['id'])->first();
        return $productInfor;
    }
}
