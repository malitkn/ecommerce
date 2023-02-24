<div class="{{ $columnClass }} animate__animated animate__fadeIn animate__slow grid-margin ">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <button wire:click="$emit('toggleCreateForm')" class="btn btn-success"><i class="mdi mdi-plus"></i>Yeni
                    Ekle
                </button>
            </div>
            <table class="table table-hover table-responsive-lg">
                <thead>
                <tr>
                    <th>Ad</th>
                    <th>İcon (Font Awesome)</th>
                    <th>İcon Görünümü</th>
                    <th>Link</th>
                    <th>Durum</th>
                    <th>Eklenme tarihi</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($socialMedias as $index => $socialMedia)
                    <tr id="tr{{ $index }}">
                        <td>{{ $socialMedia->name }}</td>
                        <td>{{ $socialMedia->icon }}</td>
                        <td><i class="{{ $socialMedia->icon }}"></i></td>
                        <td><label class="badge badge-danger">{{ $socialMedia->link }}</label></td>
                        <td>
                            <div wire:key="social-media-{{ $socialMedia->id }}" class="custom-control custom-switch">
                                <input id="status-{{ $socialMedia->id }}" type="checkbox"
                                       wire:click="changeStatus({{ $socialMedia->id }})"
                                       @if($socialMedia->status) checked @endif class="custom-control-input">
                                <label class="custom-control-label" for="status-{{ $socialMedia->id }}"></label>
                            </div>
                        </td>
                        <td>{{ $socialMedia->created_at }}</td>
                        <td>
                            <button data-toggle="modal" data-target="#editModal" wire:click="$emit('toggleEditForm',{{ $socialMedia }})" class="btn btn-rounded btn-warning btn-icon">
                                <i class="mdi mdi-grease-pencil"></i>
                            </button>

                            <button wire:click="delete({{ $socialMedia->id }},{{ $index }})" class="btn btn-rounded btn-danger btn-icon">
                                <i class="mdi mdi-delete"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




