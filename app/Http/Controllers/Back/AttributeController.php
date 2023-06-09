<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\AttributeStoreRequest;
use App\Http\Requests\back\AttributeUpdateRequest;
use App\Models\Attribute;
use App\Services\AttributeService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index(): View
    {
        return view('back.attribute.index');
    }

    public function create(): View
    {
        return view('back.attribute.create');
    }

    public function store(AttributeStoreRequest $request, AttributeService $attributeService)
    {
        $attributeService->store($request);
        toastr()->addPreset('success');

        return redirect()->back();
    }

    public function edit($id): View
    {
        $attribute = Attribute::find($id);
        return view('back.attribute.edit', compact('attribute'));
    }

    public function update(AttributeUpdateRequest $request, $id, AttributeService $attributeService)
    {
        $attributeService->update($request, $id);
        toastr()->addPreset('success');

        return redirect()->back();
    }

}
