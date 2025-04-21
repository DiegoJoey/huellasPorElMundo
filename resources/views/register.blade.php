@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/register.css') }}">
@endpush

@section('content')
    <div class="center-wrapper">
        <form class="form">
            <p class="text-register">Register!</p>

            <div class="flex-column">
                <label>First name</label>
            </div>
            <div class="inputForm">
                <input placeholder="First name" class="input" type="text">
            </div>

            <div class="flex-column">
                <label>Last name</label>
            </div>
            <div class="inputForm">
                <input placeholder="Last name" class="input" type="text">
            </div>

            <div class="flex-column">
                <label>Email</label>
            </div>
            <div class="inputForm">
                <input placeholder="Email" class="input" type="text">
            </div>

            <div class="flex-column">
                <label>Password</label>
            </div>
            <div class="inputForm">
                <input placeholder="Password" class="input" type="password">
            </div>

            <div class="flex-column">
                <label>Repeat password</label>
            </div>
            <div class="inputForm">
                <input placeholder="Repeat password" class="input" type="password">
            </div>

            <button class="button-submit">Register</button>
  
            <p class="p">Already have an account? <span class="span">Sign In</span>
        </form>
    </div>
@endsection
