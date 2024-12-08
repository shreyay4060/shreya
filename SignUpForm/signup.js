document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form values
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    // Simple validation
    if (email === '' || password === '') {
        responseMessage.innerText = 'Please fill in all fields.';
        responseMessage.style.color = 'red';
        return;
    }

    // Here you would typically send the data to your server
    // For demonstration, we'll just show a success message
    responseMessage.innerText = 'Thank you for signup, ' ;
    responseMessage.style.color = 'green';

    // Clear the form fields
    document.getElementById('signupForm').reset();
});