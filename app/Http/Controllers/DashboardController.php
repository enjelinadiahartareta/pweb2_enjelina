<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dasboard()
    {
        return dasboard("dashboard");
    }
    function Table()
    {
        return view('table');
    }
}
