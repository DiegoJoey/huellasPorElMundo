document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form[action="/post/animal"]');
    if (!form) return;
    const submitBtn = form.querySelector('button[type="submit"]');
    const requiredFields = [
        form.querySelector('#name'),
        form.querySelector('#type'),
        form.querySelector('#breed'),
        form.querySelector('#age'),
        form.querySelector('#time_in_shelter'),
        form.querySelector('#description'),
        form.querySelector('#image_path')
    ];

    function checkFields() {
        const allFilled = requiredFields.every(field => {
            if (!field) return false;
            if (field.type === 'file') {
                return field.files && field.files.length > 0;
            }
            if (field.tagName === 'SELECT') {
                return field.value !== '';
            }
            return field.value.trim() !== '';
        });
        submitBtn.disabled = !allFilled;
    }

    requiredFields.forEach(field => {
        if (!field) return;
        field.addEventListener('input', checkFields);
        field.addEventListener('change', checkFields);
    });

    // Initial check
    checkFields();
});
