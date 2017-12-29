<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {
        return view('users.index')
            ->withUsers($request->user());
    }

    public function update(Request $request)
    {
        $user = User::where('id', $request->user()->id)->first();
        $user->email = $request->get('email');
        if ($request->has('password'))
            $user->password = Hash::make($request->get('password'));
        $user->name = $request->get('firstname');
        $user->save();
        return redirect()->back();
    }
}
