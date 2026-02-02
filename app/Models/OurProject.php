<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurProject extends Model
{
    protected $table = 'our_projects';

    protected $fillable = [
        'our_service_id',
        'name',
        'slug',
        'demo_link',
        'short_description',
        'description',
        'is_published',
        'is_featured',
        'meta_title',
        'meta_tags',
        'meta_description',
        'json_data',
    ];

    public function service()
    {
        return $this->belongsTo(OurService::class, 'our_service_id');
    }
    public function featured_image($type = null)
    {
        // 1. Get the specific morph relation record
        $file = $this->morphMany(File::class, 'model')
            ->where('for', 'featured_image')
            ->first();
        if ($type == null) {
            return $file;
        }
        // 2. Check if the file record exists
        if (!$file) {
            return url('assets/images/no-found/no-image.jpg');
        }

        // 3. Logic to get the specific path based on type
        // Assuming 'getFirst' returns an object with a 'path' property
        $imagePath = $file->getFirst($type)->path ?? null;

        // 4. Validate file existence and return URL
        if (file_exists('storage/' . $imagePath)) {
            return url('storage/' . $imagePath);
        }

        return url('assets/images/no-found/no-image.jpg');
    }
    public function meta_image($type = null)
    {
        // 1. Get the specific morph relation record
        $file = $this->morphMany(File::class, 'model')
            ->where('for', 'meta_image')
            ->first();
        if ($type == null) {
            return $file;
        }
        // 2. Check if the file record exists
        if (!$file) {
            return null;
        }

        // 3. Logic to get the specific path based on type
        // Assuming 'getFirst' returns an object with a 'path' property
        $imagePath = $file->getFirst($type)->path ?? null;

        // 4. Validate file existence and return URL
        if (file_exists('storage/' . $imagePath)) {
            return url('storage/' . $imagePath);
        }

        return null;
    }
}
