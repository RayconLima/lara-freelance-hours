<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    #[Url] 
    public string $search = '';
    
    public function render()
    {
        return view('livewire.admin.users.index');
    }

    #[Computed()]
    public function users()
    {
        return User::search($this->search)->get();
    }
}
