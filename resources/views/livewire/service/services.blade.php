<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{ $componentName }} | {{ $pageTitle }}</b>
                </h4>
                <ul class="tabs tab-pills">
                    @can('Category_Create')
                        <li>
                            <a href="javascript:void(0)" class="tabmenu bg-dark" data-toggle="modal"
                                data-target="#theModal">Agregar</a>
                        </li>
                    @endcan
                </ul>
            </div>
            @can('Category_Search')
                @include('common.searchbox')
            @endcan
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table striped mt-1">
                        <thead class="text-white" style="background: #3B3F5C">
                            <tr>
                                <th class="table-th text-white">DESCRIPCIÓN</th>
                                <th class="table-th text-white text-center">LETRA</th>
                                <th class="table-th text-white text-center">NÚMERO INICIAL</th>
                                <th class="table-th text-white text-center">ESTADO</th>
                                <th class="table-th text-white text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>
                                        <h6>{{ $service->name }}</h6>
                                    </td>
                                    <td class="text-center">{{ $service->letter }}</td>
                                    <td class="text-center">{{ $service->start_number }}</td>
                                    <td class="text-center">{{ $service->estado }}</td>
                                    <td class="text-center">
                                        @can('Category_Update')
                                            <a href="javascript:void(0)" wire:click="Edit({{ $service->id }})"
                                                class="btn btn-dark mtmobile" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        @endcan
                                        {{-- @if ($service->products->count() < 1) --}}
                                            @can('Category_Destroy')
                                                <a href="javascript:void(0)" onclick="Confirm('{{ $service->id }}')"
                                                    class="btn btn-dark" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            @endcan
                                        {{-- @endif --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.service.form')
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show')
        });
        window.livewire.on('service-added', msg => {
            $('#theModal').modal('hide')
        });
        window.livewire.on('service-updated', msg => {
            $('#theModal').modal('hide')
        });
    });
    function Confirm(id) {
        swal({
            title: 'CONFIRMAR',
            text: '¿CONFIRMAS ELIMINAR EL REGISTRO?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonColor: '#3B3F5C',
            confirmButtonText: 'Aceptar'
        }).then(function(result) {
            if (result.value) {
                window.livewire.emit('deleteRow', id)
                swal.close()
            }

        })
    }
</script>
