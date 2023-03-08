<div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin ">
    <div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">

                    <div wire:loading class="mr-auto">
                        <div class="spinner-border text-dark" role="status"></div>
                    </div>

                    <button @if($show == 'expired') disabled @endif data-toggle="modal" data-target="#createModal" wire:click="$emit('showCreateForm')"
                            class="btn btn-success mr-1">
                        <i class="mdi mdi-plus"></i>
                        Yeni Ekle
                    </button>

                    <div wire:loading.remove>
                        @if($show === 'active')
                            <button wire:click="$emit('expiredCoupons')"
                                    class="btn btn-danger ">
                                <i class="mdi mdi-archive"></i>
                                Süresi Tükenmiş Kuponlar
                            </button>
                        @elseif($show === 'expired')
                            <button wire:click="$emit('activeCoupons')"
                                    class="btn btn-dark ">
                                <i class="mdi mdi-format-list-bulleted"></i>
                                Aktif Kuponlar
                            </button>
                        @endif
                    </div>

                </div>
                <table class="table table-hover table-responsive-lg">
                    <thead>
                    <tr>
                        <th>Tür</th>
                        <th>Kod</th>
                        <th>Başlık</th>
                        <th>Tutar / Yüzde</th>
                        <th>Adet</th>
                        <th>Son Kullanım Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($coupons as $index => $coupon)
                        <tr id="tr{{ $index }}">
                            <td>@if($coupon->type) Yüzde / Oran (%) @else Net Tutar @endif</td>
                            <td>{{ $coupon->code }}</td>
                            <td>{{ $coupon->title }}</td>
                            <td>@if($coupon->type) {{ $coupon->rate }} @else {{ $coupon->price }} @endif</td>
                            <td>{{ $coupon->quantity }}</td>
                            <td>{{ \Carbon\Carbon::parse($coupon->expires_at)->format('d-m-Y') }}</td>
                            <td>
                                <button data-toggle="modal" data-target="#editModal"
                                        wire:click="$emit('showEditForm',{{ $coupon }}, {{ $index }})"
                                        class="btn btn-rounded btn-warning btn-icon">
                                    <i class="mdi mdi-grease-pencil"></i>
                                </button>

                                <button data-toggle="modal" data-target="#deleteModal"
                                        wire:click="$emit('showDeleteForm',{{ $coupon->id }}, {{ $index }})"
                                        class="btn btn-rounded btn-danger btn-icon">
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
</div>




