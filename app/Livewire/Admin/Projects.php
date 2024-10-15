<?php

namespace App\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public string $search = '';

    public function render()
    {
        return view('livewire.admin.projects.index', [
            'projects' => Project::where('title', 'LIKE', "%{$this->search}%")->get(),
        ]);
    }
    
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
