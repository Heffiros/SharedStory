@extends('layouts.app')

@section('content')
    <!<div class="row">

    <div class="col-sm-2 col-md-2 col-lg-2">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                Home
            </a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
        </div>
    </div>




        <div class="col-md-10">
            <h1>{{trans('message.lastpage')}}</h1>
                <div class="col-md-offset-1"></div>
                @foreach($story as $oneStory)
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="thumbnail">
                        <!-- TODO : Faire marcher stapler pour ajouter une photo aux récit -->
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/3c/38/6d/3c386d203759319b508d9140440fb1c3.jpg" alt="...">
                        <div class="caption">
                                <h3>{{$oneStory->storyable->title}}</h3>
                                <a href="{{action('SimpleStoryPageController@liste', ['id' => $oneStory->storyable->id])}}" type="button" class="btn btn-success">{{trans("message.continue-write")}}</a>
                                <a href="{{action('SimpleStoryController@show', ['id' => $oneStory->storyable->id])}}" type="button" class="btn btn-primary pull-right"><i class="fa fa-book" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>





@endsection
