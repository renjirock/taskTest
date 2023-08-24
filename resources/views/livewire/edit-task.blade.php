<div>
    <button type="button" class="btn btn-primary" wire:click='$set("open", true)' data-bs-toggle="modal"
        data-bs-target="#editModal{{ $task->id }}">
        edit
    </button>
    <!-- Modal -->
    @if ($open)
    <div class="modal fade show" id="editModal{{ $task->id }}" tabindex="-1"
        aria-labelledby="editModal{{ $task->id }}Label" style="display: block;" aria-modal="true" role="dialog">
    @else
    <div class="modal fade" id="editModal{{ $task->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="editModal{{ $task->id }}Label" aria-hidden="true">
    @endif
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar : {{ $task->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='$set("open", false)'
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titulo</label>
                        <input type="email" class="form-control" wire:model='task.name' name="title" id="title"
                            placeholder="Nombre de la tarea">
                        @error('name')
                            <div class="invalid">
                                Ingresa un nombre valido.
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion</label>
                        <textarea class="form-control" wire:model='task.description' id="description" rows="3"></textarea>
                        @error('name')
                            <div class="invalid">
                                Ingresa una descripcion valida.
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Estatus</label>
                        <select class="form-select" id='status' wire:model='task.status_id' aria-label="Default select example">
                            <option>Open this select menu</option>
                            <option value="1" {{ $task->status_id == 1 ? 'selected' : ''}}>creada</option>
                            <option value="2" {{ $task->status_id == 2 ? 'selected' : ''}}>iniciada</option>
                            <option value="3" {{ $task->status_id == 3 ? 'selected' : ''}}>finalizada</option>
                        </select>
                        @error('name')
                            <div class="invalid">
                                Ingresa una descripcion valida.
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click='$set("open", false)' class="btn btn-secondary"
                        data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" wire:click='save' wire:loading.attr='disabled' wire:target='save'
                        class="btn btn-primary">Guardar</button>

                    @livewire('delete-task', ['task' => $task], key($task->id))
                </div>
            </div>
        </div>
    </div>
</div>
