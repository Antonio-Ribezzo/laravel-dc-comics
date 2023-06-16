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
            {{-- message --}}
            @if(Session::has('success'))
                <div class="text-success text-center">
                    {!! Session::get('success') !!}
                </div>
            @endif
            <ul class="d-flex justify-content-between align-items-start flex-wrap">

                <!-- card -->
                @foreach ($comics as $elem)
                    <li class="my-4">
                        <a class="text-white" href="{{ route( 'comics.show', ['comic' => $elem->id]) }}">
                            <div class="text-red">
                                <div>
                                    <img class="img-fluid" src="{{$elem->thumb}}" alt="{{$elem->series}}">
                                </div>
                                <p class="mt-2 text-center">{{$elem->title}}</p>
                                <span class="m-0 text-start">{{$elem->price}}</span>
                                <span class="m-0 text-start">{{$elem->type}}</span>
                            </div>
                        </a>

                        {{-- button edit --}}
                        <a href="{{ route('comics.edit', $elem)}}" class="btn btn-dark mt-1">modifica</a>

                        {{-- button delete --}}
                        <form id="formDeleteComic_{{ $elem->id }}" action="{{route('comics.destroy', ['comic' => $elem['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="button" class="btn btn-danger mt-2" onclick="popUpDelete({{ $elem->id }})">delete</button>
                        </form>
                    </li> 
                @endforeach
            </ul>
            <button class="loadMore text-white text-uppercase">load more</button>
        </div>
    </section>
   
   
    <script>
        function popUpDelete(id) {
            if( confirm("Are you sure you want to delete the Comic?")==true){
                document.querySelector('#formDeleteComic_'+ id).submit();
            } else {
                event.preventDefault();
            }
        }
    </script>
@endsection

