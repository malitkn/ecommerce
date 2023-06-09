<?php


namespace App\Services;


use App\Http\Requests\Back\CategoryStoreRequest;
use App\Http\Requests\Back\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Support\Arr;

class CategoryService
{
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $data = array_merge($request->except('status'), [ 'status' => $request->boolean('status')]);
        $category->update($data);
    }

    public function destroy($id): int
    {
        $category = Category::find($id);
        $affectedProductsCount = $category->products()->update(['category_id' => null]);
        $category->delete();
        return $affectedProductsCount;
    }

    public function create(): array
    {
        $categories = Category::all('id', 'name')->toArray();
        return Arr::pluck($categories, 'name', 'id');
    }

    public function store(CategoryStoreRequest $request): Category
    {
        $data = $request->except('name', 'slug', 'category_id');
        $data = Arr::add($data, 'parent', $request->input('parent', null));
        $data = array_merge($data, $request->validated());

        return Category::create($data);
    }
}
