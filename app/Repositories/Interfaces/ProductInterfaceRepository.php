<?php

namespace App\Repositories\Interfaces;

use App\Models\ProductModel;

interface ProductInterfaceRepository
{
    public function getProduct();

    public function postProduct(array $data);
}
