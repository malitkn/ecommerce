<?php

namespace App\View\Components\back\form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class checkbox extends Component
{
    public string $label;
    public string $name;
    public bool $isChecked;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name = '', string $label = '', bool $isChecked = false)
    {
        $this->label = $label;
        $this->name = $name;
        $this->isChecked = $isChecked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('components.back.form.checkbox');
    }
}
