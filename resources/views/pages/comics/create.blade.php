@extends('layouts.app')

@section('title') 
    Add Comic
@endsection

@section('content')

    <div class="colorBack text-white p-5">
    <h2 class="text-center">Add a New Comic</h2>
        <form class="container" action="{{ route('comics.store')}}" method="POST">
            {{-- token necessario --}}
            @csrf

            <div class="mb-3">
                <label for="comic-title" class="form-label">Comic Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="comic-title" name="title" placeholder="Es: American Vampire">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="comic-description" class="form-label">Comic Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="comic-description" name="description" placeholder="Es: America is broken. Trust between the government an..."></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="comic-thumb" class="form-label">Comic thumb</label>
                <textarea class="form-control @error('thumb') is-invalid @enderror" id="comic-thumb" name="thumb" placeholder="Es: https://imgs.search.brave.com/gAZQuZyt6WjcUWF6aXCIBaiJqtOJAK-X4nxS9Vbvwno/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9jZG4y/LnBlbmd1aW4uY29t/LmF1L2NvdmVycy9v/cmlnaW5hbC85Nzgx/NDAxMjc1NDI2Lmpw/Zw"></textarea>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="comic-price" class="form-label">Comic Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="comic-price" name="price" placeholder="Es: $3.99">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="comic-series" class="form-label">Comic Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="comic-series" name="series" placeholder="Es: American Vampire 1976">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="comic-sale-date" class="form-label">Comic Sale Date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="comic-sale-date" name="sale_date" placeholder="Es: 2020-10-06">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="comic-type" class="form-label">Comic Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="comic-type" name="type" placeholder="Es: comic book">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Add Comic</button>
        </form>
    </div>
@endsection