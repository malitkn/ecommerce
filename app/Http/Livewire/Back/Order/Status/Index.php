<?php

namespace App\Http\Livewire\Back\Order\Status;

use App\Models\OrderStatus;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $statuses;

    protected $listeners = [
        'created' => 'created',
        'edited' => 'edited',
        'deleted' => 'deleted',
    ];

    public function mount()
    {
        $this->statuses = OrderStatus::all();
    }

    public function created(OrderStatus $orderStatus): void
    {
        $this->statuses->push($orderStatus);
    }

    public function edited(OrderStatus $orderStatus)
    {
        $edited = $this->statuses->find($orderStatus->id);
        $edited = $orderStatus;
    }

    public function deleted($index): void
    {
        $this->statuses->forget($index);
    }

    public function render(): View
    {
        return view('livewire.back.order.status.index');
    }


}
