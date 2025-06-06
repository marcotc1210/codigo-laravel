@extends('layout')

@section('title', 'Agregar servicio')

@section('content')
    <div class="m-5">
        <h2>Agregar servicio</h2>

        {{-- @if ($errors->any())
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif --}}

        <form action="{{ route('servicios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
                {{ $errors->first('titulo') }}
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type='text' name="descripcion" id="descripcion" class="form-control">
                {{ $errors->first('descripcion') }}
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary my-3 w-50"> Guardar </button>
            </div>
        </form>
    </div>
@endsection
