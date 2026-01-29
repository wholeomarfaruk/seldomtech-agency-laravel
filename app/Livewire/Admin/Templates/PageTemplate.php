<?php

namespace App\Livewire\Admin\Templates;

use Livewire\Component;

class PageTemplate extends Component
{
    public function render()
    {
        return view('livewire.admin.templates.page-template')->layout('layouts.admin');
    }
}
