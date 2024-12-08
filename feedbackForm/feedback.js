document.getElementById('feedbackForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form values
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();
    const responseMessage = document.getElementById('responseMessage');

    // Simple validation
    if (name === '' || email === '' || message === '') {
        responseMessage.innerText = 'Please fill in all fields.';
        responseMessage.style.color = 'red';
        return;
    }

    // Here you would typically send the data to your server
    // For demonstration, we'll just show a success message
    responseMessage.innerText = 'Thank you for your feedback, ' + name + '!';
    responseMessage.style.color = 'green';

    // Clear the form fields
    document.getElementById('feedbackForm').reset();
});