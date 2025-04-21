@extends('layouts/base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/contacto.css') }}">
@endpush

@section('content')
<div class="center-wrapper">
    <form class="form">
      <p class="contact">Contact us!</p>
  
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
        <label>Phone number</label>
      </div>
      <div class="inputForm">
        <input placeholder="Phone number" class="input" type="text">
      </div>
  
      <div class="flex-column">
        <label>Message</label>
      </div>
      <div class="inputForm">
        <textarea placeholder="Message" class="input text"></textarea>
      </div>
  
      <button class="button-submit">Send</button>
    </form>
  </div>
  
@endsection
