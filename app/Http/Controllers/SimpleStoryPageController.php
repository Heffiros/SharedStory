<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleStoryPageController extends Controller
{

    public function index(Request $request)
    {
        return view('simple-story.create')
            ->withStory($request->get('story'));
    }
    public function create(Request $request)
    {

    }
}
