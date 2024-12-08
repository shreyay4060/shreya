document.getElementById('inquiryForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission

    // Fetch form values
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const projectType = document.getElementById('project-type').value;
    const budget = document.getElementById('budget').value.trim();
    const message = document.getElementById('message').value.trim();

    // Basic validation
    if (!name || !email || !projectType || !message) {
        alert('Please fill out all required fields.');
        return;
    }

    // Show success message
    document.getElementById('form-status').textContent = 'Thank you for your inquiry. We will get back to you soon!';
    
    // Reset form
    document.getElementById('inquiryForm').reset();
});
