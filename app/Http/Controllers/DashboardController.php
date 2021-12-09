<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    // }
    public function createUser()
    {
        if (Auth::user()->isStaff() || Auth::user()->isParent()) {
            return view('dashboard.user.create');
        } else {
            return abort('401');
        }
    }

    public function subjectsIndex()
    {
        $subjects = Subject::all();
        return view('dashboard.subjects.index', ['subjects' => $subjects]);
    }

    public function usersIndex()
    {
        $users = User::all();
        return view('dashboard.users.index', ['users' => $users]);
    }
}
