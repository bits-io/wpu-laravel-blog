@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">

    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" required autofocus value="{{ old('title', $post->title) }}">

            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug', $post->slug) }}">

            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Category</label>

            @error('category_id')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
          <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
            <option selected value="">Choose category</option>
            @foreach ($categories as $category)

                @if (old('category_id', $post->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif

            @endforeach
          </select>


        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Post image</label>

            @if ($post->image)
            <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="{{ asset('storage/'.$post->image) }}">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif

            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">

            @error('image')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror

            <input id="body" type="hidden" class="@error('email') is-invalid @enderror" name="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>


        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>

</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage() {

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';


        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection
