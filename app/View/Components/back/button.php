<?php

namespace App\View\Components\back;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    public string $color;
    public string $type;
    public string $isDisabled;



    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $color, string $type, bool $isDisabled = false)
    {
        $this->color = $color;
        $this->type = $type;
        $this->isDisabled = $isDisabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('components.back.button');
    }
}
