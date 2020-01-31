//http request class contructor
function Http() {

}
//userinterface class contructor
function UI() {

}
//method to post data
Http.prototype.post = async function (url, data) {
    const resultSent = await fetch(url, {
        method: 'POST',
        header: {
            'Content-type': 'x-www-form-urlencoded'
        },
        body: data
    });
    const datares = await resultSent.text();
    return datares;
}
//to validate user during registration
UI.prototype.validateReg = function (res) {
    nameErr.innerHTML = usernameErr.innerHTML = emailErr.innerHTML = passwordErr.innerHTML = cpasswordErr.innerHTML = '';
    name.style.border = email.style.border = username.style.border = password.style.border = cpassword.style.border = '';
    switch (res) {
        case 'nameErr':
            nameErr.innerHTML = 'Please enter your name';
            name.style.border = '1px solid red';
            break;
        case 'usernameErr':
            usernameErr.innerHTML = 'Please enter your Username';
            username.style.border = '1px solid red';
            break;
        case 'emailErr':
            emailErr.innerHTML = 'Please enter your email';
            email.style.border = '1px solid red'
            break;
        case 'passwordErr':
            passwordErr.innerHTML = 'Please enter your password';
            password.style.border = '1px solid red';
            break;
        case 'cpasswordErr':
            cpasswordErr.innerHTML = 'Please re-enter your passeord';
            cpassword.style.border = '1px solid red';
            break;
        case 'matchpassword':
            cpasswordErr.innerHTML = 'Passwords do not match';
            cpassword.style.border = '1px solid red';
            break;
        case 'invalidEmail':
            emailErr.innerHTML = 'Please enter a vaid email';
            cpassword.style.border = '1px solid red';
            break;
        case 'usernameExists':
            usernameErr.innerHTML = 'Username already exists';
            username.style.border = '1px solid red';
            break;
        case 'emailExists':
            emailErr.innerHTML = 'Email already exists';
            email.style.border = '1px solid red'
            break;
        case 'success':
            submit.value = 'Processing.....';
            setTimeout(() => {
                submit.value = 'Processing.....';
                setTimeout(() => {
                    submit.value = 'Signing up...';
                    window.location = 'signin.php'
                }, 5000);

            }, 2000);
            break;




    }
}
//validate login
UI.prototype.validateLogin = function (res) {
    usernameErr.innerHTML = passwordErr.innerHTML = error.innerHTML = '';
    username.style.border = password.style.border = '';
    switch (res) {
        case 'usernameErr':
            usernameErr.innerHTML = 'Please enter your Username';
            username.style.border = '1px solid red';
            break;
        case 'passwordErr':
            passwordErr.innerHTML = 'Please enter your password';
            password.style.border = '1px solid red';
            break;
        case 'wrongpassword':
            passwordErr.innerHTML = 'Wrong password';
            password.style.border = '1px solid red';
            break;
        case 'nouser':
            passwordErr.innerHTML = 'No such user. Please re-enter your info again';
            password.style.border = '1px solid red';
            break;
        case 'success':
            login.value = 'Processing....';
            setTimeout(() => {
                login.value = 'Processing....';
                setTimeout(() => {
                    login.value = 'Signing in...';
                    window.location.href = 'welcome.php';
                }, 5000);

            }, 2000);


    }
}
