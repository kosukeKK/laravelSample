@extends('layouts.app')
@section('content')
    <form method="post" action="{{ url("article/$article->id") }}">
        @csrf
        <input type="hidden" name="_method" value="put">
        <div>
            <label for="text">title</label>
            <textarea type="text" name="title">{{$article->title}}</textarea>
        </div>
        <div>
            <label for="text">text</label>
            <textarea type="text" name="text">{{$article->text}}</textarea>
        </div>
        <input type="submit">
    </form>
@endsection

