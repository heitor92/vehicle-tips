<div class="modal fade" id="upsertTips" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="upsertTipsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="upsertTipsLabel">Nova Dica de veículo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <select class="form-select" id="typeVehicle" aria-label="Tipo de Veículo">
                            <option selected>-- Tipo --</option>
                            <option value="1">Moto</option>
                            <option value="2">Carro</option>
                            <option value="3">Caminhão</option>
                        </select>
                    </div>
                    <div class="mb-3 input-group">
                        <input type="text" class="form-control w-75" placeholder="Marca" aria-label="Marca">
                        <select class="form-select" aria-label="Marca">
                            <option selected>-</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Modelo" aria-label="Modelo">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Versão" aria-label="Versão">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-warning">Salvar</button>
            </div>
        </div>
    </div>
</div>