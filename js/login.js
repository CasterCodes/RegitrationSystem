// user interface variables
//form input variables
const username = document.querySelector('#username');
const password = document.querySelector('#password');
const login = document.querySelector('#submit');
const error = document.querySelector('.error');
//error variables
const usernameErr = document.querySelector('#usernameErr');
const passwordErr = document.querySelector('#passwordErr');
//add event listener to the form
form.addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = new FormData();
    formData.append('username', username.value);
    formData.append('password', password.value);
    formData.append('login', login.value);
    const http = new Http();
    http.post('login.php', formData).then(res => {
        const ui = new UI();
        ui.validateLogin(res);

    });

})