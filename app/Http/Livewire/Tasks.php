<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Tasks extends Component
{
    public $search;

    protected $listeners = ['render' => 'render'];

    public function render()
    {
        $tasks = TaskModel::where('name', 'like', "%{$this->search}%")
                            ->orderBy('created_at', 'desc')
                            ->get();
        // $tasks = TaskModel::all();
        return view('livewire.tasks', compact(['tasks']));
    }
}
