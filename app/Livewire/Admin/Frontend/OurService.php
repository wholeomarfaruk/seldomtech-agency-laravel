<?php

namespace App\Livewire\Admin\Frontend;

use App\Models\OurService as ModelsOurService;
use Illuminate\Support\Str;
use Livewire\Component;

class OurService extends Component
{
    public $serviceModal = false;
    public $service, $service_id, $name, $slug, $description, $icon, $parent_id, $is_active = true;
    public $json_data = [];
    public $search = '';

    public function storeService()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
     
        ModelsOurService::updateOrCreate(
            // 1. Unique identifier to find the record
            ['id' => $this->service_id],

            // 2. Data to update or create
            [
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'icon' => $this->icon,
                'parent_id' => $this->parent_id,
                'is_active' => $this->is_active ? true : false, // Force boolean
                'json_data' => json_encode($this->json_data ?? []),
            ]
        );
        $this->reset();

        $this->serviceModal = false;
        $this->render();
    }
    public function generateSlug()
    {
        sleep(1);
        $this->slug = Str::slug($this->name);
    }
    public function delete($id)
    {
        $service = ModelsOurService::find($id);
        $service->delete();
    }
    public function addChild($id)
    {
        $this->parent_id = $id;
        $this->serviceModal = true;
    }
    public function render()
    {
        if ($this->search) {
            $services = ModelsOurService::query()->where('name', 'like', '%' . $this->search . '%')->orderBy('name', 'asc')->get();
        } else {

            $services = ModelsOurService::where('parent_id', null)->orderBy('id')->get();
        }
        // dd($services);
        return view('livewire.admin.frontend.our-service', compact('services'))->layout('layouts.admin');
    }
    public function edit($id)
    {
        $service = ModelsOurService::find($id);
        $this->service_id = $service->id;
        $this->name = $service->name;
        $this->slug = $service->slug;
        $this->description = $service->description;
        $this->icon = $service->icon;
        $this->parent_id = $service->parent_id;
        $this->is_active = $service->is_active;
        $this->serviceModal = true;
    }
}
