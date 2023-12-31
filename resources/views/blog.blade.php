@extends('layouts.main')

@section('konten')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count() > 0)
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-width: :350px; overflow:hidden;">
                    <img class="img-fluid" src="{{ asset('storage/' . $posts[0]->image) }}"
                        alt="{{ $posts[0]->category->name }}">
                </div>
            @else
                <img class="img-fluid mt-3" src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                    alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a class="text-decoration-none text-dark"
                        href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->judul }}</a></h3>
                <small class="text-muted">
                    <p>By : <a href="/blog?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                        in
                        <a class="text-decoration-none"
                            href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-light" style="background-color: rgba(0,0,0,0.7)">
                                <a href="/blog?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}"
                                    alt="{{ $post->category->name }}">
                            @else
                                <img class="card-img-top"
                                    src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $post->judul }}</h5>
                                <small class="text-muted">
                                    <p>By : <a href="/blog?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>
                                        {{ $posts[0]->created_at->diffForHumans() }}
                                    </p>
                                </small>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection
