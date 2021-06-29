const UpsertTips = {
    modal: document.querySelector('#upsertTips'),
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
            type_vehicle: UpsertTips.typeVehicle.value,
            brand: UpsertTips.marcaVehicleInput.value,
            model: UpsertTips.modeloVehicle.value,
            version: UpsertTips.versaoVehicle.value
        }
    },
    save(){
        console.log(UpsertTips.getValues())
    }
}

export { UpsertTips };