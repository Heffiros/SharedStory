<?php

namespace App\Http\Controllers;

use App\Model\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lastSimpleStory = Story::where('storyable_type', 'App\Model\SimpleStory')->orderByDesc('updated_at')->limit(3)->get();
        return view('new_home')->withStory($lastSimpleStory);
    }
}
