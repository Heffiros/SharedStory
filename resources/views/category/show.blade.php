@extends('layouts.app')

@section('content')
    <form action="{{action('CategoryController@update')}}" method="POST" id="categoryForm">

        <div class="container">

            {{ csrf_field() }}
            <input name='category_id' value='{{$category->id}}' type="text" hidden>
            <div class="form-group">
                <div class="form-group">
                    <label for="inputName">{{trans('category.name')}}</label>
                    <input type="text" class="form-control" id="inputName" name="title" value="{{$category->name}}">
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="inputLocation">{{trans('category.location')}}</label>
                    <select class="form-control" name="location" id="inputLocation">
                        <option value="en" @if($category->location == 'en') selected @endif >en</option>
                        <option value="fr" @if($category->location == 'fr') selected @endif>fr</option>
                    </select>
                </div>
            </div>

            <div class="pull-right">
                <button type="submit" class="btn btn-primary">{{trans('message.submit')}}</button>
            </div>

        </div>
    </form>
@endsection