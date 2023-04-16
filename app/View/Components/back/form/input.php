<?php

namespace App\View\Components\back\form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public string $name;
    public string $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('components.back.form.input');
    }
}
