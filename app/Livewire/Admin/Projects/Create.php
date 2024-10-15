<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Attributes\Rule;
use Livewire\Component;

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
        return view('livewire.admin.projects.create');
    }

    public function save()
    {
        $this->validate();

        Project::create([
            'title'         => $this->title,
            'description'   => $this->description,
            'tech_stack'    => $this->tech_stack,
            'ends_at'       => $this->ends_at,
            'created_by'    => auth()->user()->id,
        ]);

        $this->dispatch('project::created');

        $this->modal = false;

        session()->flash('message', 'Projeto criado com sucesso!');
    }
}
