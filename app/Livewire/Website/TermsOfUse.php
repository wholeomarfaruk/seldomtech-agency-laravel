<?php

namespace App\Livewire\Website;

use Livewire\Component;

class TermsOfUse extends Component
{
    public function render()
    {
        return view('livewire.website.terms-of-use')->layout('layouts.website');
    }
}
