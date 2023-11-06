<?php

namespace App\Livewire\Tasks;


use Livewire\Component;

class TasksIndex extends Component
{



    public function render()
    {
        return view(
            'livewire.tasks.tasks-index',
            [
                'tasks' => auth()->user()->tasks->sortBy(['created_at', 'desc']),
            ]
        )->layout('layouts.app');
    }
}
