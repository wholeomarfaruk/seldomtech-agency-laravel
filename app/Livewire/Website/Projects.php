<?php

namespace App\Livewire\Website;

use App\Models\OurProject;
use App\Models\OurService;
use Livewire\Component;

class Projects extends Component
{
        public $projects;
    public string $search = '';
    public string $section_title;
    public string $section_description;
    public string $parent_category = 'all';
    public $main_categories;
        public function mount(){

        $this->main_categories= OurService::where('parent_id',null)->get();
    }

    public function render()
    {
          $this->projects= OurProject::query()
        // ->where('is_published', true)
        ->with(['service'])
        ->when($this->search, function ($query) {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
        ->when($this->parent_category != 'all', function ($query) {
            $query->where('our_service_id', $this->parent_category)
                ->orWhereHas('service', function ($subQ) {
                    $subQ->where('parent_id', $this->parent_category);
                });
        })
        ->orderByDesc('is_featured')->orderByDesc('updated_at')->get();

        $this->dispatch('refresh');
        return view('livewire.website.projects')->layout('layouts.website');
    }
     public function filter($parent_category)
    {
        $this->parent_category = $parent_category;
        // dd($this->parent_category);
        $this->dispatch('refresh');
    }
}
