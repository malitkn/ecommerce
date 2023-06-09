<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(): View
    {
        return view('back.discount.coupon.index');
    }
}
