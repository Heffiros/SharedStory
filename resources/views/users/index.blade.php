@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="profile-userpic-update">
                <img src="{{Auth::user()->avatar->url('medium')}}" class="img-responsive" alt="">
            </div>
        </div>

        <form action="{{ action('UserController@update') }}" method="post" enctype="multipart/form-data">
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

            <div class="form-group">
                <label for="gender">{{trans('auth.sexe')}}</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="Homme" @if ($users->gender == "Homme") selected @endif>{{trans('user.man')}}</option>
                    <option value="Femme" @if ($users->gender == "Femme") selected @endif>{{trans('user.woman')}}</option>
                </select>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="inputLastname">{{trans('user.lastname')}}</label>
                    <input type="text" class="form-control" id="inputLastname"  name="lastname" value="{{$users->lastname}}">
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="avatar">{{trans('user.avatar')}}</label>
                    <input type="file" class="form-control-file" id="avatar"  name="avatar">
                </div>
            </div>



            <div class="pull-right">
                <button type="submit" class="btn btn-primary">{{trans('user.submit')}}</button>
            </div>
        </form>
    </div>
@endsection