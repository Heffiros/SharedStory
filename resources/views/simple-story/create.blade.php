@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{action('SimpleStoryController@create')}}" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="simpleStoryId" value="{{$story}}">

                    <div class="form-group">
                        <textarea name="editor" id="editor"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">{{trans('story.validate')}}</button>
                    </div>

                    <div class="form-group">
                        <button id="newPage" type="button" class="btn btn-primary pull-right" style="margin-right: 10px">{{trans('story.newPage')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        $( document ).ready(function() {



            //Gestion du ckeditor
            CKEDITOR.replace( 'editor', {
                height: '700px'
            } );







        });
    </script>
@endsection
