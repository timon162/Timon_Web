<?php

namespace App\Repositories\Interfaces;

use App\Models\ProductModel;

interface ProductInterfaceRepository
{
    public function getProduct();
    public function getLimitProduct($limit);
    public function getCountProduct();

    public function postProduct(array $data);
    public function createNewProduct(array $data, $url, $pathDecriptions);

    public function findProductByID($id);
    public function findOptionByIdProduct($id);
    public function findNameBuyOptionByIdProduct($id);
    public function findDetailBuyOptionByIdProduct($id);
    public function findDecriptionImgByIdProduct($id);
}
