<?php

namespace App\Livewire\Admin;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        return view('livewire.admin.projects');
    }

    #[Computed()]
    public function projects() 
    {
        return Project::query()->inRandomOrder()->get();
    }
}
