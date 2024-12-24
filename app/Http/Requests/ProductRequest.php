<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:150',
            'product_category' => 'required|in:Rokok,Obat,Lainnya',
            'description' => 'nullable|string|max:255',
        ];
    }

    /* public function message(): array
    {
        return [
            'name.required' => 'Product name is required.',
            'product_category.required' => 'Product category is required.',
            'product_category.in' => 'Product category must be one of : Rokok, Obat, Lainnya.',
        ];
    } */
}
