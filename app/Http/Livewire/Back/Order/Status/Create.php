<?php

namespace App\Http\Livewire\Back\Order\Status;

use App\Models\OrderStatus;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Create extends Component
{
    public string $name = '';
    public string $color;
    public array $colors = ['info', 'primary', 'secondary', 'success', 'danger', 'warning', 'light', 'dark', 'link'];

    public bool $show = false;

    protected $listeners = [
        'showCreateForm' => 'show',
    ];

    protected array $rules = [
        'name' => 'required',
        'color' => 'required',
    ];

    public function render(): View
    {
        return view('livewire.back.order.status.create');
    }

    public function show(): void
    {
        $this->show = true;
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($property): void
    {
        $this->validateOnly($property);
    }

    public function create(): void
    {
        $this->validate();

        $status = new OrderStatus();
        $status->name = $this->name;
        $status->color = $this->color;
        $status->save();

        $status = OrderStatus::find($status->id);

        $this->emit('created', $status);
        $this->reset('name');

        toastr()->addSuccess('Sipariş Durumu Oluşturuldu!', 'Başarılı!');
    }
}
