document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form[action="/donar/juguetes"]');
    if (!form) return;

    const submitBtn = form.querySelector('button[type="submit"]');
    const requiredFields = [
        form.querySelector('#items'),
        form.querySelector('#amount')
    ];

    function checkFields() {
        const allFilled = requiredFields.every(field => {
            if (!field) return false;
            if (field.type === 'number') {
                return field.value.trim() !== '' && parseInt(field.value, 10) > 0;
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
