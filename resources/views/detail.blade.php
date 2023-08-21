@extends('layouts.main')

@section('konten')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->judul }}</h2>
                <article>
                    <p>By : <a href="/blog?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a> in
                        <a href="/blog?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a>
                    </p>
                    @if ($post->image)
                        <div style="max-height: :350px; overflow:hidden;">
                            <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}"
                                alt="{{ $post->category->name }}">
                        </div>
                    @else
                        <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}">
                    @endif

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                </article>
                <a class="text-decoration-none d-block mt-3" href="/blog">Back to Blogs</a>
            </div>
        </div>
    </div>
@endsection
