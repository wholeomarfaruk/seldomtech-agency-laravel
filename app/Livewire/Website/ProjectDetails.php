<?php

namespace App\Livewire\Website;

use App\Models\OurProject;
use Livewire\Component;

class ProjectDetails extends Component
{
    public $slug;
    public $project;
    public function mount($slug){
        $this->slug = $slug;

        $project = OurProject::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.website.project-details')->layout('layouts.website');
    }
}
