<?php

namespace App\Models;

use App\Models\References\ImageCategory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
