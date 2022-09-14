<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboarComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboar-component')->layout(layouts.base);
    }
}
