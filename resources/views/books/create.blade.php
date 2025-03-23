@extends('layouts.app')

@section('title', 'Yangi Kitob Qo‘shish')

@section('content')
    <h1>Yangi Kitob Qo‘shish</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Kitob nomi</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Muallif</label>
            <input type="text" class="form-control" name="author" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Narxi</label>
            <input type="number" class="form-control" name="price" required>
        </div>
        <button type="submit" class="btn btn-success">Saqlash</button>
    </form>
@endsection
