@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->judul }}</h2>
                <article>

                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to My
                        Posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span
                            data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0"
                            onclick="return confirm('Are you sure delete this data?')"><span
                                data-feather="x-circle"></span>Delete</button>
                    </form>

                    @if ($post->image)
                        <div style="max-height: :350px; overflow:hidden;">
                            <img class="img-fluid mt-3" src="{{ asset('storage/' . $post->image) }}"
                                alt="{{ $post->category->name }}">
                        </div>
                    @else
                        <img class="img-fluid mt-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}">
                    @endif
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                </article>
            </div>
        </div>
    </div>
@endsection
