@extends('layouts.app')

@section('title') 
    Edit Comic
@endsection

@section('content')

    <div class="colorBack text-white p-5">
    <h2 class="text-center">Edit the Comic</h2>
        <form class="container" action="{{ route('comics.update', $comic)}}" method="POST">
            {{-- token necessario --}}
            @csrf
            {{-- metodo put necessario per l'edit  --}}
            @method('PUT')

            <div class="mb-3">
                <label for="comic-title" class="form-label">Comic Title</label>
                <input type="text" class="form-control" id="comic-title" name="title" value="{{ old('title') ?? $comic->title}}">
            </div>

            <div class="mb-3">
                <label for="comic-description" class="form-label">Comic Description</label>
                <textarea class="form-control" id="comic-description" name="description" >{{ old('desxription') ?? $comic->description}}</textarea>
            </div>

            <div class="mb-3">
                <label for="comic-thumb" class="form-label">Comic thumb</label>
                <textarea class="form-control" id="comic-thumb" name="thumb">{{ old('thumb') ?? $comic->thumb}}</textarea>
            </div>

            <div class="mb-3">
                <label for="comic-price" class="form-label">Comic Price</label>
                <input type="text" class="form-control" id="comic-price" name="price" value="{{ old('price') ?? $comic->price}}">
            </div>

            <div class="mb-3">
                <label for="comic-series" class="form-label">Comic Series</label>
                <input type="text" class="form-control" id="comic-series" name="series" value="{{ old('series') ?? $comic->series}}">
            </div>

            <div class="mb-3">
                <label for="comic-sale-date" class="form-label">Comic Sale Date</label>
                <input type="text" class="form-control" id="comic-sale-date" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="comic-type" class="form-label">Comic Type</label>
                <input type="text" class="form-control" id="comic-type" name="type" value="{{ old('type') ?? $comic->type}}">
            </div>
           
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection