<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        {{--Fonte do Google--}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{--CSS Bootstrap--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        {{--CSS da aplicação--}}
        <link rel="stylesheet" href="/css/styles.css">

        <script src="/js/scripts.js"></script>
    </head>
    <body>
      @yield('conten')
        <footer>
          <p>HDC Events &copy; 2023</p>
        </footer>
    </body>
</html>
