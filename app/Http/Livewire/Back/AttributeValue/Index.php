<?php

namespace App\Http\Livewire\Back\attributeValue;

use App\Models\AttributeValue;
use App\Services\AttributeValueService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'sweetalertConfirmed' => 'delete',
    ];
    public $attributeValueId = null;

    public function confirmDelete($attributeValueValueId): void
    {
        $this->attributeValueId = $attributeValueValueId;
        sweetalert()
            ->addPreset('confirm_attribute_value_delete', [
                'attributeValue' => $this->attributeValue->name,
            ]);
    }

    public function getAttributeValueProperty()
    {
        return AttributeValue::find($this->attributeValueId);
    }

    public function delete(AttributeValueService $attributeValueService): void
    {
        if ($this->attributeValueId != null) {
            $attributeValueService->destroy($this->attributeValueId);
            $this->reset('attributeValueId');
            sweetalert()
                ->addPreset('success');
        }

    }

    public function render()
    {
        return view('livewire.back.attribute-value.index', [
            'attributeValues' => AttributeValue::paginate(15),
        ]);
    }
}
