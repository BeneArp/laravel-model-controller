{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <h1>Home</h1>
    <img src="{{ Vite::asset('resources/img/colibri.jpg') }}" alt="" class="img-fluid">
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus quasi quibusdam, rerum vero ad id sequi. Corporis soluta sit maxime eum itaque distinctio praesentium eveniet. Earum esse reprehenderit culpa rem.
    </p>
</div>

@endsection


@section('titlePage')
    home
@endsection
