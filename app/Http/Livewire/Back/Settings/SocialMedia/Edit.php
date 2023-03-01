<?php

namespace App\Http\Livewire\Back\Settings\SocialMedia;

use App\Models\SocialMedia;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Edit extends Component
{
    public bool $show = false;

    protected $listeners = [
        'toggleEditForm' => 'toggleEditForm',
    ];

    public ?int $socialMediaId = null;
    public string $name = '';
    public string $link = '';
    public string $icon = '';

    protected array $rules = [
        'name' => 'required',
        'link' => 'required',
        'icon' => 'required',
    ];

    public function toggleEditForm(SocialMedia $socialMedia): void
    {
        $this->reset([
            'socialMediaId',
            'name',
            'link',
            'icon',
            'show',
        ]);

        $this->socialMediaId = $socialMedia->id;
        $this->name = $socialMedia->name;
        $this->link = $socialMedia->link;
        $this->icon = $socialMedia->icon;

        $this->show = !$this->show;

    }

    public function render(): View
    {
        return view('livewire.back.settings.social-media.edit');
    }

    public function edit()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'link' => $this->link,
            'icon' => $this->icon
        ];

        $socialMedia = SocialMedia::find($this->socialMediaId);
        $socialMedia->fill($data);
        $socialMedia->save();

        $this->emit('edited', $socialMedia);
        toastr()->addSuccess('Hesap Başarıyla Düzenlendi!', 'Başarılı!');
    }
}
