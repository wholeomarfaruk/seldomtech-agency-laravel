<?php

namespace App\Livewire\Admin\Frontend;

use App\Models\OurProject as ModelsOurProject;
use App\Models\OurService;
use Livewire\Component;
use Livewire\WithPagination;

class OurProject extends Component
{
    public $services;
    public $search = '';
    public $category_id;

    use WithPagination;
    // OPTIONAL: keep pagination when filtering/searching

    protected string $paginationTheme = 'tailwind';


    // 🔴 VERY IMPORTANT
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->services = OurService::where('is_active', true)->get();

    }
    public function render()
    {
        $projects = ModelsOurProject::query()
            ->with(['service']) // Eager load the service relationship
            ->when($this->search, function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%');
            })
            ->when($this->category_id, function ($query) {
                $query->where(function ($q) {
                    $q->where('our_service_id', $this->category_id)
                        ->orWhereHas('service', function ($subQ) {
                            $subQ->where('parent_id', $this->category_id);
                        });
                });
            })
            ->orderByDesc('is_featured')
            ->orderByDesc('updated_at')
            ->paginate(20);
            // dd($projects->first()->service);
        return view('livewire.admin.frontend.our-project', ['projects' => $projects])->layout('layouts.admin');
    }
    public function delete($id)
    {
        $project = ModelsOurProject::find($id);
        $project->delete();

    }
}
