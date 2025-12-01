<?php

namespace App\Services\Interfaces;

interface ProductInterfaceService
{
    public function getProduct();
    public function postProduct(array $data);
}
