<?php

namespace App\Livewire\Website;

use App\Models\OurService;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Request;

class Services extends Component
{
    protected $strings = [
        'services' => 'Services'
    ];
    public $category_id='all';
    public $services;
    public $main_categories;
    public function mount(Request $request)
    {
        $this->category_id = $request->category ?? 'all';
        $this->main_categories= OurService::where('parent_id',null)->get();

    }
    public function render()
    {
        $services = $this->services = OurService::query()
            ->when($this->category_id != 'all' , function ($query) {
                $query->where('parent_id', $this->category_id);
            })
            ->where('is_active', true)
            ->get();
        return view('livewire.website.services', compact('services'))->layout('layouts.website');
    }
}
