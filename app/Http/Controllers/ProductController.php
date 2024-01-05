<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.product.index', [
            'products' => Product::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view("admin.pages.product.create", [
            'categorys' => Category::get(['id', 'name']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {

        $mainImageFile = $request->file('image');
        $mainImagePath = storage_path('app/public/');
        $mainImage = null;

        if (!empty($mainImageFile)) {
            $uploadMainImage = customUpload($mainImageFile, $mainImagePath);
            if ($uploadMainImage['status'] == 1) {
                $mainImage = $uploadMainImage['file_name'];
            }
        }
        Product::create([
            'category_id'     => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name'            => $request->name,
            'sku'             => $request->sku,
            'quantity'        => $request->quantity,
            'image'           => $mainImage,
            'old_price'       => $request->old_price,
            'new_price'       => $request->new_price,
            'description'     => $request->description,
        ]);
        flash()->addSuccess('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.pages.product.show', [
            'product' => Product::latest()->find($id),
            'categorys' => Category::get(['id', 'name']),

        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.product.edit', [
            'product' => Product::latest()->find($id),
            'categories' => Category::get(['id', 'name']),
            'subcategories' => SubCategory::get(['id', 'name']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        $mainImageUpdate = false;

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath);

            if ($globalFunImage['status'] == 1) {
                $mainImageUpdate = true;
                $oldImagePath = $filePath . $product->image;
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $product->update([
            'category_id'     => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name'            => $request->name,
            'sku'             => $request->sku,
            'quantity'        => $request->quantity,
            'image'       => $mainImageUpdate ? $globalFunImage['file_name'] : $product->image,
            'old_price'       => $request->old_price,
            'new_price'       => $request->new_price,
            'description'     => $request->description,
        ]);

        flash()->addSuccess('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $product->image,
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $product->delete();
    }
}
