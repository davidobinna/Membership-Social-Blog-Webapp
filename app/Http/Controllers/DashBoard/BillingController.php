<?php

namespace App\Http\Controllers\DashBoard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        return view('dashboard.billing.index');
    }
    
}
