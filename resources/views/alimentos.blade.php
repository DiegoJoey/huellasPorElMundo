@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/ayudanos.css') }}">
@endpush

@section('content')
<div class="container mt-4">
    <h2>Donar Alimentos</h2>
    <form action="/donar/alimentos" method="POST">
        @csrf

        <input type="hidden" name="category" value="Alimentos">
        <input type="hidden" name="user_id" value="{{$user->id}}">

        <div class="mb-3">
            <label for="item" class="form-label">¿Qué alimentos quieres donar?</label>
            <textarea class="form-control" id="item" name="item" rows="3" maxlength="255"></textarea>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Mensaje (opcional)</label>
            <textarea class="form-control" id="message" name="message" rows="3" maxlength="255"></textarea>
        </div>

        <button type="submit" class="btn btn-warning">Donar</button>
    </form>
</div>
@endsection