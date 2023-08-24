<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class EditTask extends Component
{
    public $open = false;
    public $task;

    protected $rules = [
        'task.name' => 'required',
        'task.description' => 'required',
        'task.status_id' => 'required',
    ];

    public function mount(Task $task) {
        $this->task = $task;
    }

    public function save(){
        $this->task->save();
        $this->emitTo('tasks', 'render');
    }

    public function render()
    {
        return view('livewire.edit-task');
    }
}
