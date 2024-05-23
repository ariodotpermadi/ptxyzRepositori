<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function indexXYZ()
    {
        $users = User::where('company', 'PT. XYZ')->get();
        return view('users.index', compact('users'));
    }

    public function managerView()
    {
        $users = User::where('role', 'supervisor')->whereIn('company', ['PT. XYZ-1', 'PT. XYZ-2'])->get();
        return view('users.manager', compact('users'));
    }

    public function indexXYZ1()
    {
        $users = User::where('company', 'PT. XYZ-1')->get();
        return view('users.index', compact('users'));
    }

    public function supervisorViewXYZ1()
    {
        $users = User::where('company', 'PT. XYZ-1')->get();
        return view('users.supervisor_xyz1', compact('users'));
    }

    public function indexXYZ2()
    {
        $users = User::where('company', 'PT. XYZ-2')->get();
        return view('users.index', compact('users'));
    }

    public function supervisorViewXYZ2()
    {
        $users = User::where('company', 'PT. XYZ-2')->get();
        return view('users.supervisor_xyz2', compact('users'));
    }
}
