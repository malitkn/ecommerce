<?php

namespace App\Http\Livewire\Back\Settings\SocialMedia;

use App\Models\SocialMedia;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $socialMedias;
    public string $columnClass = 'col-lg-12';
    public bool $status;

    protected $listeners = [
        'toggleCreateForm' => 'toggleCreateForm',
        'socialMediaCreated' => 'created',
    ];


    public function mount(): void
    {
        $this->socialMedias = SocialMedia::all();
    }

    public function render(): View
    {
        return view('livewire.back.settings.social-media.index');
    }

    public function toggleCreateForm(): void
    {
        if ($this->columnClass === 'col-lg-12') {
            $this->columnClass = 'col-lg-8';
        } else {
            $this->columnClass = 'col-lg-12';
        }
    }

    public function created(SocialMedia $data): void
    {
        $this->socialMedias->push($data);
    }

    public function changeStatus($id): void
    {
        $socialMedia = SocialMedia::find($id);
        $socialMedia->status = !$socialMedia->status;
        $socialMedia->save();

        toastr()->addSuccess('Hesap Durumu Değiştirildi!', 'Başarılı!');
    }

    public function delete($id,$index): void
    {
        SocialMedia::find($id)->delete();
        $this->socialMedias->forget($index);
        toastr()->addSuccess("$id Nolu Kayıt Silindi", 'Başarılı!');
    }
}
