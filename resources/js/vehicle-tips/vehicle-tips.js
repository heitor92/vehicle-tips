const UpsertTips = {
    modal: document.querySelector('#upsertTips'),
    formUpsertVehicleTips: document.querySelector('#upsert-vehicle-tips-form'),
    token: document.querySelector('#upsert-vehicle-tips-form input#token'),
    idUser: document.querySelector('#upsert-vehicle-tips-form input#idUser'),
    typeVehicle: document.querySelector('#upsert-vehicle-tips-form select#typeVehicle'),
    marcaVehicleInput: document.querySelector('#upsert-vehicle-tips-form input#marcaVehicleInput'),
    marcaVehicleSelect: document.querySelector('#upsert-vehicle-tips-form select#marcaVehicleSelect'),
    modeloVehicle: document.querySelector('#upsert-vehicle-tips-form input#modeloVehicle'),
    versaoVehicle: document.querySelector('#upsert-vehicle-tips-form input#versaoVehicle'),
    typeVehicleError: document.querySelector('#upsert-vehicle-tips-form #type-vehicle-error'),
    marcaVehicleInputError: document.querySelector('#upsert-vehicle-tips-form #marca-vehicle-input-error'),
    modeloVehicleError: document.querySelector('#upsert-vehicle-tips-form #modelo-vehicle-error'),

    getValues() {
        return {
            _token: UpsertTips.token.value,
            id_user: UpsertTips.idUser.value,
            type_vehicle: UpsertTips.typeVehicle.value,
            brand: UpsertTips.marcaVehicleInput.value,
            model: UpsertTips.modeloVehicle.value,
            version: UpsertTips.versaoVehicle.value
        }
    },

    save() {
        console.log(UpsertTips.getValues())
        axios({
            method: 'post',
            url: '/vehicle-tip/save',
            data: UpsertTips.getValues()
        }).then(function (response) {
            let modal = bootstrap.Modal.getInstance(UpsertTips.modal)
            UpsertTips.clear(UpsertTips.typeVehicle)
            UpsertTips.clear(UpsertTips.marcaVehicleInput)
            UpsertTips.clear(UpsertTips.modeloVehicle)
            UpsertTips.clear(UpsertTips.versaoVehicle)
            modal.hide()
            window.location.href = "http://localhost";
        }).catch(function (error) {

            if (error.response.data.errors.hasOwnProperty('type_vehicle')) {
                UpsertTips.setErrorInvalid(
                    UpsertTips.typeVehicleError,
                    UpsertTips.typeVehicle,
                    error.response.data.errors.type_vehicle
                )
            } else {
                UpsertTips.setValid(UpsertTips.typeVehicle)
            }

            if (error.response.data.errors.hasOwnProperty('brand')) {
                UpsertTips.setErrorInvalid(
                    UpsertTips.marcaVehicleInputError,
                    UpsertTips.marcaVehicleInput,
                    error.response.data.errors.brand
                )
            } else {
                UpsertTips.setValid(UpsertTips.marcaVehicleInput)
            }

            if (error.response.data.errors.hasOwnProperty('model')) {
                UpsertTips.setErrorInvalid(
                    UpsertTips.modeloVehicleError,
                    UpsertTips.modeloVehicle,
                    error.response.data.errors.model
                )
            } else {
                UpsertTips.setValid(UpsertTips.modeloVehicle)
            }

            if (error.response.data.errors.hasOwnProperty('id_user')) {
                UpsertTips.showAlert(error.response.data.errors.id_user)
            }

        })
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
    },

    showAlert(errorArray) {

        let alertVehicleTips = document.createElement('div')
        let alertButton = document.createElement('button')
        let html = ''

        errorArray.forEach((message) => {
            html += `${message}<br>`
        });

        alertVehicleTips.innerHTML = html

        alertButton.setAttribute('data-bs-dismiss', 'alert')
        alertButton.setAttribute('aria-label', 'Close')
        alertButton.setAttribute('type', 'button')
        alertButton.classList.add('btn-close')

        alertVehicleTips.id = 'alert-login-user'
        alertVehicleTips.classList.add('alert', 'alert-danger', 'alert-dismissible')
        alertVehicleTips.setAttribute('role', 'alert')
        alertVehicleTips.appendChild(alertButton)
        UpsertTips.formUpsertVehicleTips.appendChild(alertVehicleTips)
    },
    changeBrand(){
        UpsertTips.marcaVehicleInput.value = UpsertTips.marcaVehicleSelect.value
        UpsertTips.marcaVehicleSelect.value = ""
    }
}

export { UpsertTips };