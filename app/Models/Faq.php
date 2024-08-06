<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}