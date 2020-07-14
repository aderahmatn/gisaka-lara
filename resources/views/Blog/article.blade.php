@extends('app')
@section('title','Blog')


@section('content')
<div class="text-right border-bottom border-primary mb-3">
  <h3>{{$post->title}}</h3>
</div>
<div>
  <p class="text-justify">{{$post->body}}</p>
</div>
@stop