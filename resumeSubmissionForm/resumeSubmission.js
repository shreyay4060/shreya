document.getElementById('resumeForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const portfolio = document.getElementById('portfolio').value.trim();
    const resumeFile = document.getElementById('resume').files[0];

    // Basic validation
    if (!name || !email || !portfolio || !resumeFile) {
        alert('Please fill out all required fields.');
        return;
    }

    // Validate file type
    const allowedTypes = ['application/pdf', 'application/msword', 
                          'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    if (!allowedTypes.includes(resumeFile.type)) {
        alert('Invalid file type. Please upload a PDF, DOC, or DOCX file.');
        return;
    }

    // Validate file size (2MB max)
    const maxFileSize = 2 * 1024 * 1024; // 2MB
    if (resumeFile.size > maxFileSize) {
        alert('File size exceeds 2MB. Please upload a smaller file.');
        return;
    }

    // Simulate successful form submission
    document.getElementById('form-status').textContent = 'Thank you for your submission. We will review your resume and get back to you!';
    
    // Reset the form
    document.getElementById('resumeForm').reset();
});