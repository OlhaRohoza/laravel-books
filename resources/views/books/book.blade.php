@extends('layouts/main')

@section('content')
    <h2>info about a book:</h2>

    <div class="book__detail--content">
        <img src="{{ $book->image }}" alt="">

        <div class="book__detail--info">


        <h3>Title: {{ $book->title }}</h3>
        
        @if (count($book->authors) > 1 )
            <h4>Authors: 
                @foreach ($book->authors as $author)
                    {{ $author->name }}
                @endforeach
            </h4>
        @else
            <h4> Author: {{ $book->authors[0]->name }} </h4>
            
        @endif

        <p><i>{!! $book->description !!} </i></p>
                </div>

    </div>
    <hr>

    @if (!empty($book->reviews))
        <p>Reviews:</p>
        @foreach($book->reviews as $review)
            <p style="background-color: lightblue"> {{$review->review}} </p>
        @endforeach
    @endif


    <hr>

    @include('common/message')

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @auth
        <form action=" {{route('book-review', $book->id) }}" method='post'>
            @csrf
            <input type="hidden" name="book_id" value={{$book->id}}>
            <textarea name="review" id="" cols="100" rows="10">Please leave your review of the book here...</textarea>
            <br><br>
            <button>Submit review</button>

        </form>
    @endauth

@endsection