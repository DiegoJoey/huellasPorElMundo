document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form[action="/donar/alimentos"]');
    if (!form) return;

    const submitBtn = form.querySelector('button[type="submit"]');
    const requiredFields = [
        form.querySelector('#items')
    ];

    function checkFields() {
        const allFilled = requiredFields.every(field => field.value.trim() !== '');
        submitBtn.disabled = !allFilled;
    }

    requiredFields.forEach(field => {
        field.addEventListener('input', checkFields);
        field.addEventListener('change', checkFields);
    });

    // Initial check
    checkFields();
});
