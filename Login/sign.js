// Retrieve form data when the submit button is clicked
const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent the form from submitting normally
  
  // Retrieve form data
  const username = form.elements.username.value;
  const Email = form.elements.Email.value;
  const password = form.elements.password.value;
  
  // Send the form data to the server using fetch API
  fetch('insert_data.php', {
    method: 'POST',
    body: JSON.stringify({username, Email, password}),
    headers: {'Content-Type': 'application/json'}
  })
  .then(response => {
    if (response.ok) {
      // Redirect to the dashboard page
      window.location.href = 'Login\dashboard.html';
    } else {
      throw new Error('Something went wrong');
    }
  })
  .catch(error => {
    console.error(error);
  });
});
