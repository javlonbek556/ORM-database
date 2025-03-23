@extends('layouts.app')

@section('title', 'Kitoblar ro‘yxati')

@section('content')
    <h1>Kitoblar</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Yangi kitob</a>
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Nomi</th>
            <th>Muallif</th>
            <th>Narxi</th>
            <th>Amallar</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->price }} so‘m</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Tahrirlash</a>
    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">Show</a>
                    
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">O‘chirish</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
