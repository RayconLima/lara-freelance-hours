<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class Show extends Component
{
    public Project $project;

    public function mount()
    {
        $this->project  = Project::findOrFail($this->project->id);
    }

    public function render()
    {
        return view('livewire.admin.projects.show', [
            'project' => $this->project->proposals()
                ->orderBy('hours')
                ->paginate(),
        ]);
    }
}
