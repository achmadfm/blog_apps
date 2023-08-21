@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                    id="judul" required autofocus value="{{ old('judul') }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                    id="slug"required value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    <option selected>--Pilih Kategori--</option>
                    @foreach ($categories as $data)
                        @if (old('category_id') == $data->id)
                            <option value="{{ $data->id }}" selected>{{ $data->name }}</option>
                        @else
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body">Body</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#judul');
        const slug = document.querySelector('#slug');
        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })


        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
