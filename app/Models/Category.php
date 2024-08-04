<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['image_url', 'thumb_url'];

    public function getImageUrlAttribute()
    {
        return $this->getImage();
    }

    public function getThumbUrlAttribute()
    {
        return $this->getThumbnail();
    }


}
