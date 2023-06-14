@extends('layouts.app')

@section('title') 
    DC Comics | All Comics
@endsection


@section('contentHome') 
    <section id="mainSection">
        <div class="container py-5 text-center position-relative">
            <div>
                <span id="currentSeries" class="text-uppercase text-white position-absolute">current series</span>
            </div>
            <ul class="d-flex justify-content-between align-items-start flex-wrap">
                <!-- card -->
                @foreach ($comics as $el)
                    <li class="my-4">
                        <a class="text-white" href="#">
                            <img src="{{$el->thumb}}" alt="{{$el->series}}">
                            <p class="mt-2 text-start">{{$el->series}}</p>
                            <span class="m-0 text-start">{{$el->price}}</span>
                            <span class="m-0 text-start">{{$el->type}}</span>
                        </a>
                    </li> 
                @endforeach
            </ul>
            <button class="text-white text-uppercase">load more</button>
        </div>
    </section>
@endsection