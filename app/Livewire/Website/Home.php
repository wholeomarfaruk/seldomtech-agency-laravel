<?php

namespace App\Livewire\Website;

use App\Livewire\Admin\Frontend\OurProject;
use App\Models\OurService;
use Livewire\Component;

class Home extends Component
{
    public $our_services;
    public $our_projects;
    public function mount(){
        $this->our_services= OurService::where('is_active', true)->where('parent_id', null)->get();
        
        }
    public function render()
    {
        return view('livewire.website.home')->layout('layouts.website');
    }
}
