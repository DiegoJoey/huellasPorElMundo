document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.volunteer-form');
    if (!form) return; // Prevent errors if form not found

    const submitBtn = form.querySelector('button[type="submit"]');
    const requiredFields = [
        form.querySelector('#name'),
        form.querySelector('#email'),
        form.querySelector('#phone'),
        form.querySelector('#availability'),
        form.querySelector('#message')
    ];

    function checkFields() {
        const allFilled = requiredFields.every(field => {
            if (field.tagName === 'SELECT') {
                return field.value !== '';
            }
            return field.value.trim() !== '';
        });
        submitBtn.disabled = !allFilled;
    }

    requiredFields.forEach(field => {
        field.addEventListener('input', checkFields);
        field.addEventListener('change', checkFields);
    });

    // Initial check
    checkFields();
});
