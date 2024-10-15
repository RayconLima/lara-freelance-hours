<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public string $search = '';

    #[On('project::created')]
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
