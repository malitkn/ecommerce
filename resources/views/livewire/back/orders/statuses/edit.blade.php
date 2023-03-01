<div class="modal fade @if($show) show @endif" @if($show) style="display: block;" @endif id="editModal"
     aria-labelledby="editModal">
    <div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sipariş Durumunu Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="d-flex justify-content-center">
                        <div wire:loading class="bar-loader">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <form wire:submit.prevent="edit" class="forms-sample">

                        <div class="form-group">
                            <label for="name">Adı</label>
                            <input type="text" name="name" class="form-control" id="name" wire:model.defer="name">
                            @error('name')
                            <span
                                class="text-danger  animate__animated animate__fadeIn">{{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="color">Renk</label>

                            <select class="form-control" name="color" wire:model.defer="color" id="color">
                                <option value="">Renk seçin..</option>
                                @foreach($colors as $color)
                                    <option value="{{ $color }}">{{ $color }}</option>
                                @endforeach
                            </select>

                            @error('color')
                            <span
                                class="text-danger animate__animated animate__fadeIn">{{ $message }}
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
