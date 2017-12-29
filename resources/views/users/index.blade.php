@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ action('UserController@update') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="form-group">
                    <label for="inputEmail">{{trans('user.email')}}</label>
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email" value="{{$users->email}}">
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="password">{{trans('user.password')}}</label>
                    <input type="password" class="form-control" id="password">
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="name">{{trans('user.name')}}</label>
                    <input type="text" class="form-control" id="name"  name="firstname" value="{{$users->name}}">
                </div>
            </div>

            <div class="pull-right">
                <button type="submit" class="btn btn-primary">{{trans('user.submit')}}</button>
            </div>
        </form>
    </div>
@endsection