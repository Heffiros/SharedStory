@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
        @foreach($category as $categ)
            <div class=" form-group row">
                <div class="col-md-8">
                    {{$categ->name}}
                </div>
                <div class="col-md-2">
                    <a href="{{action('CategoryController@show', ['category' => $categ])}}"><button class="btn btn-primary">{{trans('category.modify')}}</button></a>
                </div>
                <div class="col-md-2">
                    <a href="{{action('CategoryController@destroy', ['category' => $categ])}}"><button class="btn btn-danger">{{trans('category.delete')}}</button></a>
                </div>
            </div>
        @endforeach
        </div>

        <div class="row">
            <div>
                <a  href="{{action('CategoryController@create')}}"><button class="col-xs-12 btn btn-primary">{{trans('category.add')}}</button></a>
            </div>
        </div>
    </div>
@endsection