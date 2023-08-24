<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <input type="text" id="Search" wire:model="search" class="form-control" placeholder="Search..."
                    aria-label="Search">
            </div>
        </div>
    </div>
    <div class="container-fluid pb-3 mt-3">
        <div class="d-grid gap-3" style="grid-template-columns: 1fr 1fr 1fr;">
            <div class="bg-light border rounded-3">
                @foreach ($tasks as $task)
                    @if ($task->status_id == 1)
                        <x-card name='{{ $task->name }}' date='{{ $task->created_at }}'>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        @livewire('edit-task', ['task' => $task], key($task->id))
                                    </div>
                                </div>
                            </div>
                        </x-card>
                    @endif
                @endforeach
            </div>
            <div class="bg-light border rounded-3">
                @foreach ($tasks as $task)
                    @if ($task->status_id == 2)
                        <x-card name='{{ $task->name }}' date='{{ $task->created_at }}'>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        @livewire('edit-task', ['task' => $task], key($task->id))
                                    </div>
                                </div>
                            </div>
                        </x-card>
                    @endif
                @endforeach
            </div>
            <div class="bg-light border rounded-3">
                @foreach ($tasks as $task)
                    @if ($task->status_id == 3)
                        <x-card name='{{ $task->name }}' date='{{ $task->created_at }}'>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        @livewire('edit-task', ['task' => $task], key($task->id))
                                    </div>
                                </div>
                            </div>
                        </x-card>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
