<div class="text-end 
    @if(array_key_exists('name', $user))
        visible
    @else
        invisible
    @endif 
">
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#upsertTips">Adicionar +</button>
</div>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" class="text-center">Tipo</th>
                <th scope="col" class="w-25 text-center">Marca</th>
                <th scope="col" class="w-25 text-center">Modelo</th>
                <th scope="col" class="text-center">Versão</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
                @foreach($arVehicleTips as $vehicleTips)
            <tr>
                <th scope="row">{{ $vehicleTips['id'] }}</th>
                <td class="text-center">{{ $vehicleTips['type_vehicle'] }}</td>
                <td class="text-center">{{ $vehicleTips['brand'] }}</td>
                <td class="text-center">{{ $vehicleTips['model'] }}</td>
                <td class="text-center">{{ $vehicleTips['version']?? '-' }}</td>
                <td class="text-center">
                    <button class="btn btn-warning me-2 
                        @if(array_key_exists('name', $user) && $user['id'] == $vehicleTips['id_user'])
                            visible
                        @else
                            invisible
                        @endif" type="button" data-bs-toggle="modal" data-bs-target="#upsertTips">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <button class="btn btn-warning me-2" type="button" data-bs-toggle="modal" data-bs-target="#displayTips"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-danger me-2 
                        @if(array_key_exists('id', $user) && $user['id'] == $vehicleTips['id_user'])
                            visible
                        @else
                            invisible
                        @endif" type="button" data-bs-toggle="modal" data-bs-target="#deleteTips">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>