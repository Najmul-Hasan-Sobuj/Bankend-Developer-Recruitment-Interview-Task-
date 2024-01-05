<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
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
    public function rules(): array
    {
        $productId = $this->route('products'); // Assuming the product ID is a route parameter

        return [
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'name' => 'required|string|max:255',
            // 'slug' => [
            //     'required',
            //     'string',
            //     'max:255',
            //     Rule::unique('products')->ignore($productId),
            //     'different:sku',
            // ],
            // 'sku' => [
            //     'required',
            //     'string',
            //     'max:255',
            //     Rule::unique('products')->ignore($productId),
            //     'different:slug',
            // ],
            'quantity' => 'required|integer|min:0',
            'image' => [
                'sometimes',
                'mimes:jpeg,jpg,png,gif',
                'max:2048',
            ],
            'old_price' => 'required|numeric|min:0',
            'new_price' => ['required', 'numeric', 'min:0', function ($attribute, $value, $fail) {
                if ($value > $this->old_price) {
                    $fail($attribute . ' should be less than or equal to old price.');
                }
            }],
            'description' => 'nullable|string',
        ];
    }
}
