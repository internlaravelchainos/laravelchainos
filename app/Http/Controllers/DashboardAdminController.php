<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    //
    function show() {
        return view('admin.dashboard');
    }
}
