@extends('layouts.home')

@section('content')

<form action="{{ route('books.update', $book->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title">Title</label><br>
        <input type="text" name="title" id="" value="{{ $book->title }}">
    </div>
    <div class="mb-3">
        <label for="author">Author</label><br>
        <input type="text" name="author" id="" value="{{ $book->author }}">
    </div>
    <div class="mb-3">
        <label for="page">Page</label><br>
        <input type="text" name="page" id="" value="{{ $book->page }}">
    </div>
    <div class="mb-3">
        <label for="year">Year</label><br>
        <input type="text" name="year" id="" value="{{ $book->year }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="update" class="btn btn-primary">
    </div>
</form>

@endsection
