<div class="book__content">
        @foreach ($latest_books as $book)
            <div class="book__card">
                {{-- <h2>{{ $book->title }}</h2> --}}

                @foreach ($book->authors as $author)
                <h3>{{ $author->name }}</h3>
                @endforeach

                <img src="{{ $book->image }}" alt="{{ $book->title }}">
               {{-- <p> {!! $book->description !!}</p>  --}}
            </div>
        @endforeach
    </div>