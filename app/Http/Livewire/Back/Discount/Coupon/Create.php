<?php

namespace App\Http\Livewire\Back\Discount\Coupon;

use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use JetBrains\PhpStorm\ArrayShape;
use Livewire\Component;

class Create extends Component
{
    public string $type;
    public string $typeName;
    public string $code;
    public string $title;
    public int $min_basket_price = 0;
    public int $quantity;
    public ?int $rate = 0;
    public ?int $price = 0;
    public string $expires_at;

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
    public bool $show = false;

    protected $listeners = [
        'showCreateForm' => 'show',
    ];

    protected function rules(): array
    {
        return [
            'type' => 'required',
            'title' => 'required',
            'code' => 'required|unique:coupons,code',
            'quantity' => 'required|integer',
            'rate' => 'integer',
            'price' => 'integer',
            'min_basket_price' => 'integer',
            'expires_at' => 'required|date|after_or_equal:today',
        ];
    }

    public function render(): View
    {
        return view('livewire.back.discount.coupon.create');
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($property): void
    {
        $this->validateOnly($property);
    }


    public function updatedType($value)
    {
        if ($value) {
            $this->typeName = "rate";
        } else {
            $this->typeName = "price";
        }
    }

    public function show(): void
    {
        $this->show = true;
    }

    public function create(): void
    {
        $this->validate();

        $data = [
            'type' => $this->type,
            'code' => $this->code,
            'title' => $this->title,
            'quantity' => $this->quantity,
            'rate' => $this->rate,
            'price' => $this->price,
            'min_basket_price' => $this->min_basket_price,
            'expires_at' => Carbon::parse($this->expires_at)->format('Y-m-d'),
        ];

        $createdCoupon = new Coupon();
        $createdCoupon->fill($data);
        $createdCoupon->save();
        $createdCoupon = Coupon::find($createdCoupon->id);

        $this->emit('created', $createdCoupon);
        $this->reset('rate','price');

        toastr()->addSuccess('Kupon Oluşturuldu!', 'Başarılı!');
    }
}
