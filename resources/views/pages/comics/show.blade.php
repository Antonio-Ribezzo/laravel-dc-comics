@extends('layouts.app')

@section('title') 
    {{$comic['title']}}
@endsection


@section('content') 

    <div class="sectionSingleItem p-3 d-flex justify-content-center align-items-start">
        <img src="{{ $comic['thumb'] }}" alt="{{$comic['series']}}">
        <div class="text-white mt-5 ms-5">
            <h2 class="mt-2 text-start">{{$comic['title']}}</h2>
            <p class="mt-2 text-start">Series: {{$comic['series']}}</p>
            <span class="mt-2 text-start">Price: {{$comic['price']}}</span>
            <span class="mt-2 text-start d-block">Type: {{$comic['type']}}</span>
            {{-- button edit --}}
            <a href="{{ route('comics.edit', $comic)}}" class="btn btn-dark mt-4">modifica</a>

            {{-- button delete --}}
            <form class="formDeleteComic" action="{{route('comics.destroy', $comic) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="button" class="btn btn-danger mt-2" onclick="popUpDelete()">elimina</button>
            </form>
        </div>
    </div>

     <script>
        function popUpDelete(event) {
            if( confirm("Are you sure you want to delete the Comic?")==true){
                document.querySelector('.formDeleteComic').submit();
            } else {
                event.preventDefault();
            }
        }
    </script>

@endsection