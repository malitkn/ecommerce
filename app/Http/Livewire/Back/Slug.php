<?php

namespace App\Http\Livewire\Back;

use Illuminate\Support\Str;
use Livewire\Component;

class Slug extends Component
{
    public $name = '';
    public $slug = '';
    public $title = '';
    public $slugTitle = '';

    public function render()
    {
        return view('livewire.back.slug');
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
        $this->dispatchBrowserEvent('slugUpdated', $this->slug);
    }
}
