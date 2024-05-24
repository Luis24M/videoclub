<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>VideoClub</title>
  </head>
  <body>
    @include('partials.navbar')
    <div class="">
      @yield('content')
    </div>
  </body>
</html>