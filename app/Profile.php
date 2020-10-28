<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){

        $imagePath = ($this->image) ? $this->image : '/upload/pzpv6X2OZCXLwwKtLiXkJbcE1EU9f79hThYhfM9L.jpeg';

        return '/storage/' . $imagePath;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
