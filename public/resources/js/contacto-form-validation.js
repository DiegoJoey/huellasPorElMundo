document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.form');
    if (!form) return;

    const submitBtn = form.querySelector('.button-submit');
    const inputs = form.querySelectorAll('input.input');
    const textarea = form.querySelector('textarea.input');

    function checkFields() {
        const allFilled =
            Array.from(inputs).every(input => input.value.trim() !== '') &&
            textarea.value.trim() !== '';
        submitBtn.disabled = !allFilled;
    }

    inputs.forEach(input => {
        input.addEventListener('input', checkFields);
        input.addEventListener('change', checkFields);
    });
    textarea.addEventListener('input', checkFields);
    textarea.addEventListener('change', checkFields);

    // Initial check
    checkFields();
});
