<?php 
namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection; 

interface ProductInterface {
    public function getAll(array $filter): Collection;

    public function create(array $data);

    public function update(int $id, array $data);

    public function findById(int $id);
}