<?php

namespace App\Http\Livewire\Back\Category;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use withPagination;

    protected $paginationTheme = 'bootstrap';

    public function render(): View
    {
        return view('livewire.back.category.index', [
            'categories' => Category::paginate(20)
        ]);
    }

    public function toggleStatus($id)
    {
        $toggleCategory = Category::find($id);
        $toggleCategory->status = !$toggleCategory->status;
        $toggleCategory->save();

        sweetalert()->addSuccess('Görünürlük değiştirildi!');
    }
}
