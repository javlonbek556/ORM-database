@extends('layouts.app')

@section('title', 'Kitobni Tahrirlash')

@section('content')
    <h1>Kitobni Tahrirlash</h1>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Kitob nomi</label>
            <input type="text" class="form-control" name="title" value="{{ $book->title }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Muallif</label>
            <input type="text" class="form-control" name="author" value="{{ $book->author }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Narxi</label>
            <input type="number" class="form-control" name="price" value="{{ $book->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Yangilash</button>
    </form>
@endsection

