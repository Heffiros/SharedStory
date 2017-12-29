@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 story-intro">
                {{trans('story.intro')}}
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 menu_story_simple">
                <a href="{{action('SimpleStoryController@index')}}" role="button" class="btn btn-primary pull-left">{{trans('story.new_simple')}}</a>
            </div>


            <div class="col-md-6 menu_story_simple">
                <a href="" role="button" class="btn btn-primary pull-right">{{trans('story.import')}}</a>
            </div>
        </div>


    </div>
@endsection
