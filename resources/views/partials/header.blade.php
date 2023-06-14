{{-- top bar --}}
<div id="topBar" class="p-1">
    <div id="topBarContainer">
        {{-- brand  --}}    
        <span class="text-uppercase">dc power sm visa <i class="fa-regular fa-registered"></i></span>
        {{-- other sites dropdown --}}
        <div class="dropdown ms-3">
            <span class="dropdown-toggle text-uppercase" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                additional dc sites
            </span>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Site 1</a></li>
                <li><a class="dropdown-item" href="#">Site 2</a></li>
                <li><a class="dropdown-item" href="#">Site 3</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="d-flex justify-content-between align-items-center">

    <!-- logo sx -->
    <div>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-small">
    </div>

     <!-- navbar dx -->
    <nav>
        <ul class="d-flex">
            <li>
                <a class="text-uppercase" href="#">caharacters</a> 
            </li>
            <li class="borderLightBlue">
                <a class="text-uppercase colorLightBlue" href="#">comics</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">movies</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">tv</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">games</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">collectibles</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">videos</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">fans</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">news</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">shop</a> 
            </li>
        </ul>
    </nav>

    {{-- input search --}}
    <div class="input-group">
        <input type="text" class="form-control rounded-0" placeholder="Search">
        <button class="" type="button" id="button-addon2">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>


</header>

<div id="jumbotron">
</div>