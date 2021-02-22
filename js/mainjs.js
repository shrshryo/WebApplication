const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
    container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
    container.classList.remove('right-panel-active'));

// Part with validation
const departure = document.getElementById('departure')
const arrival = document.getElementById('arrival')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')
const FirstName = document.getElementById('FirsName')
const LastName = document.getElementById('LastName')
const username = document.getElementById('username')
const password = document.getElementById('password')


form.addEventListener('submit', (e) => {
    let messages = []
    if (departure.value === '' || departure.value == null) {
        messages.push('Departure is required')
    }

    if (arrival.value === '' || arrival.value == null) {
        messages.push('Arrival is required')
    }

    if (FirstName.value === '' || FirstName.value == null) {
        messages.push('First-Name is required')
    }

    if (LastName.value === '' || LastName.value == null) {
        messages.push('Last-Name is required')
    }

    if (username.value === '' || username.value == null) {
        messages.push('Username is required')
    }

    if (password.value.length <= 6) {
        messages.push('Password must be longer than 6 characters ')
    }

    if (messages.length > 0) {
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})