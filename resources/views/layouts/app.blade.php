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
        @yield( 'content' )

        <section id="sectionStore">
            <div class="container py-5">
                <ul class="d-flex justify-content-around align-items-center">
                    <li>
                        <a href="#" class="d-flex justify-content-center    align-items-center">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="icon1">
                            <span class="ms-3 text-uppercase">digital comics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-center    align-items-center">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="icon2">
                            <span class="ms-3 text-uppercase">dc merchandise</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-center    align-items-center">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="icon3">
                            <span class="ms-3 text-uppercase">subscription</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-center    align-items-center">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="icon4">
                            <span class="ms-3 text-uppercase">comic shop locator</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-center    align-items-center">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="icon5">
                            <span class="ms-3 text-uppercase">dcpowervisa</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

    </main>


    <!-- includo il footer per tutte le pagine  -->
    @include('partials.footer')
    
</body>
</html>