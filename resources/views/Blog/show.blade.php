@extends('blog.layout')
@section('title','Blog')
@section('header')
<div class="container">
    <div class="text-center text-white font-gisaka header" data-aos="fade-up" data-aos-duration="1500">
        Blog Gisaka
    </div>
    <div class="d-flex justify-content-center">
        {{-- <img src="/images/home4.png" alt="" class="image-header" data-aos="fade-up" data-aos-duration="1500"
            data-aos-delay="900"> --}}
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row mt-5">
        @foreach($post as $item)
            <div class="col-sm-6 mb-3" data-aos="fade-up" data-aos-duration="1500">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->body, 100, '.') }}
                        </p>
                        <a href="/blog/{{ $item->slug }}" class="btn btn-primary">Read More</a>
                        <div class="text-right">
                            <small class="text-muted pb-0">Created at
                                {{ $item->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-end mb-5">
        {{ $post->links() }}
    </div>
</div>
@stop
