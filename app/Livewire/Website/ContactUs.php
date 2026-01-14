<?php

namespace App\Livewire\Website;

use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        return view('livewire.website.contact-us')->layout('layouts.website');
    }
}
