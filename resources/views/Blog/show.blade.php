@extends('app')
@section('title','Blog')
@section('content')
<div class="text-right border-bottom border-primary mb-3">
  <h3>Blog Gisaka</h3>
</div>
<div class="row">
  @foreach ($post as $item)
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$item->title}}</h5>
        <p class="card-text">{{Str::limit($item->body, 100, '.')}}</p>
        <a href="/blog/{{$item->slug}}" class="btn btn-primary">Read More</a>
        <div class="text-right">
        <small class="text-muted pb-0">Created at {{$item->created_at->diffForHumans()}}</small>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class="d-flex justify-content-end">
  {{ $post->links() }}
</div>
@stop