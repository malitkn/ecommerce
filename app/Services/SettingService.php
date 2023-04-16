<?php


namespace App\Services;


use App\Http\Requests\Back\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingService
{
    public function store(SettingRequest $request, $id = 1)
    {
        $validated = $request->validated();
        $setting = Setting::find(1);

        if (isset($validated['logo'])) {
            $logo = $validated['logo'];
            Storage::delete($setting->logo);
            Storage::putFileAs('public/back/images', $logo, 'logo.' . $logo->extension());
            $setting->logo = 'logo.' . $logo->extension();
        }

        if (isset($validated['favicon'])) {
            $favicon = $validated['favicon'];
            Storage::delete($setting->favicon);
            Storage::putFileAs('public/back/images', $favicon, 'favicon.' . $favicon->extension());
            $setting->favicon = 'favicon.' . $favicon->extension();
        }

        $setting->title = $validated['title'];
        $setting->keywords = $request->keywords;
        $setting->description = $validated['description'];
        $setting->address = $request->address;
        $setting->phone = $validated['phone'];
        $setting->email = $validated['email'];
        $setting->maps = $request->maps;
        $setting->save();
    }
}
