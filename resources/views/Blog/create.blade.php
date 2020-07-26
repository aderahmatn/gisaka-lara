@extends('blog.layout')
@section('title','New Post')


@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>New Post</h1>
        </div>
        <div class="card-body">
            <form action="/blog/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" id="body"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
@stop
