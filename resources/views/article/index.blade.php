@extends('layouts.app')
@section('content')
    @foreach($articles as $article)
        {{--{{eval(\Psy\sh())}}--}}
        <div class="article-list">
            <h2>{{$article->title}}</h2>
            {{"@".$article->user->name}}さん<br>
            text:{{$article->text}}
            @if(isset($loginUser) && $article->user_id == $loginUser->id)
                <a href="{{url("article/$article->id/edit")}}">edit</a>
                <form method="post" action="{{url("article/$article->id")}}">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="submit" value="delete">
                </form>
            @endif
        </div>
    @endforeach
@endsection

