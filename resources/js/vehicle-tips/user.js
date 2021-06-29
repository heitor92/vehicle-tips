import axios from "axios";

const SignUpUser = {
    modal: document.querySelector('#signUpUser'),
    userName: document.querySelector('#user-form-signup input#userName'),
    userEmail: document.querySelector('#user-form-signup input#userEmail'),
    userPassword: document.querySelector('#user-form-signup input#userPassword'),
    nameError: document.querySelector('#user-form-signup #name-error'),
    emailError: document.querySelector('#user-form-signup #email-error'),
    passwordError: document.querySelector('#user-form-signup #password-error'),


    getValues() {
        return {
            name: SignUpUser.userName.value,
            email: SignUpUser.userEmail.value,
            password: SignUpUser.userPassword.value
        }
    },

    register() {
        axios({
            method: 'post',
            url: '/user/save',
            data: SignUpUser.getValues()
        }).then(function (response) {
            let modal = bootstrap.Modal.getInstance(SignUpUser.modal)

            SignUpUser.setValid(SignUpUser.userName)
            SignUpUser.setValid(SignUpUser.userEmail)
            SignUpUser.setValid(SignUpUser.userPassword)
            SignUpUser.clear(SignUpUser.userName)
            SignUpUser.clear(SignUpUser.userEmail)
            SignUpUser.clear(SignUpUser.userPassword)
            //SignUpUser.modal.hide()
            modal.hide()

        }).catch(function (error) {
            if (error.response.data.errors.hasOwnProperty('name')) {
                SignUpUser.setErrorInvalid(
                    SignUpUser.nameError,
                    SignUpUser.userName,
                    error.response.data.errors.name
                )
            } else {
                SignUpUser.setValid(SignUpUser.userName)
            }

            if (error.response.data.errors.hasOwnProperty('email')) {
                SignUpUser.setErrorInvalid(
                    SignUpUser.emailError,
                    SignUpUser.userEmail,
                    error.response.data.errors.email
                )
            } else {
                SignUpUser.setValid(SignUpUser.userEmail)
            }

            if (error.response.data.errors.hasOwnProperty('password')) {
                SignUpUser.setErrorInvalid(
                    SignUpUser.passwordError,
                    SignUpUser.userPassword,
                    error.response.data.errors.password
                )
            } else {
                SignUpUser.setValid(SignUpUser.userPassword)
            }

        });
    },

    setErrorInvalid(elementError, elementInput, errorArray) {
        let html = ''
        elementInput.classList.remove('is-valid')
        elementInput.classList.add('is-invalid')
        errorArray.forEach((message) => {
            html += `${message}<br>`
        });
        elementError.innerHTML = html
    },

    setValid(elementInput) {
        elementInput.classList.remove('is-invalid')
        elementInput.classList.add('is-valid')
    },

    clear(elementInput) {
        elementInput.classList.remove('is-invalid')
        elementInput.classList.remove('is-valid')
        elementInput.value = ""
    }


}

const LoginUser = {
    modal: document.querySelector('#loginUser'),
    formLogin: document.querySelector('#user-login'),
    userEmailLogin: document.querySelector('#user-login #userEmailLogin'),
    userPasswordLogin: document.querySelector('#user-login #userPasswordLogin'),
    emailError: document.querySelector('#user-login #email-error'),
    passwordError: document.querySelector('#user-login #password-error'),

    getValues() {
        return {
            email: LoginUser.userEmailLogin.value,
            password: LoginUser.userPasswordLogin.value
        }
    },

    login() {
        console.log(LoginUser.getValues())
        axios({
            method: 'post',
            url: '/user/login',
            data: LoginUser.getValues()
        }).then(function (response) {
            //let modal = bootstrap.Modal.getInstance(SignUpUser.modal)
            LoginUser.clear(LoginUser.userEmailLogin)
            LoginUser.clear(LoginUser.userPasswordLogin)
            window.location.href = "http://localhost";
            

        }).catch(function (error) {

            if(error.response.data.errors.hasOwnProperty('emailAlert')){
                LoginUser.showAlert(error.response.data.errors.emailAlert)
            }
            
            if (error.response.data.errors.hasOwnProperty('email')) {
                LoginUser.setErrorInvalid(
                    LoginUser.emailError,
                    LoginUser.userEmailLogin,
                    error.response.data.errors.email
                )
            } else {
                LoginUser.userEmailLogin.classList.remove('is-invalid')
            }

            if (error.response.data.errors.hasOwnProperty('password')) {
                LoginUser.setErrorInvalid(
                    LoginUser.passwordError,
                    LoginUser.userPasswordLogin,
                    error.response.data.errors.password
                )
            } else {
                LoginUser.userPasswordLogin.classList.remove('is-invalid')
            }
        });
    },

    logout(){
        axios({
            method: 'post',
            url: '/user/logout',
        }).then(function (response) {
            window.location.href = "http://localhost";
        })
    },

    showAlert(errorArray) {

        let alertUserLogin = document.createElement('div')
        let alertButton = document.createElement('button')
        let html = ''

        errorArray.forEach((message) => {
            html += `${message}<br>`
        });

        alertUserLogin.innerHTML = html

        alertButton.setAttribute('data-bs-dismiss', 'alert')
        alertButton.setAttribute('aria-label', 'Close')
        alertButton.setAttribute('type', 'button')
        alertButton.classList.add('btn-close')

        alertUserLogin.id = 'alert-login-user'
        alertUserLogin.classList.add('alert', 'alert-danger', 'alert-dismissible')
        alertUserLogin.setAttribute('role', 'alert')
        alertUserLogin.appendChild(alertButton)
        LoginUser.formLogin.appendChild(alertUserLogin)
    },

    setErrorInvalid(elementError, elementInput, errorArray) {
        let html = ''
        elementInput.classList.add('is-invalid')
        errorArray.forEach((message) => {
            html += `${message}<br>`
        });
        elementError.innerHTML = html
    },

    clear(elementInput) {
        elementInput.classList.remove('is-invalid')
        elementInput.value = ""
    }
}
export { SignUpUser, LoginUser };
