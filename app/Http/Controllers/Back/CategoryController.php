<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\CategoryStoreRequest;
use App\Http\Requests\Back\CategoryUpdateRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CategoryController extends Controller
{
    /**
     * @var \App\Services\CategoryService
     */
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(): View
    {
        return view('back.category.index');
    }

    public function create()
    {
        $categories = $this->categoryService->create();
        return view('back.category.create', compact('categories'));
    }

    public function store(CategoryStoreRequest $request)
    {
        $this->categoryService->store($request);
        toastr()->addPreset('success');
        return redirect()->back();
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('back.category.edit', compact('category'));
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $this->categoryService->update($request, $category);

        toastr()->addPreset('success');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $affectedProductCount = $this->categoryService->destroy($id);
        toastr()->addPreset('category_deleted', [
            'count' => $affectedProductCount,
        ]);

        return redirect()->back();

    }
}
