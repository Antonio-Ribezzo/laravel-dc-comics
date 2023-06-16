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
                <input type="text" class="form-control" id="comic-title" name="title" placeholder="Es: American Vampire">
                {{-- validation: errors message  --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="comic-description" class="form-label">Comic Description</label>
                <textarea class="form-control" id="comic-description" name="description" placeholder="Es: America is broken. Trust between the government an..."></textarea>
            </div>

            <div class="mb-3">
                <label for="comic-thumb" class="form-label">Comic thumb</label>
                <textarea class="form-control" id="comic-thumb" name="thumb" placeholder="Es: https://imgs.search.brave.com/gAZQuZyt6WjcUWF6aXCIBaiJqtOJAK-X4nxS9Vbvwno/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9jZG4y/LnBlbmd1aW4uY29t/LmF1L2NvdmVycy9v/cmlnaW5hbC85Nzgx/NDAxMjc1NDI2Lmpw/Zw"></textarea>
            </div>

            <div class="mb-3">
                <label for="comic-price" class="form-label">Comic Price</label>
                <input type="text" class="form-control" id="comic-price" name="price" placeholder="Es: $3.99">
            </div>

            <div class="mb-3">
                <label for="comic-series" class="form-label">Comic Series</label>
                <input type="text" class="form-control" id="comic-series" name="series" placeholder="Es: American Vampire 1976">
            </div>

            <div class="mb-3">
                <label for="comic-sale-date" class="form-label">Comic Sale Date</label>
                <input type="text" class="form-control" id="comic-sale-date" name="sale_date" placeholder="Es: 2020-10-06">
            </div>

            <div class="mb-3">
                <label for="comic-type" class="form-label">Comic Type</label>
                <input type="text" class="form-control" id="comic-type" name="type" placeholder="Es: comic book">
            </div>
           
            <button type="submit" class="btn btn-primary">Add Comic</button>
        </form>
    </div>
@endsection