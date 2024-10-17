<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use App\Models\Project;

class Show extends Component
{
    public Project $project;

    public function render()
    {
        $project = Project::with('technologies')->findOrFail($this->project->id);
        return view('livewire.projects.show', compact('project'));
    }
}
