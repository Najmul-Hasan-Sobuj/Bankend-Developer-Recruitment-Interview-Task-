<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\SubCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'categories'      => Category::latest()->get(),
            'subCategories'   => SubCategory::latest()->get(),
        ];
        return view('admin.pages.category.index', $data);
    }

    public function categoryCreate()
    {
        return view('admin.pages.category.create');
    }

    public function categoryEdit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.pages.category.edit', compact('category'));
    }

    public function subCategoryCreate()
    {
        return view('admin.pages.subcategory.create', [
            'categorys'      => Category::latest()->get(),
        ]);
    }

    public function subCategoryEdit($id)
    {
        $data = [
            'categories' => Category::latest()->get(),
            'subcategory' => SubCategory::findOrFail($id),
        ];
        return view('admin.pages.subcategory.edit', $data);
    }

    public function getSubCategories(Request $request)
    {
        $subcategories = SubCategory::where('category_id', $request->category_id)->get();
        return response()->json($subcategories);
    }

    public function categoryStore(CategoryRequest $request)
    {
        Category::create([
            'name'        => $request->name,
        ]);
        flash()->addSuccess('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Update the specified resource in storage.
     */
    public function categoryUpdate(CategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name'        => $request->name,
        ]);

        flash()->addSuccess('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function categoryDestroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function subCategoryStore(SubCategoryRequest $request)
    {
        SubCategory::create([
            'category_id' => $request->category_id,
            'name'        => $request->name,
        ]);
        flash()->addSuccess('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Update the specified resource in storage.
     */
    public function subCategoryUpdate(SubCategoryRequest $request, string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->update([
            'category_id' => $request->category_id,
            'name'        => $request->name,
        ]);

        flash()->addSuccess('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function subCategoryDestroy(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();
    }
}
