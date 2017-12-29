@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if($page->ordre != 0)
            <div id='arrowLeft' class=" col-sm-1 col-md-1">
                <i class="fa fa-arrow-circle-left fa-5x" aria-hidden="true"></i>
            </div>
            @else
                <div class=" col-sm-1 col-md-1"></div>
            @endif


            <div id='page' class="col-sm-10 col-md-10">
                {!! $page->content !!}
            </div>

            @if(!$end)
                <div id='arrowRight' class="col-sm-1 col-md-1">
                    <i class="fa fa-arrow-circle-right fa-5x" aria-hidden="true"></i>
                </div>
            @else
                    <div class="col-sm-1 col-md-1"></div>
            @endif
        </div>


        <form method="get" action="{{ Request::url() }}">
            <input id="next" type="hidden" name="next" value="">
            <input id="page" type="hidden" name="page" value="{{$page->ordre}}">
            <input id='submitPage' type="submit" hidden>
        </form>
    </div>



    <script>
        $( document ).ready(function() {

            $('#arrowRight').click(function()  {
                $('#next').val(1);
                $('#submitPage').click()
            })

            $('#arrowLeft').click(function()  {
                $('#next').val(-1);
                $('#submitPage').click()
            })


        });
    </script>
@endsection