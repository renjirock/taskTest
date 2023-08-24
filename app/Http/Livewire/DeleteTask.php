<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class DeleteTask extends Component
{
    public $open = false;
    public $task;

    public function mount(Task $task) {
        $this->task = $task;
    }

    public function delete(){
        $this->task->delete();
        $this->reset(['open']);

        $this->emit('tasks', 'render');
    }

    public function render()
    {
        return view('livewire.delete-task');
    }
}
