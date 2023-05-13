function validateForm() {
    const name = document.querySelector('#name');
    const email = document.querySelector('#email');
    const subscription = document.querySelector('#subscription');

    if (name.value.trim() == '') {
        alert('Please enter your name.');
        name.focus();
        return false;
    }

    if (email.value.trim() == '') {
        alert('Please enter your email address.');
        email.focus();
        return false;
    }

    if (!validateEmail(email.value.trim())) {
        alert('Please enter a valid email address.');
        email.focus();
        return false;
    }

    if (subscription.value == '') {
        alert('Please select a subscription type.');
        subscription.focus();
        return false;
    }

    return true;
}

function validateEmail(email) {
    const re = /\S+@\S+.\S+/;
    return re.test(email);
}