<?php

namespace App\Services;

use App\Services\Interfaces\ProductInterfaceService;
use App\Repositories\Interfaces\ProductInterfaceRepository;

class ProductService implements ProductInterfaceService
{
    public function __construct(protected ProductInterfaceRepository $productRepository) {}

    public function getProduct()
    {
        return $this->productRepository->getProduct();
    }

    public function postProduct(array $data)
    {
        $dataProduct = $this->productRepository->postProduct($data);
        if (!$dataProduct) {
            return [
                'mess' => 'lỗi thêm sp',
                'dataProduct' => null,
            ];
        }
        return [
            'mess' => 'thêm sản phẩm thành công',
            'dataProduct' => $dataProduct,
        ];
    }
}
