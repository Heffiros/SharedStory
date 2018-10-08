<?php

namespace App\Http\Controllers;

use App\Model\SimpleStoryPage;
use App\Model\UserTitre;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\SimpleStory;
use App\Model\Story;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class SimpleStoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::get();
        return view('simple-story.index')->withCategory($category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Création de la Story
        $story = new Story();
        $story->user_id = $request->user()->id;
        $story->location = 'fr';
        $story->shared = false;

        //Création de la simple Story
        $newSimpleStory = new SimpleStory();
        $newSimpleStory->title = $request->get('title');

        if($request->get('category') != NULL)
            $newSimpleStory->category_id = $request->get('category');
        else
            $newSimpleStory->category_id = '';
        if (Input::file('photo') != NULL)
            $newSimpleStory->photo = Input::file('photo');

        //$newSimpleStory->save();

        //Utilisation de la relation polymorphic pour dire que Story est une Simple Story
        //$newSimpleStory->story()->save($story);


        //Voir s'il faut pas faire une redirection pour pas qu'il recrée une histoire en cas de ctr r
        $user_tire = new UserTitre();
        if ($user_tire->haveAlreadyTitle(Auth::user()->id, 2) == 0)
        {
            $user_tire->user_id = Auth::user()->id;
            $user_tire->titre_id = 2;
            $user_tire->save();
        }
        return redirect()->action(
            'SimpleStoryPageController@index', ['story' => $newSimpleStory->id]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SimpleStory $id, Request $request)
    {
        if ($request->has('page')){
            $page = $id->pages->where('ordre', $request->get('page') + $request->get('next'))->first();
            return view('simple-story.show')->withStory($id)->withPage($page)->withEnd($page->isLastPage());
        } else {
            $page = $id->pages->where('ordre', 0)->first();
            return view('simple-story.show')->withStory($id)->withPage($page)->withEnd($page->isLastPage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
