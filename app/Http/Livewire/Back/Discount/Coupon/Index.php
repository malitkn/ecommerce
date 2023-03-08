<?php

namespace App\Http\Livewire\Back\Discount\Coupon;

use App\Models\Coupon;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $activeCoupons;
    public Collection $expiredCoupons;
    public Collection $coupons;
    public string $tableAnimationClass = '';
    public string $show = 'active';

    protected $listeners = [
        'created' => 'created',
        'edited' => 'edited',
        'deleted' => 'deleted',
        'expiredCoupons' => 'getExpiredCoupons',
        'activeCoupons' => 'getActiveCoupons',
    ];

    public function mount()
    {
        $this->activeCoupons = Coupon::active()->latest('expires_at')->get();
        $this->expiredCoupons = Coupon::expired()->latest('expires_at')->get();

        $this->coupons = $this->activeCoupons;
    }

    public function deleted($index): void
    {
        $this->activeCoupons->forget($index);
    }

    public function edited(Coupon $coupon, $index)
    {
        if ($this->show === 'active') {
            if (Coupon::active()->find($coupon->id)) {
                $edited = $this->activeCoupons->find($coupon->id);
                $edited = $coupon;
            } else {
                $this->activeCoupons->forget($index);
                $this->expiredCoupons->push($coupon);
            }
            $this->coupons = $this->activeCoupons;
        } elseif ($this->show === 'expired') {
            if (Coupon::active()->find($coupon->id)) {
                $this->expiredCoupons->forget($index);
                $this->activeCoupons->push($coupon);
            } else {
                $edited = $this->activeCoupons->find($coupon->id);
                $edited = $coupon;
            }
            $this->coupons = $this->expiredCoupons;
        }


    }

    public function render(): View
    {
        return view('livewire.back.discount.coupon.index');
    }

    public function getExpiredCoupons()
    {
        $this->show = 'expired';
        $this->coupons = $this->expiredCoupons;
    }

    public function created(Coupon $coupon)
    {
        $this->activeCoupons->push($coupon);
        $this->coupons = $this->activeCoupons;
    }

    public function getActiveCoupons()
    {
        $this->show = 'active';
        $this->coupons = $this->activeCoupons;
    }


}
