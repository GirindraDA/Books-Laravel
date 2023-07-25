@extends('layouts.home')

@section('content')
    <form action="{{ route('books.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title">Title</label><br>
            <input type="text" name="title" id="">
        </div>
        <div class="mb-3">
            <label for="author">Author</label><br>
            <input type="text" name="author" id="">
        </div>
        <div class="mb-3">
            <label for="page">Page</label><br>
            <input type="text" name="page" id="">
        </div>
        <div class="mb-3">
            <label for="year">Year</label><br>
            <input type="text" name="year" id="">
        </div>
        <div class="mb-3">
            <input type="submit" value="save" class="btn btn-primary">
        </div>
    </form>

@endsection
