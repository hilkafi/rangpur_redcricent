<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class DashboardController extends HomeController
{

    public function index()
    {
        return view('admin.dashboard.index');
    }
}
