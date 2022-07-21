@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $categories->name }}</h1>

            <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my categories</a>
            <a href="/dashboard/categories/{{ $categories->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
            <form action="/dashboard/categories/{{ $categories }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are yuo sure?')"><span data-feather="x-circle"></span>Delete</button>
            </form>

            @if ($categories->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $categories->image) }}" class="card-img-top" alt="{{ $categories->name }}" class="img fluid mt-3">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $categories->category }}" class="card-img-top" alt="{{ $categories->category }}" class="img fluid mt-3">
            @endif



        </div>
    </div>
</div>
@endsection