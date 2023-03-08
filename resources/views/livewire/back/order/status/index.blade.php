<div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
    <div>
        <!-- Loader -->
        <div class="d-flex justify-content-center">
          <div wire:loading class="bar-loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>

        <div wire:loading.remove class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <button data-toggle="modal" data-target="#createModal"
                            wire:click="$emit('showCreateForm')"
                            class="btn btn-success">
                        <i class="mdi mdi-plus"></i>
                        Yeni Ekle
                    </button>
                </div>
                <table class="table table-hover table-responsive-lg">
                    <thead>
                    <tr>
                        <th>Durum</th>
                        <th>Renk</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($statuses as $index => $status)
                        <tr id="tr{{ $index }}">
                            <td>{{ $status->name }}</td>
                            <td>
                                <button class="btn btn-{{ $status->color }}">{{ $status->color }}</button>
                            </td>
                            <td>
                                <button data-toggle="modal" data-target="#editModal"
                                        wire:click="$emit('showEditForm',{{ $status }})"
                                        class="btn btn-rounded btn-warning btn-icon">
                                    <i class="mdi mdi-grease-pencil"></i>
                                </button>
                                @unless($status->id == 1)
                                    <button data-toggle="modal" data-target="#deleteModal"
                                            wire:click="$emit('showDeleteForm',{{ $status->id }}, {{ $index }})"
                                            class="btn btn-rounded btn-danger btn-icon">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                @endunless
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
