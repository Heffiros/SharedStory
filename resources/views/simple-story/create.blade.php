@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{action('SimpleStoryPageController@create')}}" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="simpleStoryId" value="{{$story}}">
                    <input id='validation' type="hidden" name="validation" value="" >
                    <div class="form-group">
                        <textarea name="editor" id="editor"></textarea>
                    </div>

                    <div class="form-group">
                        <button id='endPage' type="submit" class="btn btn-primary pull-right">{{trans('story.validate')}}</button>
                    </div>

                    <div class="form-group">
                        <button id="newPage"  class="btn btn-primary pull-right" style="margin-right: 10px">{{trans('story.newPage')}}</button>
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


            $('#newPage').click(function()  {
                $('#validation').val(1);
            })

            $('#endPage').click(function()  {
                $('#validation').val(0);
            })

        });




    </script>
@endsection
