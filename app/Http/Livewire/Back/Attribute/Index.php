<?php

namespace App\Http\Livewire\Back\Attribute;

use App\Models\Attribute;
use App\Services\AttributeService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'sweetalertConfirmed' => 'delete',
    ];
    public $attributeId = null;

    public function render(): View
    {
        return view('livewire.back.attribute.index', [
            'attributes' => Attribute::paginate(15)
        ]);
    }

    public function confirmDelete($attributeId): void
    {
        $this->attributeId = $attributeId;
        sweetalert()
            ->addPreset('confirm_attribute_delete', [
                'attribute' => $this->attribute->name,
            ]);
    }

    public function getAttributeProperty()
    {
        return Attribute::find($this->attributeId);
    }

    public function delete(AttributeService $attributeService): void
    {
        if ($this->attributeId != null) {
            $attributeService->destroy($this->attributeId);
            $this->reset('attributeId');
            sweetalert()
                ->addPreset('success');
        }
    }
}
