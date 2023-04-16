<?php


namespace App\Services;


use App\Http\Requests\Back\CategoryUpdateRequest;
use App\Models\Category;

class CategoryService
{
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->update($request->all());
    }
}
