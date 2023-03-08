<?php

namespace App\Http\Livewire\Back\Discount\Coupon;

use App\Models\Coupon;
use Livewire\Component;

class Delete extends Component
{
    public int $couponId;
    public int $index;

    public bool $show = false;

    public function render()
    {
        return view('livewire.back.discount.coupon.delete');
    }

    protected $listeners = [
        'showDeleteForm' => 'show',
    ];

    public function show($CouponId, $index): void
    {
        $this->couponId = $CouponId;
        $this->index = $index;

        $this->show = true;
    }

    public function delete(): void
    {
        Coupon::find($this->couponId)->delete();
        $this->emit('deleted',$this->index);

        $this->show = false;
        toastr()->addSuccess("$this->couponId Nolu Kayıt Silindi", 'Başarılı!');
    }
}
