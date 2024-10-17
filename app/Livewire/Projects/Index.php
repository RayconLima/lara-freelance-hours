<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Computed;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index');
    }

    #[Computed()]
    public function projects() 
    {
        return Project::query()->with('technologies')->inRandomOrder()->get();
    }
}
