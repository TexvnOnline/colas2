@include('common.modalHead')
<div class="row">

    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label >Nombre</label>
            <input type="text"  wire:model.lazy="name" class="form-control" placeholder="ej: Caja" >
            @error('name') <span class="text-danger er">{{ $message}}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label >Letra</label>
            <input type="text"  wire:model.lazy="letter" class="form-control" placeholder="ej: C" >
            @error('letter') <span class="text-danger er">{{ $message}}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label >Número inicial</label>
            <input type="number"  wire:model.lazy="start_number" class="form-control" placeholder="ej: 1" >
            @error('start_number') <span class="text-danger er">{{ $message}}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label >Estado</label>
            <select wire:model='status' class="form-control">
                <option value="Elegir" disabled>Elegir</option>
                <option value="1" >Activo</option>
                <option value="0" >Desactivado</option>
            </select>
            @error('status') <span class="text-danger er">{{ $message}}</span>@enderror
        </div>
    </div>
</div>
@include('common.modalFooter')
