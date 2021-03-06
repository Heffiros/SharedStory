@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

            <form method="post" action="{{action('SimpleStoryController@store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="storyTitle">{{trans('story.title')}}</label>
                    <input required type="text" class="form-control" id="storyTitle" name="title" placeholder="{{trans('story.title')}}">
                </div>

                <div class="form-group">
                    <label for="categSelector">{{trans('story.categorie')}}</label>
                    <select class="form-control" id="categSelector" name="category">
                        <!-- <option value="NULL">{{trans('story.categ_default')}}</option> -->
                        @foreach($category as $categ)
                            <option value="{{$categ->id}}">{{$categ->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="form-group">
                        <label for="avatar">{{trans('user.avatar')}}</label>
                        <input type="file" class="form-control-file" id="photo"  name="photo">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary pull-right">{{trans('story.begin')}}</button>
            </form>


        </div>
    </div>
@endsection
