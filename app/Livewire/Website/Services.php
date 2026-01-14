<?php

namespace App\Livewire\Website;

use Livewire\Component;

class Services extends Component
{
    protected $strings = [
        'services' => 'Services'
    ];
    public $categroy_slug;

    public function render()
    {
        $services = collect([
            array_merge(
                array_map(fn($i) => [
                    'id' => $i,
                    'category_id' => 1,
                    'title' => "Custom Software $i",
                    'description' => "Description of Custom Software $i"
                ], range(1, 8)),
                array_map(fn($i) => [
                    'id' => $i + 7,
                    'category_id' => 2,
                    'title' => "Website & Apps $i",
                    'description' => "Description of Website & Apps $i"
                ], range(1, 8)),
                array_map(fn($i) => [
                    'id' => $i + 15,
                    'category_id' => 3,
                    'title' => "Branding & Design $i",
                    'description' => "Description of Branding & Design $i"
                ], range(1, 8)),
                array_map(fn($i) => [
                    'id' => $i + 23,
                    'category_id' => 4,
                    'title' => "Digital Marketing $i",
                    'description' => "Description of Digital Marketing $i"
                ], range(1, 7))
            )

        ])->map(fn($service) => (object) $service);
        $services=$services['0'];
        // dd($services);

        return view('livewire.website.services', compact('services'))->layout('layouts.website');
    }
}
