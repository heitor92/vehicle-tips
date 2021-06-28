import axios from "axios";

const SignUpUser = {
    userName: document.querySelector('#user-form-signup input#userName'),
    userEmail: document.querySelector('#user-form-signup input#userEmail'),
    userPassword: document.querySelector('#user-form-signup input#userPassword'),

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
            SignUpUser.setValid(document.querySelector('#user-form-signup #userName'))
            SignUpUser.setValid(document.querySelector('#user-form-signup #userEmail'))
            SignUpUser.setValid(document.querySelector('#user-form-signup #userPassword'))
            
        }).catch(function (error) {

            if (error.response.data.errors.hasOwnProperty('name')) {
                SignUpUser.setErrorInvalid(
                    document.querySelector('#user-form-signup #name-error'),
                    document.querySelector('#user-form-signup #userName'),
                    error.response.data.errors.name
                )
            } else {
                SignUpUser.setValid(document.querySelector('#user-form-signup #userName'))
            }

            if (error.response.data.errors.hasOwnProperty('email')) {
                SignUpUser.setErrorInvalid(
                    document.querySelector('#user-form-signup #email-error'),
                    document.querySelector('#user-form-signup #userEmail'),
                    error.response.data.errors.email
                )
            } else {
                SignUpUser.setValid(document.querySelector('#user-form-signup #userEmail'))
            }

            if (error.response.data.errors.hasOwnProperty('password')) {
                SignUpUser.setErrorInvalid(
                    document.querySelector('#user-form-signup #password-error'),
                    document.querySelector('#user-form-signup #userPassword'),
                    error.response.data.errors.password
                )
            } else {
                SignUpUser.setValid(document.querySelector('#user-form-signup #userPassword'))
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
    }


}

export { SignUpUser };
