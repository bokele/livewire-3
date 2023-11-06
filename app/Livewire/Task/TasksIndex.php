<?php

namespace App\Livewire\Task;

use Livewire\Component;

class TasksIndex extends Component
{
    public $title;
    public $slug;
    public  $description;
    public $status;
    public $priority;
    public $deadline;


    public function render()
    {
        return view('livewire.task.tasks-index')->layout('layouts.app');
    }


    public function store()
    {
        auth()->user()->tasks()->create($this->only([
            'title',
            'slug',
            'description',
            'status',
            'priority',
            'deadline',
        ]));

        $this->reset();
    }
}
