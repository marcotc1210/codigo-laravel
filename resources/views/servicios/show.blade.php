@extends('layout')

@section('title', 'Servicios')

@section('content')
  <h2>Servicio {{ $servicio->titulo }}</h2>
    <div class="card m-4 p-4">
      <ul>
        <p> Id: {{ $servicio->id }} </p>
        <p> {{ $servicio->descripcion }} </p>
        <p> Creado hace: {{ $servicio->created_at->diffForHumans() }}</p>
      </ul>
    </div>

@endsection