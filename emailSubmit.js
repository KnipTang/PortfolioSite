document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    const responseMessage = document.getElementById('responseMessage');
    const submitButton = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(form);

        // Disable the button to prevent multiple submissions
        submitButton.disabled = true;
        submitButton.textContent = 'Sending...'; // Optional: Change button text to indicate loading

        fetch('send_email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                responseMessage.textContent = 'Message sent successfully!';
                form.reset(); // Clear all input fields
            } else {
                responseMessage.textContent = 'Failed to send message: ' + data.error;
            }
        })
        .catch(error => {
            responseMessage.textContent = 'An error occurred: ' + error;
        })
        .finally(() => {
            // Re-enable the button after the request completes
            form.querySelector('#name').value = '';
            form.querySelector('#email').value = '';
            form.querySelector('#message').value = '';
            submitButton.disabled = false;
            submitButton.textContent = 'Send message!'; // Restore the original button text
        });
    });
});
