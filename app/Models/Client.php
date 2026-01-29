<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country_code',
        'country',
        'city',
        'zipcode',
        'address',
        'bio',
        'json_data',
    ];
       protected $appends = ['profile_picture'];
    function getProfilePictureAttribute()
    {
        $this->hasOne(File::class)->where('type', 'profile')->first();
    }
    function getCoverPhotoAttribute()
    {
        $this->hasOne(File::class)->where('type', 'cover')->first();
    }
     public function getProfilePictureAttribute()
    {
        if(!$this->image){
            return url('asset/avatar.png');
        }
        $image=$this->image;
        if(file_exists('storage/'.$image)){
            return url('storage/'.$image);
        }else{
            return url('asset/avatar.png');
        }
    }
}
