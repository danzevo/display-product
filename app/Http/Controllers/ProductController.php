<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }

    public function index(Request $request) {
        $filters = $request->only(['name', 'product_category', 'tier']);
        $products = $this->productService->getAllProduct($filters);
        return response()->json($products);
    }
    
    public function store(Request $request) {
        /* $validate = $request->validate([
                        'name' => 'required|string|max:150',
                        'product_category' => 'required|in:Rokok,Obat,Lainnya',
                        'description' => 'nullable|string|max:255'
                    ]); */
        // Log validation success
        // \Log::info('Validation passed:', $request);

        $data =  array (
            'name' => $request->name,
            'product_category' => $request->product_category,
            'description' => $request->description,
        );

        $products = $this->productService->createProduct($data);
        return response()->json($products);
    }

    public function update(Request $request, int $id) {
        /* $validate = $request->validate([
            'name' => 'sometimes|string|max:150',
            'product_category' => 'required|in:Rokok,Obat,Lainnya',
            'description' => 'nullable|string|max:255'
        ]); */
        $data =  array (
            'name' => $request->name,
            'product_category' => $request->product_category,
            'description' => $request->description,
        );
        $products = $this->productService->updateProduct($id, $data);
        return response()->json($products);
    }
}
