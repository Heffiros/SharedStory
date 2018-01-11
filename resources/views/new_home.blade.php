@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="http://facetheforce.today/yoda" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            {{ Auth::user()->name }} <br> {{ Auth::user()->email }}
                        </div>
                        <div class="profile-usertitle-job">
                            Developer <!-- TODO : Quand j'aurais mis en place le système de titre le rajouter ici -->
                        </div>
                    </div>

                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    {{trans('home.home')}} </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    {{trans('home.library')}} </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    {{trans('home.groups')}} </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-weixin" aria-hidden="true"></i>
                                    {{trans('home.chat')}} </a>
                            </li>
                            @if (Auth::user()->role == 2)
                                <li>
                                    <a href="{{action("AdminController@index")}}">
                                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        {{trans('home.admin')}} </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <h1>{{trans('home.story')}}</h1>
                    @foreach($story as $oneStory)
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="thumbnail">
                                <!-- TODO : Faire marcher stapler pour ajouter une photo aux récit -->
                                <img src="http://facetheforce.today/darthvader" alt="...">
                                <div class="caption">
                                    <h3>{{$oneStory->storyable->title}}</h3>
                                    <a href="{{action('SimpleStoryPageController@liste', ['id' => $oneStory->storyable->id])}}" type="button" class="btn btn-success">{{trans("home.continue-write")}}</a>
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