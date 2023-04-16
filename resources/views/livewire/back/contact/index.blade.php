<div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
    <div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <x-back.button :is-disabled="$deleteSelectedContactsButton"
                                   wire:click="confirmDeleteSelectedContacts" type="button" color="danger">
                        <i class="mdi mdi-delete"></i>

                        Seçilileri Sil ({{ count($selectedContacts) }})
                    </x-back.button>
                </div>
                <x-back.table :table-type="'table-hover'"
                              :headers="['Seç', 'Ad Soyad', 'Başlık', 'Mesaj', 'Tarih', 'İşlemler']">
                    @foreach($contacts as $contact)
                        <tr>
                            <td>
                                <x-back.form.checkbox wire:model="selectedContacts" value="{{ $contact->id }}"/>
                            </td>
                            <td>{{ $contact->name }}</td>
                            <td title="{{ $contact->title }}">{{ $contact->textLimit('title', 40, 40)  }}</td>
                            <td>{{ $contact->textLimit('message', 40, 40) }}</td>
                            <td>{{ $contact->created_at->diffForHumans() }}</td>
                            <td>
                                <a class="text-decoration-none" href="{{ route('admin.contacts.show', $contact->id) }}">
                                    <x-back.button type="button" color="primary" class="btn-rounded btn-icon">
                                        <i class="mdi mdi-eye"></i>
                                    </x-back.button>
                                </a>

                                <x-back.button wire:click="confirmDelete({{ $contact->id }})" type="button"
                                               color="danger" class="btn-rounded btn-icon">
                                    <i class="mdi mdi-delete"></i>
                                </x-back.button>
                            </td>
                        </tr>
                    @endforeach
                </x-back.table>

                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</div>
