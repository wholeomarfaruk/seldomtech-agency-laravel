<?php

namespace App\Livewire\Website\Components;

use Livewire\Component;

class ProjectSection extends Component
{
    public $projects;
    public string $search = '';
    public string $section_title;
    public string $section_description;
    public string $parent_category = 'all';

    public function render()
    {
        $projects = collect([
            [
                'title' => 'Project 1',
                'category' => [
                    'name' => 'Category 1',
                ],
                'parent_category' => [
                    'name' => 'Category 1',
                    'id' => 1,
                ],
                'description' => 'Lorem ipsum...',
                'featured_image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
                'url' => '#',
            ],
            [
                'title' => 'Project 2',
                'category' => [
                    'name' => 'Category 2',

                ],
                'parent_category' => [
                    'name' => 'Category 2',
                    'id' => 2,
                ],
                'description' => 'Lorem ipsum...',
                'featured_image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
                'url' => '#',
            ],
        ])->map(fn($project) => (object) $project);
        if ($this->parent_category == 'all') {
            $this->projects = $projects;
        }
        // Filter by parent category
        if ($this->parent_category != 'all') {
            $this->projects = $projects->filter(function ($project) {
                return $project->parent_category['id'] == $this->parent_category;
            });
        }

        // Filter by search term
        if ($this->search) {
            $search = $this->search;
            $this->projects = $this->projects->filter(function ($project) use ($search) {
                return str_contains(strtolower($project->title), strtolower($search));
            });
        }
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
