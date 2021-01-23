<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath =  ($this->image) ? $this->image : 'profile/nsesWEuD6r0eoBsruXX4DN6UKyYiSE6cKxYZHP9M.jpg';
        return "/storage/" . $imagePath;
    }

    public function followers() 
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
