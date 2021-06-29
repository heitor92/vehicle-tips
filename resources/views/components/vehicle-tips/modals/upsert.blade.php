<div class="modal fade" id="upsertTips" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="upsertTipsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="upsertTipsLabel">Nova dica de veículo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="upsert-vehicle-tips-form">
                <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" id="idUser" name="id_user" value="{{ $user['id']??'' }}">
                    <div class="mb-3 input-group">
                        <select class="form-select" id="typeVehicle" aria-label="Tipo de Veículo">
                            <option value="" selected>-- Tipo --</option>
                            @foreach ($arTypeVehicle as $typeVehicle)
                                <option value="{{ $typeVehicle['id'] }}">{{ $typeVehicle['name'] }}</option>
                            @endforeach
                        </select>
                        <div id="type-vehicle-error" class="invalid-tooltip">
                        </div>
                    </div>
                    <div class="input-group mb-3 input-group">
                        <input type="text" class="form-control w-75" id="marcaVehicleInput" placeholder="Marca" aria-label="Marca">
                        <div id="marca-vehicle-input-error" class="invalid-tooltip">
                        </div>
                        <select onchange="UpsertTips.changeBrand()" class="form-select" aria-label="Marca" id="marcaVehicleSelect">
                            <option value="" selected>-</option>
                            @foreach ($arBrands as $brand)
                                <option value="{{ $brand['brand'] }}">{{ $brand['brand'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="modeloVehicle" class="form-control" value="" placeholder="Modelo" aria-label="Modelo">
                        <div id="modelo-vehicle-error" class="invalid-tooltip">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="versaoVehicle" class="form-control" value="" placeholder="Versão" aria-label="Versão">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-warning" onclick="UpsertTips.save()">Salvar</button>
            </div>
        </div>
    </div>
</div>