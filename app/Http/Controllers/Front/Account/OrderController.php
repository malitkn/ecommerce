<?php

namespace App\Http\Controllers\Front\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class OrderController extends Controller
{
    public function index(): View
    {
        return view('front.auth.account.my-orders');
    }
}
