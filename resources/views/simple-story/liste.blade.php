@extends('layouts.app')

@section('content')
    <div class="container">
            @foreach($pages as $page)
                <div class="row">{{$page->id}}</div>
            @endforeach
    </div>
@endsection
