@extends("layouts.application")
@section("content")
  <div>
    <h1>{!! $article->title !!}</h1>
    <p>{!! $article->content!!}</p>
  </div>
@stop
