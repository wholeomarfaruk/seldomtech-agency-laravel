<?php

namespace App\Livewire\Website\Components;

use App\Models\OurProject;
use App\Models\OurService;
use Livewire\Component;

class ProjectSection extends Component
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
        ->orderByDesc('is_featured')->orderByDesc('updated_at')->get()->take(10);

        // if ($this->parent_category == 'all') {
        //     $this->projects = $projects;
        // }
        // Filter by parent category
        // if ($this->parent_category != 'all') {
        //     $this->projects = $projects->filter(function ($project) {
        //         return $project->parent_category['id'] == $this->parent_category;
        //     });
        // }

        // // Filter by search term
        // if ($this->search) {
        //     $search = $this->search;
        //     $this->projects = $this->projects->filter(function ($project) use ($search) {
        //         return str_contains(strtolower($project->title), strtolower($search));
        //     });
        // }
        // dd($this->projects);
        $this->dispatch('refresh');

        return view('livewire.website.components.project-section');

    }
    public function filter($parent_category)
    {
        $this->parent_category = $parent_category;
        // dd($this->parent_category);
        $this->dispatch('refresh');
    }
}
