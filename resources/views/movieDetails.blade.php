@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>Dettagli Film</h1>

    <div class="card m-2" style="width: 18rem;">

        <div class="card-body">

        <h5 class="card-title">{{$movie->title}}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Voto: {{$movie->vote}}</h6>
        <span class="d-block">Origine: {{$movie->nationality}}</span>

        </div>

    </div>

    </div>

</div>

@endsection


@section('titlePage')
    dettagli film
@endsection
