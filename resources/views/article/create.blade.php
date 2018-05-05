@extends('layouts.app')
@section('content')
    <form method="post" action="{{ url('article') }}">
        @csrf
        <label for="title">title</label>
        <textarea type="text" name="title"></textarea><br>

        <label for="text">text</label>
        <textarea type="text" name="text"></textarea><br>

        <input type="submit"/>
    </form>
@endsection

