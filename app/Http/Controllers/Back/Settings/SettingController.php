<?php

namespace App\Http\Controllers\Back\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Settings\SettingRequest;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('back.settings.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Back\Settings\SettingRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SettingRequest $request): RedirectResponse
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
        Artisan::call('optimize:clear');
        toastr()->addSuccess('Ayarlar başarıyla kaydedildi!','Başarılı!');
        return redirect()->back();
    }

}
