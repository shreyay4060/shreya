document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('surveyForm');
    const ratingInput = document.getElementById('rating');
    const ratingValue = document.getElementById('ratingValue');
    const formStatus = document.getElementById('form-status');

    // Update rating display
    ratingInput.addEventListener('input', function () {
        ratingValue.textContent = ratingInput.value;
    });

    // Handle form submission
    form.addEventListener('submit2', function (event) {
        event.preventDefault(); // Prevent actual submission

        // Gather form data
        const formData = {
            satisfaction: form.satisfaction.value,
            rating: ratingInput.value,
            feedback: form.feedback.value.trim(),
        };

        // Validate feedback length
        if (formData.feedback.length < 5) {
            alert('Feedback must be at least 5 characters long.');
            return;
        }

        // Simulate data submission and analytics integration
        console.log('Form data submitted:', formData);
        formStatus.textContent = 'Thank you for your feedback!';
        formStatus.style.color = 'green';

        // Reset the form
        form.reset();
        ratingValue.textContent = '3'; // Reset rating display
    });
});