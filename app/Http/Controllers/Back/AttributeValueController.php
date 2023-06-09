<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\AttributeValueStoreRequest;
use App\Http\Requests\back\AttributeValueUpdateRequest;
use App\Models\AttributeValue;
use App\Services\AttributeValueService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    public function index(): View
    {
        return view('back.attribute-value.index');
    }

    public function create(AttributeValueService $service): View
    {
        $attributes = $service->getAttributes();
        return view('back.attribute-value.create', compact('attributes'));
    }

    public function store(AttributeValueStoreRequest $request, AttributeValueService $service)
    {
        $service->store($request);
        toastr()->addPreset('success');

        return redirect()->back();
    }

    public function edit($id, AttributeValueService $service): View
    {
        $attributeValue = $service->findAttributeValue($id);
        $attributes = $service->getAttributes();
        return view('back.attribute-value.edit', compact('attributeValue', 'attributes'));
    }

    public function update(AttributeValueUpdateRequest $request, $id, AttributeValueService $attributeValueService)
    {
        $attributeValueService->update($request, $id);
        toastr()->addPreset('success');

        return redirect()->back();
    }

}
