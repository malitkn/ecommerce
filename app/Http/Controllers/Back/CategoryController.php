<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\CategoryUpdateRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::paginate(20);
        return view('back.category.index', compact('categories'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
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
        (new CategoryService())->update($request, $category);

        toastr()->addSuccess('','Başarılı');
        return redirect()->back();
    }

    public function destroy($id)
    {

    }
}
