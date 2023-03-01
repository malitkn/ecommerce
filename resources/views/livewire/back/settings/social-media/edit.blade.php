<div class="modal fade @if($show) show @endif" @if($show) style="display: block;" @endif id="editModal" aria-labelledby="editModalLabel">
   <div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="edit" class="forms-sample">

                    <div class="form-group">
                        <label for="name">Sosyal Medya Adı</label>
                        <input type="text" name="name"  class="form-control" id="name" wire:model.defer="name">
                        @error('name') <span class="text-danger  animate__animated animate__fadeIn">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control" id="link" wire:model.defer="link">
                        @error('link') <span class="text-danger animate__animated animate__fadeIn">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="icon">İcon (Font Awesome)</label>
                        <input type="text" name="icon" class="form-control" id="icon" wire:model.defer="icon">
                        @error('icon') <span class="text-danger animate__animated animate__fadeIn">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                </form>
            </div>
        </div>
    </div>
   </div>
</div>

