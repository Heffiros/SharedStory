@extends('layouts.app')

@section('content')
    <div class="container">

        <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
        </form>

    </div>
@endsection

<script>tinymce.init({ selector:'textarea' });</script>