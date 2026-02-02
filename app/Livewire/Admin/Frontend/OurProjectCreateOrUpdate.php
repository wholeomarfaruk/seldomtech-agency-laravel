<?php

namespace App\Livewire\Admin\Frontend;

use App\Models\OurProject;
use App\Models\OurService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class OurProjectCreateOrUpdate extends Component
{
    use WithFileUploads;
    public $content = '';
    public $name, $slug, $demo_link, $short_description, $description, $is_published = false, $is_featured = false, $featured_image, $meta_title, $meta_description, $meta_tags, $meta_image;
    public $project_id;
    public $old_meta_image, $old_featured_image;
    public $services,$service_id;
    protected $queryString = [
        'project_id' => ['except' => ''],
    ];

    public function mount(Request $request)
    {
        $this->project_id = $request->project_id;
        if ($this->project_id) {
            $project = OurProject::find($this->project_id);
            $this->name = $project->name;
            $this->slug = $project->slug;
            $this->short_description = $project->short_description;
            $this->description = $project->description;
            $this->demo_link = $project->demo_link;
            $this->is_published = $project->is_published;
            $this->is_featured = $project->is_featured;
            $this->meta_title = $project->meta_title;
            $this->meta_description = $project->meta_description;
            $this->meta_tags = $project->meta_tags;
            $this->service_id = $project->service_id;
            $this->old_meta_image = $project->meta_image();
            $this->old_featured_image = $project->featured_image('original');
        }
        $services = OurService::where('is_active', true)->get();
        $this->services = $services;

    }
    public function render()
    {
        return view('livewire.admin.frontend.our-project-create-or-update')->layout('layouts.admin');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'service_id' => 'required',
            'short_description' => 'required',
        ]);
        // $project = new OurProject();
        // $project->name = $this->name;
        // $project->slug = $this->slug;
        // $project->short_description = $this->short_description;
        // $project->description = $this->description;
        // $project->demo_link = $this->demo_link;
        // $project->is_published = $this->is_published;
        // $project->is_featured = $this->is_featured;
        // $project->meta_title = $this->meta_title;
        // $project->meta_description = $this->meta_description;
        // $project->meta_tags = $this->meta_tags;
        // $project->save();

        $project = OurProject::updateOrCreate(
            // 1️⃣ Where condition (unique key)
            [
                'id' => $this->project_id,
            ],

            // 2️⃣ Data to update or create
            [
                'name' => $this->name,
                'short_description' => $this->short_description,
                'description' => $this->description,
                'our_service_id' => $this->service_id,
                'demo_link' => $this->demo_link,
                'is_published' => $this->is_published,
                'is_featured' => $this->is_featured,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
                'meta_tags' => $this->meta_tags,
                'slug' => $this->slug,
            ]
        );
        // dd($project->id);
        if ($this->featured_image) {

            $this->validate([
                'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $uploaded = upload(
                OurProject::class,
                $project->id,
                'featured_image',
                $this->featured_image,
                $project->featured_image()
            );
        }
        if ($this->meta_image) {

            $this->validate([
                'meta_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $uploaded = upload(
                OurProject::class,
                $project->id,
                'meta_image',
                $this->featured_image,
                $project->meta_image()
            );
        }



        return redirect()->route('admin.frontend.projects');

    }
    public function generateSlug()
    {
        sleep(1);
        $this->slug = Str::slug($this->name);
    }
}
