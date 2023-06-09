<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('back.settings.social-media.index');
    }
}
