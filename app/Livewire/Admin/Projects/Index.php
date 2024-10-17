<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;

class Index extends Component
{
    #[Url] 
    public string $search = '';

    #[On('project::created', 'project::saved')]
    public function render()
    {
        return view('livewire.admin.projects.index');
    }

    public function show(Project $project)
    {
        return view('livewire.admin.projects.show', compact('project'));
    }

    #[Computed()]
    public function projects()
    {
        return  Project::search($this->search)->get();
    }
    
    public function destroy(Project $project)
    {
        $project->technologies()->detach();
        $project->delete();
        $this->dispatch('project::saved');
        return redirect()->route('admin.projects.index');
    }
}
