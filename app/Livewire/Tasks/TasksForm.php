<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use App\Livewire\Forms\TaskForm;

class TasksForm extends Component
{
    public TaskForm $form;

    public function store()
    {
        $this->validate();
        $this->form->createTask();

        $this->form->reset();

        request()->session()->flash('message', 'Task successfully created.');
    }

    public function render()
    {
        return view('livewire.tasks.tasks-form');
    }
}
