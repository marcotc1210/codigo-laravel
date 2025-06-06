@extends('layout')

@section('title', 'Servicios')

@section('content')
  <h2>Servicios</h2>

  <a href="{{ route('servicios.create') }}" class="btn btn-primary mt-3 mx-5"> + Agregar Servicio </a>

  @if ($servicios)          
  <div class="d-flex justify-content-around">
    @foreach ($servicios as $servicio)
    <div class="card m-4 p-4">
      <h5> <a href="{{ route('servicios.show', $servicio->id) }}"> {{ $servicio->titulo }} </a></h5>
      <p> {{ $servicio->descripcion }} </p>
    </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-center mt-4">
    {{$servicios->links('pagination::bootstrap-4') }}
  </div>
  @else
    <p>No hay servicios para mostrar.</p>
  @endif

@endsection