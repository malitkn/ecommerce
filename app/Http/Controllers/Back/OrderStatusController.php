<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    public function index(): View
    {
        return view('back.order.status.index');
    }
}
