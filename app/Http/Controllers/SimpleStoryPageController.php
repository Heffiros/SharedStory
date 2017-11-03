<?php

namespace App\Http\Controllers;

use App\Model\SimpleStory;
use App\Model\SimpleStoryPage;
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
        $page = new SimpleStoryPage();

        $story = SimpleStory::where('id', $request->get('simpleStoryId'))->first();

        //On récupère la dernière page
        $lastPages = $story->pages->sortByDesc('ordre')->first();

        if (count($lastPages) == 0)
            $page->ordre = 0;
        else
            $page->ordre = $lastPages->ordre + 1;

        $page->simple_story_id = $request->get('simpleStoryId');
        $page->content = $request->get('editor');

        $page->save();

        //Si on a fait ajouter une nouvelle page on revient sur la vue
        //Sinon on va allé autre part
        if ($request->get('validation') == 1)
            return view('simple-story.create')
                ->withStory($request->get('simpleStoryId'));
        else
            dd('Enrengistrement total');


    }
}
