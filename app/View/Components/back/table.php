<?php

namespace App\View\Components\back;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class table extends Component
{
    public array $headers;
    public string $tableType;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $headers, string $tableType)
    {
        $this->headers = $headers;
        $this->tableType = $tableType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('components.back.table');
    }
}
