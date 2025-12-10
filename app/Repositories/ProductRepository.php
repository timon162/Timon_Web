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

    public function getLimitProduct($limit)
    {
        $products = DB::table('products')->take($limit)->get();
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

    public function createNewProduct(array $data, $url, $pathDecriptions)
    {
        $products = DB::table('products')->insertGetId([
            'name_product' => $data['name_create_product'],
            'price' => $data['price_create_product'],
            'quantity' => $data['quantity_create_product'],
            'code_product' => $data['code_create_product'],
            'decription' => $data['decription_create_product'],
            'image' => $url,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        foreach ($data['basicOptions'] as $opt) {
            DB::table('option_product')->insert([
                'id_product' => $products,
                'name_option' => $opt['name'],
                'detail_option' => $opt['detail'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        foreach ($data['buyOptions'] as $optb) {
            DB::table('option_product')->insert([
                'id_product' => $products,
                'name_option' => $optb['name'],
                'detail_option' => $optb['detail'],
                'price_option' => $optb['price'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        foreach ($pathDecriptions as $optb) {
            DB::table('img_products')->insert([
                'id_product' => $products,
                'img_decription' => $optb,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return $products;
    }

    public function getCountProduct()
    {
        $data = DB::table('products')->count();
        return $data;
    }

    public function findProductByID($id)
    {
        $data = DB::table('products')->find($id);
        return $data;
    }

    public function findOptionByIdProduct($id)
    {
        $data = DB::table('option_product')->where('id_product', $id)->where('price_option', null)->get();
        return $data;
    }

    public function findNameBuyOptionByIdProduct($id)
    {
        $data = DB::table('option_product')->where('id_product', $id)->whereNotNull('price_option')->distinct()
            ->pluck('name_option');
        return $data;
    }

    public function findDetailBuyOptionByIdProduct($id)
    {
        $data = DB::table('option_product')->where('id_product', $id)->whereNotNull('price_option')->get()
            ->groupBy('name_option');
        return $data;
    }

    public function findDecriptionImgByIdProduct($id)
    {
        $data = DB::table('img_products')->where('id_product', $id)->pluck('img_decription');
        return $data;
    }
}
