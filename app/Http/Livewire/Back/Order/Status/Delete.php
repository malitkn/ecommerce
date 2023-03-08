<?php

namespace App\Http\Livewire\Back\Order\Status;

use App\Models\OrderStatus;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Delete extends Component
{
    public int $statusId;
    public int $index;

    public bool $show = false;

    protected $listeners = [
        'showDeleteForm' => 'show',
    ];

    public function show($orderStatusId, $index): void
    {
        $this->statusId = $orderStatusId;
        $this->index = $index;

        $this->show = true;
    }

    public function delete(): void
    {
        OrderStatus::find($this->statusId)->delete();
        $this->emit('deleted',$this->index);

        $this->show = false;
        toastr()->addSuccess("$this->statusId Nolu Kayıt Silindi", 'Başarılı!');
    }

    public function render(): View
    {
        return view('livewire.back.order.status.delete');
    }
}
