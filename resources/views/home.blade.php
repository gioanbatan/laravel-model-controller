@extends('layouts/app')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                        </div>
                        <div>{{ $movie->title }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
