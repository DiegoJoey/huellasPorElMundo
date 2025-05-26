@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/ayudanos.css') }}">
@endpush

@section('content')
<div class="container mt-4">
    <h2>Donar Jueguetes</h2>
    <form action="/donar/comodidad" method="POST">
        @csrf

        <input type="hidden" name="category" value="comodidad">
        <input type="hidden" name="user_id" value="{{$user->id}}">

        <div class="mb-3">
            <label for="item" class="form-label">¿Qué tipo de comodidad quieres donar? (manta, cama, etc.)</label>
            <textarea class="form-control" id="items" name="items" rows="3" maxlength="255"></textarea>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="amount" name="amount" min="1" step="1">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Mensaje (opcional)</label>
            <textarea class="form-control" id="message" name="message" rows="3" maxlength="255"></textarea>
        </div>

        <button type="submit" class="btn btn-warning">Donar</button>
    </form>
</div>
<br><br>
@endsection

@push('scripts')
    <script src="{{ asset('resources/js/comodidad-form-validation.js') }}"></script>
@endpush
