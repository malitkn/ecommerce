<?php

namespace App\Http\Livewire\Back\Product;

use App\Models\AttributeValue;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Livewire\Component;

class Create extends Component
{
    public $show = 'AddProductAttribute';
    public $categories = [];
    public $variants = [];
    public $steps = [
        'AddProductAttribute',
        'SelectAttributeValues',
        'CreateVariants',
    ];
    public $selectedAttributeValues = [];
    public $attributes;
    public $productAttributes = [];
    public $attributeValues = [];
    public $variantStatus = false;

    public function mount(ProductService $productService): void
    {
        $this->categories = $productService->getCategories();
        $this->attributes = $productService->getAttributes();
    }

    public function render(): View
    {
        $this->loadSelect2();
        return view('livewire.back.product.create');
    }

    public function addProductAttribute(): void
    {
        $attributeValues = AttributeValue::whereIn('attribute_id', collect($this->productAttributes))
            ->with('attribute')
            ->get()
            ->groupBy('attribute_id')
            ->toArray();
        $this->attributeValues = $attributeValues;
        $this->nextStep();
    }

    public function combineVariants()
    {
        $variants = [];
        foreach ($this->selectedAttributeValues as $attributeId => $attributeValues) {

            $details = AttributeValue::whereIn('id', $attributeValues)->get();
//            Öncelikle ilk diziyi almak için dizinin boş olup olmadığını kontrol ediyoruz.
            if (empty($variants)) {
//                Boş ise, ilk dizimizin attribute valuelarını $variants dizimize dizi olarak ekliyoruz.
                foreach ($attributeValues as $attributeValue) {
                    $variants[] = [
                        $attributeValue => [
                            'detail' => $details->find($attributeValue),
                        ],
                    ];
                }
            } else {
                $newVariants = [];
//                İlk dizinin elemanlarına tek tek diğer tüm elemanları döngüye sokup kombine ediyoruz.
                foreach ($variants as $variant) {
                    foreach ($attributeValues as $attributeValue) {
                        $newVariant = $variant;
                        $newVariant[$attributeValue] = [
                            'detail' => $details->find($attributeValue),
                        ];
                        $newVariants[] = $newVariant;
                    }
                }
                $variants = $newVariants;
            }
        }

        $this->variants = $variants;
        $this->nextStep();
    }

    public function loadSelect2(): void
    {
        $this->dispatchBrowserEvent('load-select2');
    }

    public function resetVariant(): void
    {
        $this->reset('show', 'selectedAttributeValues', 'productAttributes', 'attributeValues', 'variants');
    }

    public function booted(): void
    {
        $this->loadSelect2();
    }

    public function nextStep(): void
    {
        $currentStep = array_search($this->show, $this->steps);
        $this->show = $this->steps[$currentStep + 1];
    }

}
