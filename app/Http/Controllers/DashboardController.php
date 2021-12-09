<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    // public function __construct(){}
    public function createUser()
    {
        return view('dashboard.user.create');
    }
}
