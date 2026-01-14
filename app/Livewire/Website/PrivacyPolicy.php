<?php

namespace App\Livewire\Website;

use Livewire\Component;

class PrivacyPolicy extends Component
{
    public function render()
    {
        return view('livewire.website.privacy-policy')->layout('layouts.website');
    }
}
