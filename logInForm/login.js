document.addEventListener("DOMContentLoaded", function() {
    // Function to reset the form
    function resetForm() {
        document.getElementById("loginForm").reset();
    }

    // Create a reset button
    const resetButton = document.createElement("button");
    resetButton.type = "button"; // Prevent form submission
    resetButton.innerHTML = "Reset";
    resetButton.className = "reset"; // Optional: add a class for styling
    resetButton.addEventListener("click", resetForm);

    // Append the reset button to the form
    const form = document.getElementById("loginForm");
    form.appendChild(resetButton);
});