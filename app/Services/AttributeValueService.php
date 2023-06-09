<?php

namespace App\Services;

use App\Http\Requests\Back\AttributeValueStoreRequest;
use App\Http\Requests\back\AttributeValueUpdateRequest;
use App\Models\AttributeValue;
use App\Models\Attribute;
use Illuminate\Database\Eloquent\Collection;

class AttributeValueService
{
    public function store(AttributeValueStoreRequest $request)
    {

        return AttributeValue::create([
            'name' => $request->validated('name'),
            'attribute_id' => $request->validated('attribute_id'),
            'image' => $request->image,
        ]);
    }

    public function update(AttributeValueUpdateRequest $request, $id): bool
    {
        $attributeValue = AttributeValue::find($id);
        $attributeValue->fill([
            'attribute_id' => $request->validated('attribute_id'),
            'name' => $request->validated('name'),
            'image' => $request->image,
        ]);
        return $attributeValue->save();
    }

    public function destroy($AttributeValueId): ?bool
    {
        return AttributeValue::find($AttributeValueId)
            ->delete();
    }

    public function findAttributeValue($id)
    {
        return AttributeValue::find($id);
    }

    public function getAttributes(): Collection
    {
        return Attribute::all();
    }
}
