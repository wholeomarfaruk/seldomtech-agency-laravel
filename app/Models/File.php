<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';
    protected $fillable = [
        'name',
        'caption',
        'for',
        'type',
        'extension',
        'model_id',
        'model_type',
    ];

   
    public function getAll()
    {
        return $this->hasMany(FileItem::class);
    }
    public function getFirst($for)
    {
        return $this->hasOne(FileItem::class)->where('for', $for)->first();
    }
    public function getItems($for)
    {
        return $this->hasMany(FileItem::class)->where('for', $for)->get();
    }
    public function content()
    {
        return $this->morphTo();
    }
}
