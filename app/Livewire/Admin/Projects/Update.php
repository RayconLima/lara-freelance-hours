<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Technology;
use Livewire\Attributes\Rule;

class Update extends Component
{
    public Project $project;
    public bool $modal = false;

    #[Rule(['required', 'string'])]
    public string $title = '';

    #[Rule(['nullable', 'string'])]
    public string $description = '';
    
    #[Rule(['required', 'string'])]
    public string $ends_at = '';

    #[Rule(['required', 'array'])]
    public array $tech_stack = [];

    public function mount()
    {
        $this->project      = Project::findOrFail($this->project->id);
        $this->title        = $this->project->title;
        $this->description  = $this->project->description;
        $this->ends_at      = $this->project->ends_at->format('Y-m-d');
    }

    public function save()
    {
        $this->project->update([
            'title'         => $this->title,
            'description'   => $this->description,
            'ends_at'       => $this->ends_at,
        ]);

        $this->dispatch('project::saved');

        $this->modal = false;

        return redirect()->route('admin.projects.index');
    }
    
    public function render()
    {
        $technologies = Technology::all();
        return view('livewire.admin.projects.update', compact('technologies'));
    }
}
