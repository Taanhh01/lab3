<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller {
    public function index() {
        $books = Book::with('category')->get();
        return view('books.index', compact('books'));
    }

    public function create() {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'publication' => 'required|date',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Them moi thanh cong.');
    }

    public function show(Book $book) {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book) {
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book) {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'publication' => 'required|date',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Sua sach thanh cong.');
    }

    public function destroy(Book $book) {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Xoa thanh cong.');
    }
}
