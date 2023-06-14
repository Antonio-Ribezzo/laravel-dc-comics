<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/img/favicon.ico') }}" />
    <title>@yield('title')</title>

     <!-- Styles -->
    @vite('resources/js/app.js')
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

 <!-- includo l'header per tutte le pagine  -->
    @include('partials.header')

    <main>
        <!-- Contenuto variabile in base alle pagine -->
        @yield( 'contentHome' )

    </main>


    <!-- includo il footer per tutte le pagine  -->
    @include('partials.footer')
    
</body>
</html>