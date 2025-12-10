<?php

namespace App\Services\Interfaces;

interface ProductInterfaceService
{
    public function getProduct();
    public function getLimitProduct($limit);
    public function getCountProduct();
    public function postProduct(array $data);
    public function createNewProduct(array $data, $url, $pathDecriptions): array;
    public function findProductByID($id);
}
