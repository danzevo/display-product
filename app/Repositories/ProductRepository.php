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

        // Filter berdasarkan tier
        if (!empty($filters['tier'])) {
            $tier = strtoupper($filters['tier']);
            
            // Filter produk dengan priceDetails yang cocok
            $query->whereHas('prices.priceDetails', function ($q) use ($tier) {
                $q->whereRaw('UPPER(tier) = ?', [$tier]);
            });
        }

        // Load produk beserta prices dan priceDetails
        $products = $query->with(['prices' => function ($priceQuery) use ($filters) {
            $priceQuery->with(['priceDetails' => function ($priceDetailQuery) use ($filters) {
                if (!empty($filters['tier'])) {
                    $tier = strtoupper($filters['tier']);
                    $priceDetailQuery->whereRaw('UPPER(tier) = ?', [$tier]);
                }
            }]);
        }])->get();

        \Log::info('Products Loaded: ', $products->toArray());
        
        return $products;
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