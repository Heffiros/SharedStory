<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        //dd($users);
        return view('admin.index')->withUsers($users);
    }
}
