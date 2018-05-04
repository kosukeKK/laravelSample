@extends('layouts.app')
@section('content')
    <div class="pagenate">{{ $articles->links() }}</div>
    @foreach($articles as $article)
        {{--{{eval(\Psy\sh())}}--}}
        <div class="article-list">
            <div>
                <h2>{{$article->title}}</h2>
                {{$article->text}}
            </div>

            <div>
                {{"@".$article->user->name}}<br>
                @if(isset($loginUser) && $article->user_id == $loginUser->id)
                    <a href="{{url("article/$article->id/edit")}}" type="button" class="edit-button">edit</a>
                    <form method="post" action="{{url("article/$article->id")}}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <input type="submit" value="delete">
                    </form>
                @endif
            </div>
        </div>
    @endforeach
    <div class="pagenate">{{ $articles->links() }}</div>
@endsection

