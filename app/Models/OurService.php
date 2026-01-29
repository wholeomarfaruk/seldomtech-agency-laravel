<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    protected $table = 'our_services';

    protected $fillable = [
        'name',
        'description',
        'slug',
        'json_data',
        'parent_id',
        'status',
    ];

    public function parent()
    {
        return $this->belongsTo(OurService::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(OurService::class, 'parent_id');
    }
    
}
