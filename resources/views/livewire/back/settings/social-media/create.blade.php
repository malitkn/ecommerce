<div class="col-lg-4 grid-margin {{ $columnClass }}">
    <div>
    @if($show)
        <div class="card">
            <div class="d-flex justify-content-end">
                <button class="btn"><i wire:click="$emit('toggleCreateForm')" class="mdi mdi-window-close mdi-24px"></i></button>
            </div>
            <div class="card-body">
                <h4 class="card-title">Sosyal Medya Ekle</h4>
                <form wire:submit.prevent="create" class="forms-sample">
                    <div class="form-group">
                        <label for="name">Sosyal Medya Adı</label>
                        <input type="text" name="name" class="form-control" id="name" wire:model="name">
                        @error('name') <span class="text-danger  animate__animated animate__fadeIn">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control" id="link" wire:model="link">
                        @error('link') <span class="text-danger animate__animated animate__fadeIn">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="icon">İcon (Font Awesome)</label>
                        <input type="text" name="icon" class="form-control" id="icon" wire:model="icon">
                        @error('icon') <span class="text-danger animate__animated animate__fadeIn">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Ekle</button>
                </form>
            </div>
        </div>
    @endif
    </div>
</div>

