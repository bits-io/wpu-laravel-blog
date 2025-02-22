@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">

    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new post</a>

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($categories as $catagory)

        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $catagory->name }}</td>
          <td>
            <a href="/dashboard/categories/{{ $catagory->slug }}" class="btn btn-sm btn-info border-0"><span data-feather="eye"></span></a>
            <a href="/dashboard/categories/{{ $catagory->slug }}/edit" class="btn btn-sm btn-warning border-0"><span data-feather="edit"></span></a>
            <form action="/dashboard/categories/{{ $catagory->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>

        @endforeach

      </tbody>
    </table>
</div>

@endsection
