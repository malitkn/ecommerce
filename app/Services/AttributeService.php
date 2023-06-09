<?php

namespace App\Services;

use App\Http\Requests\Back\AttributeStoreRequest;
use App\Http\Requests\back\AttributeUpdateRequest;
use App\Models\Attribute;

class AttributeService
{
    public function store(AttributeStoreRequest $request)
    {
        return Attribute::create($request->validated());
    }

    public function update(AttributeUpdateRequest $request, $id): bool
    {
        $attribute = Attribute::find($id);
        $attribute->fill($request->validated());
        return $attribute->save();
    }

    public function destroy($attributeId): ?bool
    {
        if ($attributeId != null) {
            return Attribute::find($attributeId)
                ->delete();
        }
    }
}
