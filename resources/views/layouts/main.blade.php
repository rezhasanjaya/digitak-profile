<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Carousel -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/examples/carousel/carousel.css">
    

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">    
    
    <!-- Bootstrap Carousel -->
    <link rel="stylesheet" href="/css/carousel.css">
    
    <!-- My Style -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="footers.css" rel="stylesheet">

    <title>{{ config('app.name', 'Digitak') }}</title>
  </head>
  <body>

    @include('layouts.navbar')
      @yield('container')
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
  
</html>
