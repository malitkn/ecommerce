<?php

namespace App\Http\Controllers\Back\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\SettingRequest;
use App\Models\Setting;
use App\Services\SettingService;
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
     * @param \App\Http\Requests\Back\SettingRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SettingRequest $request): RedirectResponse
    {
        (new SettingService())->store($request);

        toastr()->addSuccess('Ayarlar başarıyla kaydedildi!', 'Başarılı!');
        return redirect()->back();
    }

}
