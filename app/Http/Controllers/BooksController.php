<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BooksController extends Controller
{
    public function latestBooks()
    {
        $year = 2021;
        $latest_books = Book::where('publication_date', 'like', $year . '%')
            ->orderBy('publication_date', 'desc')
            ->limit(15)
            ->get();
        // dd($latest_books);
        // $authors = $latest_books->authors;
        // dd($authors);
        return view('index/index', compact('latest_books'));
    }

    public function show($id)
    {
        $book = Book::with('authors')->findOrFail($id);
        // dd($book);

        // $book = [];
        // $book[] = [
        //     'title' => $searchBook->title,
        //     'image' => $searchBook->image,
        //     'authors' => $searchBook->authors

        // ];
        // dd($book->authors[0]->name);

        return view('books/book', compact('book'));
    }
}

// ->leftJoin('authors', 'books.category_1_id', '=', 'authors.id')