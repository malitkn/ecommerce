<?php

namespace App\Services;

use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;

class ProductService
{
    public function getCategories(): array
    {
        $categories = Category::all('id', 'name')->toArray();
        return Arr::pluck($categories, 'name', 'id');
    }

    public function getAttributes(): Collection
    {
        return Attribute::has('values')->get();
    }
}
