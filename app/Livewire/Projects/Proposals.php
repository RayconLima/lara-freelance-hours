<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use App\Models\Project;

class Proposals extends Component
{
    public Project $project;

    public function render()
    {
        return view('livewire.projects.proposals');
    }
}
