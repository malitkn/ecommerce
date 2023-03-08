<?php

namespace App\Http\Livewire\Back\Order\Status;

use App\Models\OrderStatus;
use Livewire\Component;

class Edit extends Component
{
    public ?int $statusId = null;
    public string $name = '';
    public string $color = 'Renk Seçin..';

    public array $colors = ['info', 'primary', 'secondary', 'success', 'danger', 'warning', 'light', 'dark', 'link'];
    public bool $show = false;

    protected $listeners = [
        'showEditForm' => 'show',
    ];

    protected array $rules = [
        'name' => 'required',
        'color' => 'required',
    ];

    public function show(OrderStatus $orderStatus): void
    {
        $this->statusId = $orderStatus->id;
        $this->name = $orderStatus->name;
        $this->color = $orderStatus->color;

        $this->show = true;
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($property): void
    {
        $this->validateOnly($property);
    }

    public function edit(): void
    {
        $this->validate();

        $status = OrderStatus::find($this->statusId);
        $status->name = $this->name;
        $status->color = $this->color;
        $status->save();


        $this->emit('edited', $status);
        toastr()->addSuccess('Hesap Başarıyla Düzenlendi!', 'Başarılı!');
    }

    public function render()
    {
        return view('livewire.back.order.status.edit');
    }
}
