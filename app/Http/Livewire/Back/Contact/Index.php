<?php

namespace App\Http\Livewire\Back\Contact;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';


    public array $selectedContacts = [];
    public bool $deleteSelectedContactsButton = true;
    public ?int $contactId = null;

    protected $listeners = [
        'sweetalertConfirmed' => 'deleteSelectedContacts',
    ];


    public function render(): View
    {
        return view('livewire.back.contact.index', [
            'contacts' => Contact::latest()->paginate(20),
        ]);
    }

    public function updatedSelectedContacts(): void
    {
        if (count($this->selectedContacts) == 0) {
            $this->deleteSelectedContactsButton = true;
        } else {
            $this->deleteSelectedContactsButton = false;
        }
    }

    public function confirmDeleteSelectedContacts(): void
    {
        if (count($this->selectedContacts) == 0) {
            sweetalert()
                ->confirmButtonText('Tamam')
                ->addError('En az 1 kayıt seçmelisiniz!', 'Hata!');
        } else {
            sweetalert()
                ->context(['event' => 'deleteSelected'])
                ->addPreset('selected_contacts_delete', ['count' => count($this->selectedContacts)]);

        }
    }

    public function confirmDelete($id): void
    {
        $this->contactId = $id;

        sweetalert()
            ->context(['event' => 'delete'])
            ->addPreset('contact_delete', ['count' => count($this->selectedContacts)]);
    }

    public function deleteSelectedContacts(array $payload)
    {
        $event = $payload['envelope']['context']['event'];
        if ($event == 'deleteSelected') {
            toastr()->addSuccess("(" . count($this->selectedContacts) . ") Kayıt başarıyla silindi.", 'Başarılı!');
            Contact::destroy($this->selectedContacts);
            $this->reset('selectedContacts');
        } elseif ($event == 'delete') {
            toastr()->addSuccess("Kayıt başarıyla silindi.", 'Başarılı!');
            Contact::findOrFail($this->contactId)
                ->delete();
            $this->reset('contactId');
        }
    }
}
