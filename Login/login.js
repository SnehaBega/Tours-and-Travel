
        const loginForm = document.querySelector('form');
        const loginButton = document.getElementById('login-button');
        
        loginButton.addEventListener('click', () => {
            // Get email and password values
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Check if email and password are not empty
            if (email.trim() !== '' && password.trim() !== '') {
                // Make an AJAX request to the server to check if the user exists and the credentials are correct
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'http://localhost/tour&travel/Login/login.php');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (this.status === 200) {
                        // Parse the response from the server
                        
                        const response = JSON.parse(this.responseText);
                        if (response.success) {
                            console.log(response)
                            // Redirect the user to the dashboard
                            window.location.href = 'http://localhost/tour&travel/dashboard.html';
                        } else {
                            // Show an error message to the user
                            alert(response.message);
                        }
                    }
                };
                xhr.send(`email=${email}&password=${password}`);
            } else {
                // Show an error message to the user
                alert('Please enter your email and password');
            }
        });
        <form method="post" action="register.php">
