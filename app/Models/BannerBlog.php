<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerBlog extends BaseModel
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

    // Define the relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
