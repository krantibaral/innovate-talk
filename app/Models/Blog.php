<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['image_url', 'thumb_url'];

    function getImageUrlAttribute()
    {
        return $this->getImage();
    }

    function getThumbUrlAttribute()
    {
        return $this->getThumbnail();
    }
}
