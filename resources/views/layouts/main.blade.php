<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=v, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ !empty($title) ? $title. ' | ' : ''}} The Best Bookstore</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('stylesheets')
    @yield('scripts')
</head>
<body>

    @include('common/navigation', [
        'current_page' => $current_page ?? null
    ])
    
    @yield('content')
    
</body>
</html>