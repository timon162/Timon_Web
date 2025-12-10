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

    public function getLimitProduct($limit)
    {
        return $this->productRepository->getLimitProduct($limit);
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

    public function createNewProduct(array $data, $url, $pathDecriptions): array
    {
        $data = $this->productRepository->createNewProduct($data, $url, $pathDecriptions);
        if (!$data) {
            return [
                'data' => null,
                'mess' => 'tạo sản phẩm thất bại'
            ];
        }
        return [
            'data' => $data,
            'mess' => 'tạo sản phẩm thành công'
        ];
    }

    public function getCountProduct()
    {
        return $this->productRepository->getCountProduct();
    }

    public function findProductByID($id)
    {
        $Option = $this->productRepository->findOptionByIdProduct($id);

        $nameBuyOption = $this->productRepository->findNameBuyOptionByIdProduct($id);
        $detailBuyOption = $this->productRepository->findDetailBuyOptionByIdProduct($id);
        $decriptionImgProduct = $this->productRepository->findDecriptionImgByIdProduct($id);

        $idProduct = $this->productRepository->findProductByID($id);
        return [
            'Option' => $Option,

            'nameBuyOption' => $nameBuyOption,
            'decriptionImgProduct' => $decriptionImgProduct,
            'detailBuyOption' => $detailBuyOption,
            'idProduct' => $idProduct
        ];
    }
}
