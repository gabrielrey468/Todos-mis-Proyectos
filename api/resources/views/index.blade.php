<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss">

    </head>
    <body>
        @foreach($_post as $post)
        <div>
            <h2>{{ $post->title }}</h2>
        </div>
        @endforeach
        
        {{ $posts->links() }}
    </body>
</htm
