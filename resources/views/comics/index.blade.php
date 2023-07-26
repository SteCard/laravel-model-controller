@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            @forelse ($comics as $comic)
                <div class="col-12 col-md-6 col-lg-4 my-5">
                    <div class="card h-100">
                        <!-- Card Img -->
                        <img src="{{ Vite::asset('resources/img/')}}{{$comic->cover_image}}" alt="cover-image" class="card-img-top border border-5">
                        <div class="card-header d-flex justify-content-center align-items-center text-center">
                            <h2 class="fs-4 fw-bold py-2">{{ $comic->title }}</h2>
                        </div>
                        <div class="card-body">
                            <div>
                                <strong>Series:</strong>
                                <span>{{ $comic->series }}</span>
                            </div>
                            <div>
                                <strong>Type:</strong>
                                <span>{{ $comic->type }}</span>
                            </div>
                            <div>
                                <strong>Price:</strong>
                                <span>{{ $comic->price }}</span>
                            </div>
                            <div>
                                <strong>Sale Date:</strong>
                                <span>{{ $comic->sale_date }}</span>
                            </div>
                            <div>
                                <a href="{{ Route('index') }}" class="btn btn-primary">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 col-md-6 col-lg-4">
                    <h3>Comic not Found!</h3>
                </div>
            @endforelse
        </div>
    </div>
@endsection