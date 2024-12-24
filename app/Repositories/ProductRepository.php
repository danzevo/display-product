<?php 
namespace App\Repositories;

use App\Interfaces\ProductInterface;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductInterface {
    protected $model;

    public function __construct(Product $model) {
        $this->model = $model;
    }

    public function getAll(array $filters): Collection
    {
        $query = $this->model->query();

        if(!empty($filters['name'])) {
            $query->whereRaw('UPPER(name) like ? ', ['%'. strtoupper($filters['name']) .'%']);
        }

        if(!empty($filters['product_category'])) {
            $query->whereRaw('UPPER(product_category) = ? ', [strtoupper($filters['product_category'])]);
        }

        if(!empty($filters['tier'])) {
            // Filter products where at least one 'priceDetails' has the matching tier
            $query->whereHas('prices.priceDetails', function ($q) use ($filters) {
                $q->whereRaw('UPPER(tier) = ?', [strtoupper($filters['tier'])]);
            });

            // Eager load prices and priceDetails where the 'tier' matches
            $query->with(['prices' => function ($query) use ($filters) {
                $query->with(['priceDetails' => function ($q) use ($filters) {
                    $q->whereRaw('UPPER(tier) = ?', [strtoupper($filters['tier'])]);
                }]);
            }]);
        }

        // Log the query before executing it
        \Log::info('Executed Query: ' . $query->toSql(), $query->getBindings());

        return $query->with(['prices.priceDetails'])->get();
    }

    public function create(array $data) {
        return $this->model->create($data);
    }

    public function update(int $id, array $data) {
        $product = $this->findById($id);
        $product->update($data);

        return $product;
    }

    public function findById(int $id) {
        return $this->model->findOrFail($id);
    }
}