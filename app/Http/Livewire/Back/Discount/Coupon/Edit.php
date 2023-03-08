<?php

namespace App\Http\Livewire\Back\Discount\Coupon;

use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    public int $couponId;
    public string $type;
    public string $typeName;
    public string $code;
    public string $title;
    public int $min_basket_price = 0;
    public int $quantity;
    public ?int $rate = 0;
    public ?int $price = 0;
    public string $expires_at;
    public int $index;

    public array $types = [
        [
            'name' => 'Net Tutar',
            'value' => 0,
        ],
        [
            'name' => 'Yüzde / Oran (%)',
            'value' => 1,
        ],
    ];
    public bool $show;

    protected $listeners = [
        'showEditForm' => 'show',
    ];

    public function render(): View
    {
        return view('livewire.back.discount.coupon.edit');
    }

    protected function rules()
    {
        return [
            'type' => 'required',
            'title' => 'required',
            'code' => [
                'required',
                Rule::unique('coupons')->ignore($this->couponId),
            ],
            'quantity' => 'required|integer',
            'rate' => 'integer',
            'price' => 'integer',
            'min_basket_price' => 'integer',
            'expires_at' => 'required|date',
        ];
    }

    public function show(Coupon $coupon, $index): void
    {
        $this->couponId = $coupon->id;
        $this->type = $coupon->type;
        $this->code = $coupon->code;
        $this->title = $coupon->title;
        $this->quantity = $coupon->quantity;
        $this->rate = $coupon->rate;
        $this->price = $coupon->price;
        $this->min_basket_price = $coupon->min_basket_price;
        $this->expires_at = Carbon::parse($coupon->expires_at)->format('d-m-Y');
        $this->index = $index;

        if ($this->type) {
            $this->typeName = "rate";
        } else {
            $this->typeName = "price";
        }


        $this->show = true;
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($property): void
    {
        $this->validateOnly($property);
    }

    public function edit(): void
    {
        $this->validate();

        $coupon = Coupon::find($this->couponId);
        $coupon->type = $this->type;
        $coupon->code = $this->code;
        $coupon->title = $this->title;
        $coupon->quantity = $this->quantity;
        $coupon->rate = $this->rate;
        $coupon->price = $this->price;
        $coupon->min_basket_price = $this->min_basket_price;
        $coupon->expires_at = Carbon::parse($this->expires_at)->format('Y-m-d');
        $coupon->save();

        $this->emit('edited', $coupon, $this->index);
        toastr()->addSuccess('Hesap Başarıyla Düzenlendi!', 'Başarılı!');
    }


}
