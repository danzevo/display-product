<?php
namespace App\Services;

use App\Interfaces\ProductInterface; 

class ProductService {
    protected $productRepository;

    public function __construct(ProductInterface $productInterface) {
        $this->productRepository = $productInterface;
    }

    public function getAllProduct(array $filters) {
        return $this->productRepository->getAll($filters);
    }

    public function createProduct(array $data) {
        return $this->productRepository->create($data);
    }

    public function updateProduct(int $id, array $data) {
        return $this->productRepository->update($id, $data);
    }

    public function findById(int $id) {
        return $this->productRepository->findById($id);
    }
}