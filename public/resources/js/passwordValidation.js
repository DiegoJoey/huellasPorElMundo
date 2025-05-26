document.addEventListener('DOMContentLoaded', () => {
    console.log('JavaScript loaded and running!');

    const passwordInput = document.querySelector('input[placeholder="Contraseña"]');
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
            errors.push('Contraseña debe tener minimo 8 caracteres.');
        }
        if (!/[A-Z]/.test(password)) {
            errors.push('Contraseña debe contener minimo 1 mayuscula.');
        }
        if (!/[a-z]/.test(password)) {
            errors.push('Contraseña debe contener minimo 1 minuscula.');
        }
        if (!/[0-9]/.test(password)) {
            errors.push('Contraseña debe contener minimo 1 numero.');
        }
        if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
            errors.push('Contraseña debe contener minimo 1 caracter especial.');
        }

        errorContainer.innerHTML = errors.map(error => `<p>${error}</p>`).join('');
        errorContainer.style.color = errors.length > 0 ? 'red' : 'green';
    });
});