@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row"><h1>{{trans('message.lastpage')}}</h1></div>
            <div class="row">
                @foreach($story as $oneStory)
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail">
                        <!-- TODO : Faire marcher stapler pour ajouter une photo aux récit -->
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/3c/38/6d/3c386d203759319b508d9140440fb1c3.jpg" alt="...">
                        <div class="caption">
                                <h3>{{$oneStory->storyable->title}}</h3>
                                <a href="" type="button" class="btn btn-success">{{trans("message.continue-write")}}</a>
                                <a href="{{action('SimpleStoryController@show', ['id' => $oneStory->storyable->id])}}" type="button" class="btn btn-primary pull-right"><i class="fa fa-book" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
