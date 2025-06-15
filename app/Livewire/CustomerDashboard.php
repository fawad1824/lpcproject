<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CustomerDashboard extends Component
{
    #[Layout('components.layouts.auth.userDashboard')]

    public function render()
    {
        return view('livewire.customer-dashboard');
    }
}
