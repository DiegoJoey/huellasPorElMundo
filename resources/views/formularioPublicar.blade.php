{{-- filepath: resources/views/formularioPublicar.blade.php --}}
@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/adopciones.css') }}">
@endpush

@section('content')
    <div class="container mt-4">
        <h2>Publicar Mascota en Adopción</h2>
        <form action="/post/animal" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>

            <div class="mb-3">
                <label for="breed" class="form-label">Raza</label>
                <select class="form-control" id="breed" name="breed" required>
                    <option value="">Seleccione una raza</option>
                    @foreach ($breeds as $breed)
                        <option value="{{ $breed['name'] }}">{{ $breed['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Edad</label>
                <input type="number" class="form-control" id="age" name="age" min="0" required>
            </div>

            <div class="mb-3">
                <label for="time_in_shelter" class="form-label">Tiempo en refugio</label>
                <input type="text" class="form-control" id="time_in_shelter" name="time_in_shelter" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="image_path" class="form-label">Foto</label>
                <input type="file" class="form-control" id="image_path" name="image_path" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>
@endsection
