<div class="modal fade @if($show) show @endif" @if($show) style="display: block;" @endif id="deleteModal" aria-labelledby="deleteModal">
    <div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kupon Sil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Loader -->
                    <div class="d-flex justify-content-center">
                        <div wire:loading class="bar-loader">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    {{ $couponId }} Nolu sipariş durumunu silmek istediğinize emin misiniz ?
                </div>
                <div class="modal-footer">
                    <button wire:click="delete" type="button" data-dismiss="modal" class="btn btn-dark mr-2">Sil</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                </div>
            </div>
        </div>
    </div>
</div>
