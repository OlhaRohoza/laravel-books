@extends('layouts/main', [
    'current_page' => 'homepage'
])

@section('stylesheets')
    <link rel="stylesheet" href="style.css">
@endsection


@section('content')

<h1>The Best Bookstore</h1>

    <p>Looking for a book? We are simply the best! Explore thousands upon thought</p>

    <div class="book__content">
        @foreach ($latest_books as $book)
            <div class="book__card">
                <h2>{{ $book->title }}</h2>
                @foreach ($book->authors as $author)
                <h3>{{ $author->name }}</h3>
                @endforeach
               <p> {!! $book->description !!}</p> 
            </div>
        @endforeach
    </div>
    
    
@endsection
