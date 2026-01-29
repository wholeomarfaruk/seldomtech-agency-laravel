<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class BlankPage extends Component
{
    public function render()
    {
        return view('livewire.admin.blank-page')->layout('layouts.admin');
    }
}
