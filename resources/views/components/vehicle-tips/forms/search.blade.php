<div>
    <div class="input-group mb-3 mt-5">
        <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar"
            aria-describedby="pesquisar">
        <button class="btn btn-warning" type="button" id="pesquisar"><i class="bi bi-search"></i></button>
    </div>
    <div class="input-group mb-3 mt-3">
        <select class="form-select" aria-label="Tipo">
            <option selected>-- Tipo --</option>
            @foreach ($arTypeVehicle as $typeVehicle)
                <option value="{{ $typeVehicle['id'] }}">{{ $typeVehicle['name'] }}</option>
            @endforeach
        </select>
        <select class="form-select" aria-label="Marca">
            <option value=""selected>-- Marca --</option>
            @foreach ($arBrands as $brand)
                <option value="{{ $brand['brand'] }}">{{ $brand['brand'] }}</option>
            @endforeach
        </select>
        <select class="form-select" aria-label="Modelo">
            <option selected>-- Modelo --</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <select class="form-select" aria-label="Modelo">
            <option selected>-- Versão --</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="input-group mb-5 mt-3 
        @if(array_key_exists('name', $user))
            visible
        @else
            invisible
        @endif 
        ">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="MinhasDicas">
            <label class="form-check-label" for="MinhasDicas">
                Minhas Dicas
            </label>
        </div>
    </div>
</div>