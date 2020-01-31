// user interface variables
//form input variables
const name = document.querySelector('#name');
const username = document.querySelector('#username');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const cpassword = document.querySelector('#cpassword');
const submit = document.querySelector('#submit');
const form = document.querySelector('#form');
//error variables
const input = document.querySelector('.form-input');
const nameErr = document.querySelector('#nameErr');
const usernameErr = document.querySelector('#usernameErr');
const emailErr = document.querySelector('#emailErr');
const passwordErr = document.querySelector('#passwordErr');
const cpasswordErr = document.querySelector('#cpasswordErr');
const inputErr = document.querySelector('.form-input');

//add event listener to the form
form.addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = new FormData();
    formData.append('name', name.value);
    formData.append('username', username.value);
    formData.append('email', email.value);
    formData.append('password', password.value);
    formData.append('cpassword', cpassword.value);
    formData.append('submit', submit.value);
    const http = new Http();
    http.post('register.php', formData).then(res => {
        const ui = new UI();
        ui.validateReg(res);

    });

})