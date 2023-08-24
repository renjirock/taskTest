<div>
    <button type="button" class="btn btn-primary" wire:click='$set("open", true)' data-bs-toggle="modal"
        data-bs-target="#createModal">
        Creaar tarea
    </button>

    <!-- Modal -->
    @if ($open)
        <div class="modal fade show" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
            style="display: block;" aria-modal="true" role="dialog">
        @else
            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                aria-hidden="false">
    @endif
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Crear taera</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='$set("open", false)'
                    aria-label="Close"></button>
            </div>
            <div class="modal-body text-center ">
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="email" class="form-control" wire:model='name' name="title" id="title"
                        placeholder="Nombre de la tarea">
                    @error('name')
                        <div class="invalid">
                            Ingresa un nombre valido.
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea class="form-control" wire:model='description' id="description" rows="3"></textarea>
                    @error('name')
                        <div class="invalid">
                            Ingresa una descripcion valida.
                        </div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    wire:click='$set("open", false)'>Cancelar</button>
                <button type="button" wire:click='save' wire:loading.attr='disabled' wire:target='save' class="btn btn-primary">Crear</button>
            </div>
        </div>
    </div>
</div>
</div>
