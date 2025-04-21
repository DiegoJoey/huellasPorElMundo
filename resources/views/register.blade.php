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
  
            <p class="p">Already have an account? <span class="span">Sign In</span></p>
        </form>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    console.log('JavaScript loaded and running!');

    const passwordInput = document.querySelector('input[placeholder="Password"]');
    if (!passwordInput) {
        console.error('Password input field not found!');
        return;
    }

    const errorContainer = document.createElement('div');
    errorContainer.classList.add('error-messages');

    // Append the error container directly after the password input's parent container
    passwordInput.parentNode.insertAdjacentElement('afterend', errorContainer);

    passwordInput.addEventListener('input', () => {
        const password = passwordInput.value;
        const errors = [];

        if (password.length < 8) {
            errors.push('Password must be at least 8 characters long.');
        }
        if (!/[A-Z]/.test(password)) {
            errors.push('Password must include at least one uppercase letter.');
        }
        if (!/[a-z]/.test(password)) {
            errors.push('Password must include at least one lowercase letter.');
        }
        if (!/[0-9]/.test(password)) {
            errors.push('Password must include at least one number.');
        }
        if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
            errors.push('Password must include at least one special character.');
        }

        errorContainer.innerHTML = errors.map(error => `<p>${error}</p>`).join('');
        errorContainer.style.color = errors.length > 0 ? 'red' : 'green';
    });
});
    </script>
@endsection

@push('scripts')
    <script src="{{ asset('resources/js/passwordValidation.js') }}"></script>
@endpush
