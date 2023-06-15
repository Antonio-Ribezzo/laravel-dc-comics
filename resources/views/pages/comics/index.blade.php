@extends('layouts.app')

@section('title') 
    DC Comics | All Comics
@endsection


@section('content') 
    <section id="mainSection">
        <div class="container py-5 text-center position-relative">
            <div>
                <span id="currentSeries" class="text-uppercase text-white position-absolute">current series</span>
            </div>
            <ul class="d-flex justify-content-between align-items-start flex-wrap">
                <!-- card -->
                @foreach ($comics as $elem)
                    <li class="my-4">
                        <a class="text-white" href="{{ route( 'comics.show', ['comic' => $elem->id]) }}">
                            <img src="{{$elem->thumb}}" alt="{{$elem->series}}">
                            <p class="mt-2 text-start">{{$elem->series}}</p>
                            <span class="m-0 text-start">{{$elem->price}}</span>
                            <span class="m-0 text-start">{{$elem->type}}</span>
                        </a>

                        {{-- button edit --}}
                        <a href="{{ route('comics.edit', $elem)}}" class="btn btn-dark mt-1">modifica</a>

                        {{-- button delete --}}
                        <form class="formDeleteComic" action="{{route('comics.destroy', $elem) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="button" class="btn btn-danger mt-2" onclick="popUpDelete()">delete</button>
                        </form>
                    </li> 
                @endforeach
            </ul>
            <button class="loadMore text-white text-uppercase">load more</button>
        </div>
    </section>
   
   
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

