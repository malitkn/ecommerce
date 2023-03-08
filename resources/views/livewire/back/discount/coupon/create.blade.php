<div class="modal fade @if($show) show @endif" @if($show) style="display: block;" @endif id="createModal"
     aria-labelledby="createModal">
    <div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kupon Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="d-flex justify-content-center">
                        <div wire:loading class="mr-auto">
                            <div class="spinner-border spinner-border-sm text-dark" role="status"></div>
                        </div>
                    </div>
                    <form wire:submit.prevent="create" class="forms-sample">

                        <div class="form-group">
                            <label for="type">Kupon Türü</label>

                            <select class="form-control" wire:model="type" id="type">
                                <option value="">Kupon Türü Seçin..</option>
                                @foreach($types as $type)
                                    <option value="{{ $type['value'] }}"> {{ $type['name'] }}</option>
                                @endforeach
                            </select>

                            @error('type')
                            <span
                                class="text-danger  animate__animated animate__fadeIn">{{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="code">Kod</label>

                            <input class="form-control" type="text" id="code" wire:model="code">

                            @error('code')
                            <span
                                class="text-danger animate__animated animate__fadeIn">{{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Başlık</label>

                            <input class="form-control" type="text" id="title" wire:model="title">

                            @error('title')
                            <span
                                class="text-danger animate__animated animate__fadeIn">{{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="quantity">Adet</label>

                            <input class="form-control" type="number" id="title" wire:model="quantity">

                            @error('quantity')
                            <span
                                class="text-danger animate__animated animate__fadeIn">{{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="{{ $typeName }}">İndirim Tutarı / Oranı</label>

                            <input class="form-control" type="number" id={{ $typeName }} wire:model="{{ $typeName }}">

                            @error($typeName)
                            <span
                                class="text-danger animate__animated animate__fadeIn">{{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="min_basket_price">Minimum Sepet Tutarı</label>

                            <input class="form-control" type="number" id="min_basket_price" wire:model="min_basket_price">

                            @error('min_basket_price')
                            <span
                                class="text-danger animate__animated animate__fadeIn">{{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="expires_at">Bitiş Tarihi</label>
                            <!-- Date Picker -->
                            <div class="datepicker date input-group">
                                <input onchange="this.dispatchEvent(new InputEvent('input'))" type="text" wire:model="expires_at" class="form-control" id="expires_at">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <!-- // Date Picker -->
                            @error('expires_at')
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
