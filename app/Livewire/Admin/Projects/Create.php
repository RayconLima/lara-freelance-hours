<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Technology;
use Livewire\Attributes\Rule;

class Create extends Component
{
    public bool $modal  = false;

    #[Rule(['required', 'string'])]
    public string $title            = '';

    #[Rule(['nullable', 'string'])]
    public string $description      = '';
    
    #[Rule(['required', 'string'])]
    public string $ends_at          = '';

    #[Rule(['required', 'array'])]
    public array $tech_stack        = [];

    public function render()
    {
        $technologies = Technology::all();
        return view('livewire.admin.projects.create', compact('technologies'));
    }

    public function save()
    {
        $this->validate();

        $project = Project::create([
            'title'         => $this->title,
            'description'   => $this->description,
            'ends_at'       => $this->ends_at,
            'created_by'    => auth()->user()->id,
        ]);

        $project->technologies()->attach($this->tech_stack);

        $this->dispatch('project::created');

        $this->modal = false;

        session()->flash('message', 'Projeto criado com sucesso!');
    }
}
