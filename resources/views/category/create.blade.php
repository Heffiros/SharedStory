@extends('layouts.app')

@section('content')
    <form action="{{action('CategoryController@store')}}" method="POST" id="categoryForm">

        <div class="container">

            {{ csrf_field() }}
            <div class="form-group">
                <div class="form-group">
                    <label for="inputName">{{trans('category.name')}}</label>
                    <input type="text" class="form-control" id="inputName" name="title">
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="inputLocation">{{trans('category.location')}}</label>
                    <select class="form-control" name="location" id="inputLocation">
                        <option value="en">en</option>
                        <option value="fr">fr</option>
                    </select>
                </div>
            </div>

            <div class="pull-right">
                <button type="submit" class="btn btn-primary">{{trans('message.submit')}}</button>
            </div>

        </div>
    </form>
@endsection