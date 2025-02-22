@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">

    <form action="/dashboard/posts" method="POST" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" required autofocus value="{{ old('title') }}">

            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug') }}">

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
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
          </select>


        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Post image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
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

            <input id="body" type="hidden" class="@error('body') is-invalid @enderror" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>


        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
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
