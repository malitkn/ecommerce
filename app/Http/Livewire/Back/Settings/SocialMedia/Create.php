<?php

namespace App\Http\Livewire\Back\Settings\SocialMedia;

use App\Models\SocialMedia;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    public bool $show = false;
    public string $columnClass;
    protected $listeners = ['toggleCreateForm' => 'toggleCreateForm'];

    public string $name = '';
    public string $link = '';
    public string $icon = '';

    protected array $rules = [
        'name' => 'required',
        'link' => 'required',
        'icon' => 'required',
    ];


    public function toggleCreateForm(): void
    {
        $this->reset([
            'name',
            'link',
            'icon',
        ]);

        $this->show = !$this->show;
        if ($this->show) {
            $this->columnClass = 'animate__animated animate__fadeIn';
        } else {
            $this->columnClass = 'animate__animated animate__fadeOut';
        }
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

        $data = [
            'name' => $this->name,
            'link' => $this->link,
            'icon' => $this->icon
        ];

        $socialMedia = new SocialMedia();
        $socialMedia->fill($data);
        $socialMedia->save();

        $socialMedia = SocialMedia::find($socialMedia->id);

        $this->emit('created', $socialMedia);
        $this->resetExcept('show','columnClass');
        toastr()->addSuccess('Hesap Başarıyla Eklendi!','Başarılı!');
    }
}



