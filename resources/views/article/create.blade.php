@extends('layouts/base')
@section('title')
    create/title
@endsection

@section('body')
@endsection
<form method="post" action="{{ url('article') }}">
    @csrf
    <label for="title">title</label>
    <input type="text" name="title"/><br>

    <label for="text">text</label>
    <input type="text" name="text" /><br>

    <input type="submit" />
</form>
