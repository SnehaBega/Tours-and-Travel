const form = document.getElementById('contact-form');
const successMessage = document.querySelector('.success');
const errorMessage = document.querySelector('.error');

form.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'contact.php', true);
            xhr