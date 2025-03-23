<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(StoreBookRequest $request)
    {
        Book::create($request->validated());
        return redirect()->route('books.index')->with('success', 'Kitob qo‘shildi!');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return redirect()->route('books.index')->with('success', 'Kitob yangilandi!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Kitob o‘chirildi!');
    }
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
}
