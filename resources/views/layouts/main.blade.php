<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller | @yield('title')</title>

    {{-- Importo l'scss convertito in app.css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Importo il js convertito in app.js --}}
    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


</head>
<body>

   @include('partials.header')

   <main>
        @yield('main-content')
   </main>
   @include('partials.footer')

</body>
</html>
