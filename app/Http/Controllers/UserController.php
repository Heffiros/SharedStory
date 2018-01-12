<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Hash;
use Illuminate\Support\Facades\Input;

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
        //dd(Input::file('avatar'));
        $user = User::where('id', $request->user()->id)->first();
        $user->email = $request->get('email');
        $user->avatar = Input::file('avatar');
        if ($request->has('password'))
            $user->password = Hash::make($request->get('password'));
        $user->name = $request->get('firstname');
        $user->save();
        return redirect()->back();
    }

    public function changeRole(User $user, Request $request)
    {
        $user->role = $request->get('role');
        $user->save();
    }
}
