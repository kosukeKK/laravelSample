@extends('layouts.base')
@section('title')
    top/create
@endsection
@section('body')
    @parent
@stop
<form method="post" action="{{ url('top') }}">
    @csrf
    <input type="text" name="formName" />
    <input type="submit"/>
</form>
