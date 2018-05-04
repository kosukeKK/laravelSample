@extends('layouts.app')
@section('content')
    <form method="post" action="{{ url("article/$id") }}">
        @csrf
        <input type="hidden" name="_method" value="put">
        <div>
            <label for="text">title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="text">text</label>
            <input type="text" name="text">
        </div>
        <input type="submit">
    </form>
@endsection

