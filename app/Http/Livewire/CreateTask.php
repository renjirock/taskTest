<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class CreateTask extends Component
{
    public $open = false;

    public $name, $description;

    protected $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    public function render()
    {
        return view('livewire.create-task');
    }

    public function save()
    {
        $this->validate();
        Task::create([
            'name' => $this->name,
            'description' => $this->description,
            'status_id' => 1
        ]);
        $this->reset(['name', 'description']);
        $this->emitTo('tasks', 'render');
    }
}
