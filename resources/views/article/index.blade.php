{{--{{eval(\Psy\sh())}}--}}
@extends('layouts.app')
@section('content')
    <div class="pagenate">{{ $articles->links() }}</div>
    @foreach($articles as $article)
        @include('article._articleList', ['article' => $article])
    @endforeach
    <div class="pagenate">{{ $articles->links() }}</div>
@endsection

