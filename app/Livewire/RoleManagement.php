<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Roles;

class RoleManagement extends Component
{
    public $roles;
    public $name;

    public function mount()
    {
        $this->roles = Roles::all();
    }

    public function addRole()
    {
        Roles::create(['name' => $this->name]);
        $this->roles = Roles::all();
        $this->name = '';
    }

    public function render()
    {
        return view('livewire.role-management');
    }
}
