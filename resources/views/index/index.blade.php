@extends('layouts/main', [
    'current_page' => 'homepage'
])

@section('stylesheets')
    <link rel="stylesheet" href="style.css">
@endsection

@section('scripts')
     <script src="{{ mix('js/latest-books.js') }}"></script>
@endsection


@section('content')

    <h1>The Best Bookstore</h1>

    <p>Looking for a book? We are simply the best! Explore thousands upon thought</p>
    <br>
    <h3>Latest books</h3>

    <div id="latest-books">

    </div>
    
   

@endsection
