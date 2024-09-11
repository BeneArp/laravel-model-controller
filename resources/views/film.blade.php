{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>Film</h1>

    <div class="d-flex gap-3 flex-wrap">

        @foreach ($movies as $movie )

        <div class="card m-2" style="width: 18rem;">

            <div class="card-body">

            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
            <span class="d-block">Data uscita: {{$movie->date}}</span>
            <a href="{{route('movieDetails', ['id' => $movie->id])}}" class="card-link">Dettagli film</a>

            </div>

        </div>

    @endforeach

    </div>

</div>

@endsection


@section('titlePage')
    home
@endsection
