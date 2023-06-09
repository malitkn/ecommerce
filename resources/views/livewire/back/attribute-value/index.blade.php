<div class="row">
    <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a class="text-decoration-none" href="{{ route('admin.attribute-values.create') }}">
                        <x-back.button type="button" color="success"><i class="mdi mdi-new-box"></i> Oluştur </x-back.button>
                    </a>
                </div>
                <x-back.table :table-type="'table-hover'" :headers="['Adı', 'Resim','Kodu', 'İşlemler']">
                    @foreach($attributeValues as $attributeValue)
                        <tr>
                            <td>{{ $attributeValue->name }}</td>
                            <td><img height="80" src="{{ $attributeValue->image}}"></td>
                            <td>{{ $attributeValue->code }}</td>
                            <td>
                                <a class="text-decoration-none" href="{{ route('admin.attribute-values.edit', $attributeValue->id) }}">
                                    <x-back.button type="button" color="warning" class="btn-rounded btn-icon">
                                        <i class="mdi mdi-border-color mdi-18px"></i>
                                    </x-back.button>
                                </a>
                                <x-back.button wire:click="confirmDelete({{ $attributeValue->id }})" type="submit" color="danger" class="btn-rounded btn-icon">
                                    <i class="mdi mdi-delete mdi-18px"></i>
                                </x-back.button>
                            </td>
                        </tr>
                    @endforeach
                </x-back.table>

                {{ $attributeValues->links() }}
            </div>
        </div>
    </div>
</div>
