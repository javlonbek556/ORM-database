@extends('layouts.app')

@section('title', 'Show Record')

@section('content')
    <h2>Show Record</h2>
    <table border="1">
        <tr>
            <th>mahsus raqam</th>
            <td>{{ $book->id }}</td> 
        </tr>
        <tr>
            <th>kitob nomi</th>
            <td>{{ $book->title }}</td> 
        </tr>
        <tr>
            <th>muallifi</th>
            <td>{{$book->author }}</td> 
        </tr>
    </table>
    <br>
    <a href="{{ route('books.index') }}">royxatga qaytish</a>
@endsection
