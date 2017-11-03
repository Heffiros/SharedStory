<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\SimpleStory;
use App\Model\Story;

class SimpleStoryController extends Controller
{
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
        $newSimpleStory->category_id = $request->get('category');
        $newSimpleStory->save();

        //Utilisation de la relation polymorphic pour dire que Story est une Simple Story
        $newSimpleStory->story()->save($story);


        //Voir s'il faut pas faire une redirection pour pas qu'il recrée une histoire en cas de ctr r
        return view('simple-story.create')
            ->withStory($newSimpleStory->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
