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