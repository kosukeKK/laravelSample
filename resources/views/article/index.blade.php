@extends('layouts/base')
@section('title')
    crteate/index
@endsection

@section('body')
    @foreach($articles as $article)
        {{eval(\Psy\sh())}}
        <div>
            <h2>{{$article->title}}</h2>
            user:{{$article->user->name}}<br>
            text:{{$article->text}}
            @if(isset($loginUser) && $article->user_id == $loginUser->id)
                <form method="post" action="{{url("article/$article->id")}}">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="submit" value="delete">
                </form>
                <a href="{{url("article/edit/$article->id")}}">edit</a>
            @endif
        </div>
    @endforeach
@endsection

